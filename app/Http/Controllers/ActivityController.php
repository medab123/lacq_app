<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use App\Services\PayUService\Exception;
use App\Models\Commande;
use App\Models\Commercial;
use App\Models\Commantaire;
use App\Models\Matrice;
use App\Models\Menu;
use App\Models\Client;
use App\Models\Analys;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Log;

use Notification;


class ActivityController extends Controller
{
    //
    function __construct()
    {
        $this->middleware('permission:activity-list', ['only' => ['index']]);
    }
    public function index(){
        $Activitys = Log::join("users","users.id","=","logs.user_id")
        ->select("logs.*","users.name","users.last_name")
        ->orderBy('id', 'desc')
        ->paginate(10);
        //dd($Activitys);
        $Activitys->setPath('/activitys');
        return view("activitys.index",["Activitys" => $Activitys]);
    }


}
