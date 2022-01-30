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
        $listData = DB::table($this->analyse_table)->get();
        return $listData;
    }
    public function headings():array{
        return Schema::getColumnListing($this->analyse_table);
    } 
}