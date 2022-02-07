<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Models\Matrice;
use Illuminate\Http\Request;
use App\Models\Lieu;
use App\Models\Analys; 
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AnalyseExport;
use App\Imports\AnalyseImport;
use App\Http\Controllers\ActivityController;
use App\Services\PayUService\Exception;


class AnalyseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $analyse_table = (empty($request["matrice"])) ? "analyse_eau_potable" : $request["matrice"];
        $unite_table = "analyse_unite_eau_potable";
        $selectedMatrice = 2;
        if($analyse_table != 'analyse_eau_potable'){
            $selectedMatrice = $request["matrice"];
            $analyse_table = Matrice::find($selectedMatrice)['name'];
            $analyse_table = strtolower($analyse_table); 
            $analyse_table = str_replace(' ', '_', $analyse_table); 
            $unite_table = "analyse_unite_".$analyse_table;
            $analyse_table = "analyse_".$analyse_table;
        }
        
        $listMatrices = Matrice::get();
        $columns =  Schema::getColumnListing($analyse_table);
        $formatedListUnites = [];
        
        if (Schema::hasTable($unite_table)) {
            $listUnites = DB::table($unite_table)->select("parametre","unite")->get();
            for($i = 0 ; $i<count($listUnites);$i++){
                foreach ($listUnites as $unite){
                    array_push($formatedListUnites,[$unite->parametre => $unite->unite]);
                }
            }
            $formatedListUnites= call_user_func_array('array_merge', $formatedListUnites);
        }
        

        $listData = DB::table($analyse_table)
        ->join("commandes","commandes.id","=", $analyse_table.".commande_id")
        ->select($analyse_table.".*","commandes.code_commande")
        ->orderBy($analyse_table.".id","asc")
        ->paginate(8);

        return view("analyses.index",["listUnites" => $formatedListUnites, "columns" => $columns,"listData" => $listData,"listMatrices" => $listMatrices,"selectedMatrice" => $selectedMatrice]);

    }
    public function export($matrice_id) 
    {
        $export = new AnalyseExport();
        $export->getTableName($matrice_id);
        return Excel::download($export, 'analyse_export.xlsx');
    }
    public function import(Request $request,$matrice_id) 
    {   
        $import = new AnalyseImport();
        $import->getTableName($matrice_id);
        try{
            $stat = Excel::import($import, $request->file('analyse_import')->store('temp'));
        }catch(\Exception $e){
            if(env('APP_DEBUG') == false){
                return redirect()->back()->with('error','Les analyses importer ne pas compatible ' )->with('selectedMatrice', $matrice_id);
            }
            return redirect()->back()->with('error','Les analyses importer ne pas compatible '.$e->getMessage() )->with('selectedMatrice', $matrice_id);
        }
        return redirect()->back()->with('success','Les analyses importer avec succès ')->with('selectedMatrice', $matrice_id);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $table = $request["selectedMatrice"];
        $table = Matrice::find($table)['name'];
        $table = strtolower($table); 
        $table = str_replace(' ', '_', $table); 
        $table = "analyse_".$table;
        $columns =  Schema::getColumnListing($table);
        $count = count($columns);
        ///dd($request);
        for($i = 0 ; $i<$count;$i++){
            $column = $columns[$i];
            if($column == "deleted_at" || $column == "id" || $column == "created_at" || $column == "updated_at" || $column == "commande_id"){
                unset($columns[$i]);
            }
        }        
        for($i = 0 ; $i<count($request["id"]);$i++){
            $analyseData = [];
            foreach ($columns as $column){
                $value = (str_replace(",",".",trim($request[$column][$i])));
                if(empty($value)){
                    $value = null;
                }
                array_push($analyseData,[$column => $value]);
            }
            $analyseData = call_user_func_array('array_merge', $analyseData);
            $analyse = DB::table($table)
            ->where('id', '=', $request["id"][$i])
            ->update($analyseData);
            ActivityController::updateActivity(new Analys(),"analyse ".$request["id"][$i]." update");
        }
        return redirect()->back()->with('success','Les analyses modifiée avec succès')->with('selectedMatrice', $request["selectedMatrice"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
