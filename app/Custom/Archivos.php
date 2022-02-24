<?php
namespace App\Custom;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class Archivos
{
    public static function imagenABase64($ruta_relativa_al_public)
    {
        if(File::exists($ruta_relativa_al_public)){
            $path = $ruta_relativa_al_public;
            //dd($path);
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = File::get($path);
            $base64 = "";
            if ($type == "svg") {
                $base64 = "data:image/svg+xml;base64,".base64_encode($data);
            } else {
                $base64 = "data:image/". $type .";base64,".base64_encode($data);
            }
            return $base64;
        }
    }

    public static function ft3nb($num,$force = false){
        $count = strlen(intval($num));
        if(is_float($num)){
            if($force){
                if($count < 3){
                    $num2 = number_format($num, 3-$count);
                }else if($count == 3){
                    $num2 = round($num, 3-$count,PHP_ROUND_HALF_ODD);
                }else{
                    $num2 = round($num, 0,PHP_ROUND_HALF_ODD);
                }
            }else{
                if($count < 3){
                    $num2 = round($num, 3-$count,PHP_ROUND_HALF_ODD);
                }else{
                    $num2 = round($num, 0,PHP_ROUND_HALF_ODD);
                }
            }
        }else{
            $num2=($force && $count < 3 ) ?  number_format($num, 3-$count):$num;
        }
        return $num2;
    }


    public static function costomDateFormate($original_date){
        $timestamp = strtotime($original_date);
        $new_date = date("d-m-Y", $timestamp);
        return $new_date;
    }
}
