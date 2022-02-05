<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Models\Matrice;
use Illuminate\Http\Request;
use App\Models\Lieu;
use App\Models\Analys; 

class AnalyseExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public  $analyse_table = null;
    public function getTableName($matrice_id){
        $analyse_table = Matrice::find($matrice_id)['name'];
        $analyse_table = strtolower($analyse_table); 
        $analyse_table = str_replace(' ', '_', $analyse_table); 
        $analyse_table = "analyse_".$analyse_table;
        $this->analyse_table = $analyse_table;
    }
    
    public function collection()
    {
        $listData = DB::table($this->analyse_table)
        ->join("commandes","commandes.id","=",$this->analyse_table.".commande_id")
        ->select("commandes.code_commande",$this->analyse_table.".*")
        ->get();
        $count = count($listData);
        for($i = 0 ; $i<$count;$i++){
            $listData =  collect($listData);
            unset($listData[$i]->id);
            unset($listData[$i]->commande_id);
            unset($listData[$i]->deleted_at);
            unset($listData[$i]->created_at);
            unset($listData[$i]->updated_at);
        } 
        //dd($listData);
        return $listData;
    }
    public function headings():array{
        $columns =  collect(\DB::select("describe ". $this->analyse_table))->pluck('Field')->toArray();
        
        $count = count($columns);
        
        array_unshift($columns,"code commande");
        unset($columns[$count]);
        for($i = 0 ; $i<$count;$i++){
            $column = $columns[$i];
            if($column == "id" || $column == "commande_id" || $column == "deleted_at" || $column == "created_at"){
                unset($columns[$i]);
            }
        } 
        //dd($columns);
        return $columns;
    } 
}
