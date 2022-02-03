<?php
namespace App\Custom;

class Archivos
{
    public static function imagenABase64($ruta_relativa_al_public)
    {
        $path = $ruta_relativa_al_public;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = \File::get($path);

        $base64 = "";
        if ($type == "svg") {
            $base64 = "data:image/svg+xml;base64,".base64_encode($data);
        } else {
            $base64 = "data:image/". $type .";base64,".base64_encode($data);      
        }
        return $base64;
    }

    public static function ft3nb($num){
        if(is_float($num)){
        $count = strlen(intval($num));
        $num2 = round($num, 3-$count,PHP_ROUND_HALF_ODD);
        }else{
        $num2 = $num;
        }
        return $num2; 
        }

        public static function costomDateFormate($original_date){
            $timestamp = strtotime($original_date);
            $new_date = date("d-m-Y", $timestamp);
            return $new_date;
            }      
}