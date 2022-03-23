<?php

namespace App\Http\Controllers;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardAdminController extends Controller
{
    public function CommandeByMatrice(){
        $CommandeByMatrice = Commande::join("menus","commandes.menu_id","=","menus.id")
        ->join("matrices","menus.matrice_id","=","matrices.id")
        ->select('matrices.name as label', DB::raw("count(*) as value"))->groupBy('matrices.name')->get();
        return response()->json($CommandeByMatrice);
    }
    public function AmountCommercial(){
        $AmountCommercial = Commande::join("menus","commandes.menu_id","=","menus.id")
        ->join("matrices","menus.matrice_id","=","matrices.id")
        ->join("commercials","commandes.commercial_id","=","commercials.id")
        ->select('commercials.name as commercial', DB::raw("count(*) as a"),DB::raw('YEAR(commandes.date_reception) as y'))->groupBy('commercials.name')->groupBy('y')->get();
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
        $AmountCommercial = DB::select("select a.commercial as name,
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
        ->select('commercials.name as commercial', DB::raw("count(*) as countCommandes"),DB::raw('YEAR(commandes.date_reception) as y'))
        ->where(DB::raw("YEAR(commandes.date_reception)"),date("Y"))
        ->orderBy("countCommandes","desc")
        ->take(5)
        ->groupBy('commercials.name')->groupBy('y')->get();

        //dd($AmountCommercial);
        return response()->json($top);
    }
    public function statistiqueLabo() {
        //select MONTHNAME(date_reception), count(id) from commandes where year(date_reception) = 2022 group by month(date_reception) ;
        $statistiqueLabo = DB::select("select m.month , count(id) as value from
        ( SELECT 'January' as month UNION SELECT 'February' AS MONTH
        UNION SELECT 'March' as MONTH
        UNION SELECT 'April' as MONTH
        UNION SELECT 'May' as MONTH
        UNION SELECT 'June' as MONTH
        UNION SELECT 'July' as MONTH
        UNION SELECT 'August' as MONTH
        UNION SELECT 'September' as MONTH
        UNION SELECT 'October' as MONTH
        UNION SELECT 'November' as MONTH
        UNION SELECT 'December' as month ) AS m left  JOIN commandes c ON MONTHNAME(c.date_reception) = m.month
        where (year(date_reception) = ".date("Y")." or year(date_reception) is null ) and (menu_id not in
        (select menus.id from menus inner join matrices on menus.matrice_id = matrices.id where matrices.name <> 'AMEO') or menu_id is null)   group by m.month;");
        return response()->json($statistiqueLabo);
    }
    public function withZone(Request $request){
        $chekcked = $request->input("chekcked");
        $sql =  "select count(c.id) as value ,c2.zone as zone
        from commandes c
        right join commercials c2 on c.commercial_id = c2.id
        where (year (c.date_reception )  = ".date("Y")." or year (c.date_reception ) is null )";
        ($chekcked == 'false') ? $sql .= ' and c2.zone not in ("EV MAROC","EV MALI","EVM","EVM DéVELOPPEMENT","EV SENEGAL","EV CôTE D\'IVOIRE")': $sql .= "";
        $sql .= "group by c2.zone
        order by c2.zone;";
        //dd($sql,$chekcked);
        $statistiqueLaboParZone = DB::select($sql);
        return response()->json($statistiqueLaboParZone);
    }
    public function CAbyZone(Request $request){
        $chekcked = $request->input("chekcked");
        $sql = "select a.zone,COALESCE(sum(a.totalparMENU), 0) as value from (select commercials.zone as zone ,(menus.prix_ht+menus.prix_supv)*count(menu_id) as totalparMENU
        from commercials
        left join commandes on commandes.commercial_id = commercials.id
        left join  menus on commandes.menu_id = menus.id
        left join matrices on  menus.matrice_id =matrices.id
        where (year(commandes.date_reception) = ".date("Y")." or commandes.date_reception is null)";
        ($chekcked == 'false') ? $sql .= ' and commercials.zone not in ("EV MAROC","EV MALI","EVM","EVM DéVELOPPEMENT","EV SENEGAL","EV CôTE D\'IVOIRE")': $sql .= "";
        $sql .=  " group by matrices.name ,commercials.zone) a group by a.zone;";

        $statistiqueLaboParZone = DB::select($sql);
        return response()->json($statistiqueLaboParZone);
    }
}
