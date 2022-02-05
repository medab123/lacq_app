<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\Commande;
use App\Models\Matrice;
use App\Services\PayUService\Exception;


use Illuminate\Support\Facades\DB;

class AnalyseImport implements ToCollection,WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public  $analyse_table = null;
    public function getTableName($matrice_id){
        $analyse_table = Matrice::find($matrice_id)['name'];
        $analyse_table = strtolower($analyse_table); 
        $analyse_table = str_replace(' ', '_', $analyse_table); 
        $analyse_table = "analyse_".$analyse_table;
        $this->analyse_table = $analyse_table;
    }
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $value) {
            $code_commande = $collection[$key]["code_commande"];
            if(Commande::where('code_commande', $code_commande)->exists()){
                $commande_id = Commande::where("code_commande","=",$code_commande)->first()["id"];
                unset($collection[$key]["code_commande"]);
                $collection[$key]->put("commande_id",$commande_id);
            }else{
                unset($collection[$key]);
            }
            
            //array_unshift($collection[$key],["commande_id" => 1]);
        }
        //dd($collection);
        foreach($collection->toArray() as $row){
            //dd($row);
            if(Commande::where('id', $row["commande_id"])->exists()){
                if(Commande::find($row["commande_id"])["state"] == "Valid"){
                    if (DB::table($this->analyse_table)->where('commande_id', $row["commande_id"] )->exists()) {
                        DB::table($this->analyse_table)->where("commande_id",'=',$row["commande_id"] )->update($row);
                    }else{
                        DB::table($this->analyse_table)->insert($row);
                    }
                }else{
                    
                    throw new \ErrorException('Commande not valide');
                }
            }
            
            
        }
        

        //dd($collection->toArray());
    }
}
