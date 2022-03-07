<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Closure;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use Maatwebsite\Excel\Concerns\ToArray;
use Spatie\Activitylog\Contracts\Activity;

class is_visiteur
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function getIp(){
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
            if (array_key_exists($key, $_SERVER) === true){
                foreach (explode(',', $_SERVER[$key]) as $ip){
                    $ip = trim($ip); // just to be safe

                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                        return $ip;
                    }
                }
            }
        }
        return request()->ip(); // it will return server ip when no client ip found
    }
    public function json_toArray(string $string){
        $output = str_replace(['[',']',' ','"'],'',$string);
        $arr = explode(",", $output);
        return $arr;
    }
    public function handle(Request $request, Closure $next)
    {
        //abort(500);
        //return $next($request);
        $defaultAction = ["LoginController@showLoginForm","LoginController@login","Closure","LoginController@logout","RoleController@index"];
        $action = explode('\\', $request->route()->getActionName());
        $action = $action[count($action)-1];
        echo $action;
        if(in_array($action, $defaultAction)){
            return $next($request);
        }

        $action_id = DB::table("activitys")->where('activity','=',$action )->first();
        if(!empty($action_id)){
            $action_id = $action_id->id;
        }else{
            abort(403);
        }
        $userId = Auth::user()->id ?? null;
        $userRole = Auth::user()->role_id ?? null;
        $ip = self::getIp();
        $alowdActivitys = DB::table("roles")->where('id','=', $userRole)->first();
        if(!empty($action_id)){
            $alowdActivitys = $alowdActivitys->activitys_id;
        }else{
            return $next($request);
        }
        $alowdActivitys = self::json_toArray($alowdActivitys);
        $alowd = in_array($action_id, $alowdActivitys);

        if($alowd) return $next($request);
        else abort(403);
        dd($action,$action_id,$userId,$userRole,$ip,$alowdActivitys,$alowd);
    }
}

