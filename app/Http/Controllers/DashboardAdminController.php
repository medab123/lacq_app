<?php

namespace App\Http\Controllers;
use App\Models\Commande;

use App\Models\Commercial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class DashboardAdminController extends Controller
{
    public function CommandeByMatrice(){
        $CommandeByMatrice = Commande::join("menus","commandes.menu_id","=","menus.id")
        ->join("matrices","menus.matrice_id","=","matrices.id")
        ->select('matrices.name as label', \DB::raw("count(*) as value"))->groupBy('matrices.name')->get();
        return response()->json($CommandeByMatrice);
    }
    public function AmountCommercial(){
        $AmountCommercial = Commande::join("menus","commandes.menu_id","=","menus.id")
        ->join("matrices","menus.matrice_id","=","matrices.id")
        ->join("commercials","commandes.commercial_id","=","commercials.id")
        ->select('commercials.name as commercial', \DB::raw("count(*) as a"),\DB::raw('YEAR(commandes.date_reception) as y'))->groupBy('commercials.name')->groupBy('y')->get();
        $AmountCommercial->transform(function ($AmountCommercial) {

            return [
                "y" => $AmountCommercial->y,
                $AmountCommercial->commercial => $AmountCommercial->a,
            ];
        });

        //dd($AmountCommercial);
        return response()->json($AmountCommercial);
    }
    public function commercialTable(){
        $AmountCommercial = \DB::select("select a.commercial as name,
        sum(a.totalparMENU) as Amount,
        a.mail as Contact,
        a.zone as Location
        from (select menus.name as menu , commercials.name as commercial,commercials.zone as zone,commercials.email as mail,count(menu_id) as count_menu,menus.prix_ht,menus.prix_supv  ,(menus.prix_ht+menus.prix_supv)*count(menu_id) as totalparMENU from commandes,commercials, menus, matrices   where  commandes.commercial_id = commercials.id and commandes.menu_id = menus.id and menus.matrice_id =matrices.id  group by matrices.name ,commercials.name)
        a  group by a.commercial order by Amount desc" );
        //dd($AmountCommercial);
        return response()->json($AmountCommercial);
    }
    public function top5Commercial(){
        $top =  Commande::join("menus","commandes.menu_id","=","menus.id")
        ->join("matrices","menus.matrice_id","=","matrices.id")
        ->join("commercials","commandes.commercial_id","=","commercials.id")
        ->select('commercials.name as commercial', \DB::raw("count(*) as countCommandes"),\DB::raw('YEAR(commandes.date_reception) as y'))
        ->where(\DB::raw("YEAR(commandes.date_reception)"),date("Y"))
        ->orderBy("countCommandes","desc")
        ->take(5)
        ->groupBy('commercials.name')->groupBy('y')->get();

        //dd($AmountCommercial);
        return response()->json($top);
    }
    public function statistiqueLabo() {
        //select MONTHNAME(date_reception), count(id) from commandes where year(date_reception) = 2022 group by month(date_reception) ;
        $statistiqueLabo = Commande::select(\DB::raw("MONTHNAME(date_reception) as Moi"),\DB::raw("count(id) as commandes"))
        ->where(\DB::raw("year(date_reception)"),date("Y"))
        ->groupBy(\DB::raw('month(date_reception)'))
        ->get();
        return response()->json($statistiqueLabo);
    }
}
