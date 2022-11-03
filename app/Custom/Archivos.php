<?php

namespace App\Custom;

use App\Models\Culture;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;


class Archivos
{
    public static function imagenABase64($ruta_relativa_al_public)
    {
        if (File::exists($ruta_relativa_al_public)) {
            $path = $ruta_relativa_al_public;
            //dd($path);
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = File::get($path);
            $base64 = "";
            if ($type == "svg") {
                $base64 = "data:image/svg+xml;base64," . base64_encode($data);
            } else {
                $base64 = "data:image/" . $type . ";base64," . base64_encode($data);
            }
            return $base64;
        }
    }

    public static function ft3nb($num, $force = false)
    {
        $count = strlen(intval($num));
        if (is_float($num)) {
            if ($force) {
                if ($count < 3) {
                    $num2 = number_format($num, 3 - $count);
                } else if ($count == 3) {
                    $num2 = round($num, 3 - $count, PHP_ROUND_HALF_ODD);
                } else {
                    $num2 = round($num, 0, PHP_ROUND_HALF_ODD);
                }
            } else {
                if ($count < 3) {
                    $num2 = round($num, 3 - $count, PHP_ROUND_HALF_ODD);
                } else {
                    $num2 = round($num, 0, PHP_ROUND_HALF_ODD);
                }
            }
        } else {
            $num2 = ($force && $count < 3) ?  number_format($num, 3 - $count) : $num;
        }
        return $num2;
    }

    public static function costomDateFormate($original_date)
    {
        $timestamp = strtotime($original_date);
        $new_date = date("d-m-Y", $timestamp);
        return $new_date;
    }

    public static function afficherBar($r, $min, $max, $prifix = null)
    {

        //SI(R25<=$L25-($M25-$L25)

        if ($r <= $min - ($max - $min)) {

            echo "<h6 style='color:#FFA500;font-size:8px'>IIIIII</h6>";
        } else {

            //SI(R25>=$M25+($M25-$L25);REPT("I";60)&"I"

            if ($r >= $max + ($max - $min)) {

                echo str_repeat("<h6 style='color:red;font-size:8px'>I</h6>", 57);
            }

            //REPT("I";27+(K27-$L27)/($M27-$L27)*13)&"I")

            else {

                $calcul = 20 + ($r - $min) / ($max - $min) * 19;
                if ($r <= $min) {
                    echo str_repeat("<h6 style='color:#FFA500;font-size:8px'>I</h6>", $calcul);
                } elseif ($r > $min && $r <= $max) {
                    echo str_repeat("<h6 style='color:green;font-size:8px'>I</h6>", $calcul);
                } elseif ($r > $max) {
                    echo str_repeat("<h6 style='color:red;font-size:8px'>I</h6>", $calcul);
                }
            }
        }
    }

    public static function EAP2($r, $min, $max, $prifix = null)
    {

        //SI(R25<=$L25-($M25-$L25)

        if ($r <= $min - ($max - $min)) {

            echo "<h6 style='color:#FFA500;font-size:8px'>IIIIII</h6>";
        } else {

            //SI(R25>=$M25+($M25-$L25);REPT("I";60)&"I"

            if ($r >= $max + ($max - $min)) {

                echo str_repeat("<h6 style='color:red;font-size:8px'>I</h6>", 88);
            }

            //REPT("I";27+(K27-$L27)/($M27-$L27)*13)&"I")

            else {

                $calcul = 30 + ($r - $min) / ($max - $min) * 29;
                $calcul = ($calcul < 0) ? 0 : $calcul;
                if ($r <= $min) {
                    echo str_repeat("<h6 style='color:#FFA500;font-size:8px'>I</h6>", $calcul);
                } elseif ($r > $min && $r <= $max) {
                    echo str_repeat("<h6 style='color:green;font-size:8px'>I</h6>", $calcul);
                } elseif ($r > $max) {
                    echo str_repeat("<h6 style='color:red;font-size:8px'>I</h6>", $calcul);
                }
            }
        }
    }

    public static function EAP($value, $min, $max)
    {

        $X = $value * 100 / ($max + $min);
        //$X=35;
        if ($X > 100);

        $barre = (int)$X * 90 / 100;
        //echo $X;
        //echo$max;
        //35
        if ($X <= 30) {

            echo str_repeat("<h6 style='color:#FFA500;font-size:8px'>I</h6>", $barre);
        } else if ($X <= 60 && $X >= 30) {

            echo  str_repeat("<h6 style='color:green;font-size:8px'>I</h6>", $barre);
        } else if ($X > 66) {

            echo str_repeat("<h6 style='color:red;font-size:8px'>I</h6>", $barre);
        }
    }

    public static function VEG($value, $min, $max)
    {

        $X = $value * 100 / ($max + $min);
        //$X=35;
        if ($X > 100);

        $barre = (int)$X * 90 / 100;
        //echo $X;
        //echo$max;
        //35
        if ($X <= 30) {

            echo str_repeat("<h6 style='color:#FFA500;font-size:8px'>I</h6>", $barre);
        } else if ($X <= 60 && $X >= 30) {

            echo  str_repeat("<h6 style='color:green;font-size:8px'>I</h6>", $barre);
        } else if ($X > 66) {

            echo str_repeat("<h6 style='color:red;font-size:8px'>I</h6>", $barre);
        }
    }


    public static function SelectCultures()
    {

        $cultures = "OLIVIER";

        $users = DB::table('OLIVIER')->get();

        foreach ($users as $user) {
            dd($user->id);
        }
    }
    public static function map($value, $fromLow, $fromHigh, $toLow, $toHigh)
    {
        $fromRange = $fromHigh - $fromLow;
        $toRange = $toHigh - $toLow;
        $scaleFactor = $toRange / $fromRange;
        // Re-zero the value within the from range
        $tmpValue = $value - $fromLow;
        // Rescale the value to the to range
        $tmpValue *= $scaleFactor;
        // Re-zero back to the to range
        return $tmpValue + $toLow;
    }

    public static function GeneratTriengleTextural($argile, $limons, $sables)
    {
        if (($argile + $limons + $sables) == 1000) {
            $posx = self::map($argile, 0, 1000, 85, 1200);
            $posy = self::map(($limons + $sables), 0, 1000, 426, 10);
            $img = Image::make('img/TriengleTextural.PNG');
            $img->rectangle($posx, $posy, $posx + 30, $posy + 30, function ($draw) {
                $draw->background('#008000');
            });
            //echo  '<img src="' . $img->encode('data-url') . '" height="500px">';
            return $img->encode('data-url');
        }
    }
}
