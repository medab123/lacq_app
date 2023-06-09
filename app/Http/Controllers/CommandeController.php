<?php

namespace App\Http\Controllers;
use App\Services\PayUService\Exception;
use App\Models\Commande;
use App\Models\Commercial;
use App\Models\Commantaire;
use App\Models\Matrice;
use App\Models\Menu;
use App\Models\Lieu;
use Illuminate\Support\Facades\Schema;

use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Notification;
use App\Notifications\SendEmailNotification;
use App\Http\Controllers\ActivityController;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:commande-list|commande-valider|commande-rejter|commande-edit|commande-delete', ['only' => ['index','show','search','getCommandesWhereState']]);
         $this->middleware('permission:commande-create', ['only' => ['create','store']]);
         $this->middleware('permission:commande-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:commande-delete', ['only' => ['destroy']]);
         $this->middleware('permission:commande-valider', ['only' => ['valider']]);
         $this->middleware('permission:commande-reject', ['only' => ['reject']]);

    }
    public static function index()
    {
        //
        $listMatrices = Matrice::get();
        $listLieus = Lieu::get();
        $listCultures = Commande::select('culture')->distinct()->get();
        $listNatures  = Commande::select('nature')->distinct()->get();
        $listVarites  = Commande::select('varite')->distinct()->get();
        $listCommercials  = Commercial::get();
        $listClients  = Client::get();
        $listCommandes  = Commande::join('clients', 'clients.id', '=', 'commandes.client_id')
        ->join('commercials', 'commercials.id', '=', 'commandes.commercial_id')
        ->join('menus', 'menus.id', '=', 'commandes.menu_id')
        ->select("commandes.*","menus.name as menu","clients.exploiteur as client","commercials.name as commercial")
        ->paginate(20);
        $listCommandes->setPath('/commandes');


        return view("commandes.index",["listLieus" => $listLieus,"listCommandes" => $listCommandes,"listMatrices" => $listMatrices,"listCultures" => $listCultures ,"listNatures" => $listNatures , "listVarites" => $listVarites, "listCommercials" => $listCommercials,"listClients" => $listClients,"state" => 0]);
    }
    public static function json($page)
    {
        //
        $listCommandes  = Commande::join('clients', 'clients.id', '=', 'commandes.client_id')
        ->join('commercials', 'commercials.id', '=', 'commandes.commercial_id')
        ->join('menus', 'menus.id', '=', 'commandes.menu_id')
        ->select("commandes.*","menus.name as menu","clients.exploiteur as client","commercials.name as commercial")
        ->paginate(20,['*'], 'page', $page);
        $listCommandes->setPath('/commandes');

        $table = view('commandes.table', compact('listCommandes'))->render();
        return response()->json(compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listLieus = Lieu::get();
        $listMatrices = Matrice::get();
        $listCultures = Commande::select('culture')->distinct()->get();
        $listNatures  = Commande::select('nature')->distinct()->get();
        $listVarites  = Commande::select('varite')->distinct()->get();
        $listCommercials  = Commercial::get();
        $listClients  = Client::get();
        return view("commandes.create",["listLieus" => $listLieus,"listMatrices" => $listMatrices,"listCultures" => $listCultures ,"listNatures" => $listNatures , "listVarites" => $listVarites, "listCommercials" => $listCommercials,"listClients" => $listClients]);
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
        //echo print_r($request);
        $cin_rc = $request["client"][0];
        $id_client = Client::select("id")->where("cin_rc","=",$cin_rc)->first()["id"];
        $commercial = $request->input("commercial");
        $id_commercial = Commercial::select("id")->where("name","=",$commercial)->first()["id"];
        //print_r($request->input());
        //echo json_encode($request->input());
        for($i = 0 ; $i<count($request["matrice"]);$i++){
            $mailError = null;
            $commande = new Commande();
            $commande->code_commande = null;
            $commande->client_id = $id_client;
            $commande->commercial_id = $id_commercial;
            $commande->menu_id = $request["menu"][$i];
            $commande->lieu_id = $request["lieu_id"][0];
            $commande->ref_client = $request["ref_client"][$i];
            $commande->nature = $request["nature"][$i];
            $commande->culture = $request["culture"][$i];
            $commande->varite = $request["varite"][$i];
            $commande->gps_1 = $request["gps_1"][$i];
            $commande->gps_2 = $request["gps_2"][$i];
            $commande->horizon_1 = $request["horizon_1"][$i];
            $commande->horizon_2 = $request["horizon_2"][$i];
            $commande->temperature = $request["temperateur"][$i];
            $commande->date_reception = $request["date_reception"][0];
            $commande->quantite = $request["quantite"][0];
            $commande->date_prelevement = $request["date_prelevement"][$i];
            $commande->date_edition = date('Y-m-d');
            $commande->state =  "En cours";
            if($request->hasFile('image_1')){
                $img_1=md5($request->file('image_1')[$i]->getClientOriginalName(). time()).".".$request->file('image_1')[$i]->extension();
                $destination=base_path().'/public/img/commande/ameo';
                $request->file('image_1')[$i]->move($destination, $img_1);
            }else{
                $img_1 = NULL;
            }
            if($request->hasFile('image_2')){
                $img_2=md5($request->file('image_2')[$i]->getClientOriginalName(). time()).".".$request->file('image_2')[$i]->extension();
                $destination=base_path().'/public/img/commande/ameo';
                $request->file('image_2')[$i]->move($destination, $img_2);
            }else{
                $img_2 = NULL;
            }
            $commande->img_1 = $img_1;
            $commande->img_2 = $img_2;
            $commande->save();
            try{
                self::notifNewCommande($commande->id);
            }catch(\Exception $e){
                $mailError = " [lacq-app not connected with serveur mail]";
            }
        }
        return redirect()->back()->with('success','Commande ajoutée avec succès'.$mailError);
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
        $commmande = Commande::join('commercials', 'commercials.id', '=', 'commandes.commercial_id')
        ->join('menus', 'menus.id', '=', 'commandes.menu_id')
        ->join('matrices', 'matrices.id', '=', 'menus.matrice_id')
        ->select("commandes.*","commercials.name as commercial","matrices.id as matrice_id")
        ->where("commandes.id","=",$id)
        ->first();
        echo json_encode($commmande);
        exit();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function genirationCodeCommande($id,$matrice_id = null){
        if($matrice_id == null){
             $codeMatrice = Commande::join("menus","commandes.menu_id","=","menus.id")
            ->join("matrices","menus.matrice_id","=","matrices.id")
            ->select("matrices.code as startCode")
            ->where("commandes.id","=",$id)
            ->first()["startCode"];
        }else{
            $codeMatrice = Matrice::find($matrice_id)["code"];
        }


        $lastCode = Commande::select("code_commande as code")
        ->where("code_commande","like",$codeMatrice."%")
        ->orderByRaw('id desc')
        ->first();
        (!empty($lastCode)) ? $code = $lastCode["code"] + 1 : $code = $codeMatrice."001";
        return  $code;
    }

    public function update(Request $request, $id)
    {
        //
        $old_matrice_id = Menu::find(Commande::find($id)["menu_id"])["matrice_id"];
        $new_matrice_id = Menu::find($request->input("menu"))["matrice_id"];
        $analyse_table = "analyse_".str_replace(' ', '_', strtolower(Matrice::find($old_matrice_id)["name"]));
        if (Schema::hasTable($analyse_table)) {
            if(DB::table($analyse_table)->where("commande_id",$id)->first()){
                DB::table($analyse_table)->where("commande_id",$id)->delete();
            }
        }
        $analyse_table = "analyse_".str_replace(' ', '_', strtolower(Matrice::find($new_matrice_id)["name"]));
        if (Schema::hasTable($analyse_table)) {
            if(!DB::table($analyse_table)->where("commande_id","=",$id)->first()){
                DB::table($analyse_table)->insert([
                    'commande_id' => $id,
                ]);
            }
        }
        $code_commande = ($old_matrice_id == $new_matrice_id) ? Commande::find($id)["code_commande"] : self::genirationCodeCommande(null,$new_matrice_id);
        $commercial = $request->input("commercial");
        $id_commercial = Commercial::select("id")->where("name","=",$commercial)->first()["id"];
        $commande = Commande::find($id);
        $commande->code_commande = $code_commande;
        $commande->client_id = $request->input("client");
        $commande->commercial_id = $id_commercial;
        $commande->menu_id = $request->input("menu");
        $commande->lieu_id = $request->input("lieu_id");
        $commande->ref_client = $request->input("ref_client");
        $commande->nature = $request->input("nature");
        $commande->culture = $request->input("culture");
        $commande->varite = $request->input("varite");
        $commande->gps_1 = $request->input("gps_1");
        $commande->gps_2 = $request->input("gps_2");
        $commande->horizon_1 = $request->input("horizon_1");
        $commande->horizon_2 = $request->input("horizon_2");
        $commande->temperature = $request->input("temperateur");
        $commande->date_reception = $request->input("date_reception");
        $commande->quantite = $request->input("quantite");
        $commande->date_prelevement = $request->input("date_prelevement");
        if($request->hasFile('image_1')){
            $img_1=md5($request->file('image_1')->getClientOriginalName(). time()).".".$request->file('image_1')->extension();
            $destination=base_path().'/public/img/commande/ameo';
            $request->file('image_1')->move($destination, $img_1);
        }else{
            $img_1 = $commande->img_1;
        }
        if($request->hasFile('image_2')){
            $img_2=md5($request->file('image_2')->getClientOriginalName(). time()).".".$request->file('image_2')->extension();
            $destination=base_path().'/public/img/commande/ameo';
            $request->file('image_2')->move($destination, $img_2);
        }else{
            $img_2 = $commande->img_2;
        }
        $commande->img_1 = $img_1;
        $commande->img_2 = $img_2;
        $commande->save();
        return redirect()->back()->with('success','Commande modifiée avec succès');


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
        $commande = Commande::find($id);
        $commande->delete();
        return response()->json(['status' => true, 'message' =>'Commande supprimée avec succès']);

    }
    public function notifCommandeValider($idCommande)
    {
        $CommandeDetaile = Commande::join('clients', 'clients.id', '=', 'commandes.client_id')
        ->where("commandes.id","=",$idCommande)
        ->select("clients.*","commandes.*")
        ->first();
        $user = User::where("role_id","=","1")
        ->get();
        $body = "<tr><th>Actionneur : ";
        $details=[
            "subject" => 'Commande '.$CommandeDetaile->code_commande,
            "greeting" => "Commande ". $CommandeDetaile->code_commande ." récemment validée :",
            "body" => [ 1 => "L'échantillon de l'exploiteur ". $CommandeDetaile->exploiteur ." été receptioné physiquement " ,
                        2 => "Organisme : ".$CommandeDetaile->organisme,
                        3 => "",
                        4 => ""
                      ],
            "actiontext" => "Go to Commandes",
            "actionurl" => url("/commandes"),
        ];
        //Notification::route('mail', "mohammed.el-abidi@elephant-vert.com")->notify(new SendEmailNotification($details));
        Notification::send($user,new SendEmailNotification($details));
    }
    public function notifNewCommande($idCommande)
    {
        $CommandeDetaile = Commande::join('clients', 'clients.id', '=', 'commandes.client_id')
        ->where("commandes.id","=",$idCommande)
        ->select("clients.*","commandes.*")
        ->first();
        $user = User::where("id","=","1")
        ->get();
        $body = "<tr><th>Actionneur : ";
        $details=[
            "subject" => "Nouvel échantillon ".$CommandeDetaile->id,
            "greeting" => "Nouvel échantillon ". $CommandeDetaile->id ." :",
            "body" => [ 1 => "Les papiers de l'échantillon de l'exploiteur ". $CommandeDetaile->exploiteur ." été réceptionné ",
                        2 => "CIN/RC : ".$CommandeDetaile->cin_rc,
                        3 => "Organisme : ".$CommandeDetaile->organisme,
                        4 => "Adresse : ".$CommandeDetaile->adresse
                     ],
            "actiontext" => "Go to Commandes",
            "actionurl" => url("/commandes"),
        ];
        //Notification::route('mail', "mohammed.el-abidi@elephant-vert.com")->notify(new SendEmailNotification($details));
        Notification::send($user,new SendEmailNotification($details));
    }

    /////////////////////////////////////////////////////////

    public static function search(Request $request){
        $buffer = $request->input("buffer");
        $listCommandes = Commande::join('clients', 'clients.id', '=', 'commandes.client_id')
        ->join('commercials', 'commercials.id', '=', 'commandes.commercial_id')->join('menus', 'menus.id', '=', 'commandes.menu_id')
        ->select("commandes.*","menus.name as menu","clients.exploiteur as client","commercials.name as commercial")
        ->where("commandes.id", 'LIKE', '%' . $buffer . '%')
        ->orWhere("code_commande", 'LIKE', '%' . $buffer . '%')
        ->orWhere("date_reception", 'LIKE', '%' . $buffer . '%')
        ->orWhere("commercials.name", 'LIKE', '%' . $buffer . '%')
        ->orWhere("clients.exploiteur", 'LIKE', '%' . $buffer . '%')
        ->orWhere("menus.name", 'LIKE', '%' . $buffer . '%')
        ->get();
        $table = view('commandes.table', compact('listCommandes'))->render();
        return response()->json(compact('table'));

    }
    public static function getCommandesWhereState($state)
    {
        $listLieus = Lieu::get();
        $listMatrices = Matrice::get();
        $listCultures = Commande::select('culture')->distinct()->get();
        $listNatures  = Commande::select('nature')->distinct()->get();
        $listVarites  = Commande::select('varite')->distinct()->get();
        $listCommercials  = Commercial::get();
        $listClients  = Client::get();
        switch($state){
            case 0: $statu = ""; break;
            case 1: $statu = "En cours"; break;
            case 2: $statu = "Valid"   ; break;
            case 3: $statu = "Rejete"  ; break;
            default: abort(404);
        }
        if($statu != "")
        $listCommandes  = Commande::join('clients', 'clients.id', '=', 'commandes.client_id')
        ->join('commercials', 'commercials.id', '=', 'commandes.commercial_id')
        ->join('menus', 'menus.id', '=', 'commandes.menu_id')
        ->select("commandes.*","menus.name as menu","clients.exploiteur as client","commercials.name as commercial")
        ->where("state","=",$statu)
        ->paginate(20);
        else
        $listCommandes  = Commande::join('clients', 'clients.id', '=', 'commandes.client_id')
        ->join('commercials', 'commercials.id', '=', 'commandes.commercial_id')->join('menus', 'menus.id', '=', 'commandes.menu_id')
        ->select("commandes.*","menus.name as menu","clients.exploiteur as client","commercials.name as commercial")
        ->paginate(20);

        return view("commandes.index",["listLieus" => $listLieus,"listCommandes" => $listCommandes ,"listMatrices" => $listMatrices,"listCultures" => $listCultures ,"listNatures" => $listNatures , "listVarites" => $listVarites, "listCommercials" => $listCommercials,"listClients" => $listClients,"state" => $state]);
    }
    public function valider($id){

        try{
            $commande = Commande::find($id);
            $codeCommande = self::genirationCodeCommande($id);
            $commande->code_commande = (empty($commande->code_commande)) ? $codeCommande : $commande->code_commande;
            $commande->state = "Valid";
            $commande->save();

            $commandeMatrice = Commande::join('menus', 'menus.id', '=', 'commandes.menu_id')
            ->join('matrices', 'matrices.id', '=', 'menus.matrice_id')
            ->select("matrices.name as matrice")
            ->where("commandes.id","=",$id)
            ->first()["matrice"];
            $analyse_table = $commandeMatrice;
            $analyse_table = strtolower($analyse_table);
            $analyse_table = str_replace(' ', '_', $analyse_table);
            $analyse_table = "analyse_".$analyse_table;
            if (Schema::hasTable($analyse_table)) {
                if(!DB::table($analyse_table)->where("commande_id","=",$id)->first()){
                    DB::table($analyse_table)->insert([
                        'commande_id' => $id,
                    ]);
                }
            }
            try{
                self::notifCommandeValider($id);
            }catch(\Exception $e){
                return response()->json([['status' => false,'message' => 'Mail not sended'],['status' => true,'message' => 'Commande validée avec succès']]);
            }
            return response()->json([['status' => true,'message' => 'Commande validée avec succès']]);
        }catch(\Exception $e){
            echo $e->getMessage();
            //return redirect()->back()->with('error','Commande n\'pas valider !');

        }
    }
    public function reject(Request $request){
        $validated = $request->validate([
            'commantaire' => 'required|min:1',
        ]);
        $commande_id = $request->input("commande_id");
        $commantaire = new Commantaire();
        $commantaire->commande_id = $commande_id;
        $commantaire->user_id = Auth::user()->id;
        $commantaire->content = $request->input("commantaire");
        $commantaire->save();
        $commande = Commande::find($commande_id);
        $commande->state = "Rejete";
        $commande->save();
        $commandeMatrice = Matrice::find(Menu::find($commande->menu_id)["matrice_id"])["name"];
        $analyse_table = $commandeMatrice;
        $analyse_table = strtolower($analyse_table);
        $analyse_table = str_replace(' ', '_', $analyse_table);
        $analyse_table = "analyse_".$analyse_table;
        if (Schema::hasTable($analyse_table)) {
            if(DB::table($analyse_table)->where("commande_id",$commande->id)->first()){
                DB::table($analyse_table)->where("commande_id",$commande->id)->delete();
            }
        }
        return response()->json(['status' => true,'message' => 'Commande rejetée avec succès']);
    }
    public function menuOfMatrice($matrice_id){
        $listMenus = Menu::where("matrice_id","=",$matrice_id)
        ->select("id","name")
        ->get();
        return response()->json($listMenus);
    }
    public function getCommantaire($commande_id){
        $commantaire = Commantaire::select("content as commantaire")
        ->where("commande_id","=",$commande_id)
        ->orderByRaw('id desc')
        ->first();
        return response()->json($commantaire);
    }

}
