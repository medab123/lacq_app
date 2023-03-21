<?php

namespace App\Http\Controllers;
use App\Models\CulturData;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CommandeController;
use App\Models\Commande;
use App\Models\Cultur;

use Dompdf\Options as Options;
use PDF;



use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;


class ReportController extends Controller
{

    public function index($commande_id){
        $commande_info =Commande::join('menus', 'menus.id', '=', 'commandes.menu_id')
        ->join('matrices', 'matrices.id', '=', 'menus.matrice_id')
        ->join('lieus', 'lieus.id', '=', 'commandes.lieu_id')
        ->join('commercials', 'commercials.id', '=', 'commandes.commercial_id')
        ->select("matrices.name as matrice","commandes.*","commercials.name as commercial")
        ->where("commandes.id","=",$commande_id)
        ->first();

        $analyse_table = $commande_info["matrice"];
        $analyse_table = strtolower($analyse_table);
        $analyse_table = str_replace(' ', '_', $analyse_table);
        $analyse_table = "analyse_".$analyse_table;
        $analyse_blade = "report/".$analyse_table;
        if (!View::exists($analyse_blade)) abort(404);

        $client_info = Commande::join("clients","clients.id","commandes.client_id")
        ->select("commandes.*","clients.*")
        ->where("commandes.id","=",$commande_id)
        ->first();

        $analyse_data = DB::table($analyse_table)
        ->where('commande_id', '=', $commande_id)
        ->first();

        $commantair = ["Les valeurs trouvées en paramètres recherchés (pH, Conductivité électrique, Turbidité, Oxydabilité, NO3, NO2, Mn, Cu, Zn et Fer) répondent aux critères physico-chimique indiqués selon la norme NM 03.70.01-2020 relative à la qualité des eaux d'alimentation humaine. ","Les valeurs trouvées en paramètres recherchés (pH, Conductivité électrique, Turbidité, Oxydabilité, NO3, NO2, Mn, Cu, Zn et Fer) ne répondent pas aux critères physico-chimique indiqués selon la norme NM 03.70.01-2020 relative à la qualité des eaux d'alimentation humaine."];
        $culturData =null;
        $cultur = null;
        if($commande_info->culture != "_"){
            $cultur = strtolower($commande_info->culture);
            $culturData = CulturData::where('cultur_name',$cultur)->get(["parametre","min","max"])->toArray();
           
            $culturData2 = new \stdClass();
            collect($culturData)->map(function($item) use ($culturData2){
                $a = $item["parametre"];
                $culturData2->$a = ["min" => $item["max"],"max"=>$item["min"]];
                //echo $item["parametre"]."<br>";
            });
           
            //$test->$a = 1;
            
        }
        //dd($culturData2,$culturData);
        return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView($analyse_blade,["commantair" => $commantair,"commande_info" => $commande_info,"client_info" => $client_info,"analyse_data" => $analyse_data,"cultureData" => $culturData2,"culture" => $cultur])->setOptions(['defaultFont' => 'sans-serif'])->stream();
    }


}
