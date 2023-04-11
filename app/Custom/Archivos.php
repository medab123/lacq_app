<?php

namespace App\Custom;

use App\Models\Culture;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
use PhpParser\Node\Expr\Cast\Object_;

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
    public static function EAP($value, $min, $max)
    {

        $x = $value * 100 / ($max + $min);
        //$x=35;
        if ($x > 100);

        $barre = (int)$x * 90 / 100;
        //echo $x;
        //echo$max;
        //35
        if ($x <= 30) {

            echo str_repeat("<h6 style='color:#FFA500;font-size:8px'>I</h6>", $barre);
        } else if ($x <= 60 && $x >= 30) {

            echo  str_repeat("<h6 style='color:green;font-size:8px'>I</h6>", $barre);
        } else if ($x > 66) {

            echo str_repeat("<h6 style='color:red;font-size:8px'>I</h6>", $barre);
        }
    }

    public static function VEG($value, $min0, $max0)
    {
        $min = min($max0, $min0);
        $max = max($max0, $min0);
        $moy = ($min + $max) / 2;
        $max2 = max(2 * ($max - $moy), 0.0001);
        $graph = "";
        $max_of_td = 41;
        $x = (($value - $moy) * 100) / $max2;
        $barre = max(0, min(abs((int)$x * $max_of_td / 100), $max_of_td));
        $color = ($value < $min) ? "#FFA500" : (($value > $max) ? "red" : "green");
        $graph = str_repeat("<h6 style='color:$color;font-size:8px'>I</h6>", $barre);
        $graph = self::generateGraph($value <= $moy, $barre); // Red
        if ($value <= $moy)
            return  '<td style="text-align:right;width: 121px;z-index:10;padding:0px !important;border-right: black 1px dashed">  ' . $graph . '</td>
                 <td style="width: 121px;padding:0px !important">' . '' . '</td>';
        if ($value > $moy)
            return  '<td style="text-align:right;width: 121px;z-index:10;padding:0px !important;border-right: black 1px dashed">' . '' . '</td>
                 <td style="width: 121px;padding:0px !important">  ' . $graph . '</td>';
    }
    public static function generateGraph($choix, $n)
    {
        $n = intval($n);
        $res = "";
        $color = $choix ? [255 - ((41 - $n) * 6.3), 180 + ((41 - $n) * 1.8), 0] : [0, 255, 0];
        // Calculate the color step based on the number of elements
        for ($i = 0; $i < $n; $i++) {
            if ($choix == 1) {
                $color = [max($color[0] - 6.3, 0), max(0, $color[1] + 1.8), $color[2]];
            } else {
                $color = [min($color[0] + 6.3, 255), max(0, $color[1] - 6.3), $color[2]];
            }
            $res .= "<h6 style='color:rgb(" . $color[0] . "," . $color[1] . "," . $color[2] . ");font-size:8px'>I</h6>";
        }
        return $res;
    }
    public static function parametreStatusSec3($res, $min0, $max0)
    {
       // echo $min0."  ". $max0 ,"<br>";
        $min = min($min0,$max0);
        $max = max($min0,$max0);
        if ($res > $max) {
            return "Elevé";
        }else if ($res < $min) {
            return "Faible";
        } else {
            return "correct";
        }
    }
    public static function parametreStatusSec1($res,$min0, $max0)
    { 
        //echo $res,$min0, $max0 ,"<br>";
        $min = min($min0,$max0);
        $max = max($min0,$max0);
        $moy = ($min + $max) / 2;
        $coef = 1 - ($min / $moy);
        $t_max = $moy * (1 + (3 * $coef));
        $t_min = $moy * (1 - (2.25 * $coef));

        if ($res > $t_max) {
            return "Très élevé";
        } else if ($res > $max) {
            return "Elevé";
        } else if ($res < $t_min) {
            return "Très faible";
        } else if ($res < $min) {
            return "Faible";
        } else {
            return "correct";
        }
    }
    public static function com1(\stdClass $data)
    {

        $res_ntk     = $data->NTK["res"];
        $min_ntk     = $data->NTK["min"];
        $max_ntk     = $data->NTK["max"];
        $res_ca      = $data->Ca["res"];
        $min_ca      = $data->Ca["min"];
        $max_ca      = $data->Ca["max"];
        $res_nRca    = $data->NTK["res"]/$data->Ca["res"];
        $min_nRca    = $data->NrCa["min"];
        $max_nRca    = $data->NrCa["max"];
        $status_ntk  = self::parametreStatusSec1($res_ntk, $min_ntk, $max_ntk);
        $status_ca   = self::parametreStatusSec1($res_ca, $min_ca, $max_ca);
        $status_nRca = self::parametreStatusSec3($res_nRca, $min_nRca, $max_nRca);
        //dd($status_ntk, $status_ca, $status_nRca);

        $commantaire     = "";
        if ($status_ntk   == "Très faible" && $status_nRca == "Faible") {
            $commantaire =  "Teneur très limitée en azote aussi bien en niveau qu'en équlibre avec le calcium. Cela traduit un végétal plus sénescent que la référence. Vérifier la disponibilité azotée et hydrique sur cette parcelle (en terme de quantité et de régularité des apports).";
        } else if ($status_ntk == "Très faible" && $status_nRca == "correct") {
            $commantaire =  "Teneur très faible en azote, mais en équilibre correct vis-à-vis du calcium. Cela montre un déséquilibre végétatif très important ou un phénomène de dilution.";
        } else if ($status_ntk == "Très faible" && $status_nRca == "Elevé") {
            $commantaire =  " Très faibles teneurs en azote et en calcium, montrant un phénomène de dilution. Le rapport N/Ca élevé, traduit des feuilles trop juvéniles. Ne pas accentuer les apports en azote et vérifier impérativement la disponibilité en calcium.";
        } else if ($status_ntk == "Faible" && $status_nRca == "Faible") {
            $commantaire =  "Teneur limitée en azote aussi bien en niveau qu'en équlibre avec le calcium. Cela traduit un végétal plus sénescent que la référence. Vérifier la disponibilité azotée et hydrique sur cette parcelle (en terme de quantité et de régularité des apports).";
        } else if ($status_ntk == "Faible" && $status_ca == "faible" && $status_nRca == "correct") {
            $commantaire =  "Teneur faible en azote, mais en équilibre correct vis-à-vis du calcium. Cela montre un déséquilibre végétatif important ou un phénomène de dilution. ";
        } else if ($status_ntk == "Faible" && $status_nRca == "correct") {
            $commantaire =  "Teneur faible en azote. Vérifier l'équilibre végétatif et la disponibilité azotée et hydrique sur cette parcelle.";
        } else if ($status_ntk == "Faible" && $status_nRca == "Elevé") {
            $commantaire =  "Faibles teneurs en azote et en calcium, montrant un phénomène de dilution. Le rapport N/Ca élevé, traduit des feuilles trop juvéniles. Ne pas accentuer les apports en azote. Vérifier impérativement la disponibilité en calcium du sol.";
        } else if ($status_ntk == "correct" && $status_nRca == "Faible") {
            $commantaire =  "Niveau correct en azote, mais trop moyen par rapport au calcium. Vérifier l'équilibre végétatif et la disponibilité azotée et hydrique sur cette parcelle.";
        } else if ($status_ntk == "correct" && $status_nRca == "correct") {
            $commantaire =  "Niveau correct en azote et en équilibre favorable vis-à-vis du calcium, montrant une bonne gestion de la fertilisation azotée.";
        } else if ($status_ntk == "correct" && $status_nRca == "Elevé") {
            $commantaire =  "Teneur correcte en azote, mais trop élevée par rapport au calcium, montrant des feuilles plus juvéniles que la référence. Ne pas accentuer les apports azotés et vérifier la disponibilité en calcium du sol.";
        } else if ($status_ntk == "Elevé" && $status_nRca == "Faible") {
            $commantaire =  "Niveaux soutenus en azote et calcium liés à un effet de concentration, mais le rapport N/Ca est limité. Vérifier l'équilibre végétatif / fructifère et la disponibilité hydrique.";
        } else if ($status_ntk == "Elevé" && $status_nRca == "correct") {
            $commantaire =  "Niveau déja soutenu en azote, mais en équilibre correct avec le calcium, ne pas accentuer les apports d'azote sur cette parcelle.";
        } else if ($status_ntk == "Elevé" && $status_nRca == "Elevé") {
            $commantaire =  "Teneur soutenue en azote, accentuée par le moindre niveau en calcium. Cela traduit un retard végétatif ou une disponibilité trop soutenue en azote. Ne pas accentuer les apports azotés ou hydrique sur cette parcelle.";
        } else if ($status_ntk == "Très élevé" && $status_nRca == "Faible") {
            $commantaire =  "Niveaux très soutenus en azote et calcium liés à un effet de concentration, mais le rapport N/Ca est limité. Vérifier l'équilibre végétatif et fructifère et la disponibilité hydrique.";
        } else if ($status_ntk == "Très élevé" && $status_nRca == "correct") {
            $commantaire =  "Niveau très élevé en azote, mais en équilibre correct avec le calcium, ne pas accentuer les apports d'azote sur cette parcelle.";
        } else if ($status_ntk == "Très élevé" && $status_nRca == "Elevé") {
            $commantaire =  "Teneur très soutenue en azote, accentuée par le moindre niveau en calcium. Cela traduit un retard végétatif ou une disponibilité trop soutenue en azote. Ne pas accentuer les apports azotés ou hydrique sur cette parcelle.";
        }
        return $commantaire;
    }
    public static function com2(\stdClass $data)
    {
        //dd($data);
        $res_pt       = $data->PT["res"];
        $min_pt       = $data->PT["min"];
        $max_pt       = $data->PT["max"];
        $res_nRp      = $data->NTK["res"]/$data->PT["res"];
        $min_nRp      = $data->NrP["min"];
        $max_nRp      = $data->NrP["max"];
        $res_nRca     = $data->NTK["res"]/$data->Ca["res"];
        $min_nRca     = $data->NrCa["min"];
        $max_nRca     = $data->NrCa["max"];
        $status_pt    = self::parametreStatusSec1($res_pt, $min_pt, $max_pt);
        $status_nRp   = self::parametreStatusSec3($res_nRp, $min_nRp, $max_nRp);
        $status_nRca  = self::parametreStatusSec3($res_nRca, $min_nRca, $max_nRca);
        //dd($status_pt, $status_nRp, $status_nRca);

        $commantaire     = "";
        if($status_pt == "Très faible" && $status_nRp == "Faible"){
            $commantaire =  "Teneur en phosphore  très limitée mais en équilibre correct avec l'azote. Maintenir ce rapport favorable en augmentant proportionnellement la disponibilité en azote et en phosphore.";
        }
        else if($status_pt == "Très faible" && $status_nRp == "correct" && $status_nRca == "Faible"){
            $commantaire =  "Les teneurs réduites en anions (N,P) montrent une difficulté végétative importante. La disponibilité du phosphore a été insuffisante ici.";
        }
        else if($status_pt == "Très faible" && $status_nRp == "correct" && $status_nRca == "correct"){
            $commantaire =  "Teneur très faible en phosphore, mais en équilibre correct avec l'azote. Cela traduit un déséquilibre végétatif ou un phénomène de dilution.";
        }
        else if($status_pt == "Très faible" && $status_nRp == "correct" && $status_nRca == "Elevé"){
            $commantaire =  "Teneur très faible en phosphore, mais en équilibre correct avec l'azote. Cela traduit un déséquilibre végétatif et ne justifie pas d'augmenter les apports de P2O5.";
        }
        else if($status_pt == "Très faible" && $status_nRp == "Elevé"){
            $commantaire =  " Teneur en phosphore  très faible, insister sur les apports en cet élément après avoir vérifié sa disponibilité au sol. Attention à un éventuel blocage par l'azote.";
        }
        else if($status_pt == "Faible" && $status_nRp == "Faible"){
            $commantaire =  "Teneur en phosphore  faible, insister sur les apports en cet élément après avoir vérifié sa disponibilité au sol. Attention à un éventuel blocage par l'azote.";
        }
        else if($status_pt == "Faible" && $status_nRp == "correct" && $status_nRca == "Faible"){
            $commantaire =  "Les teneurs réduites en anions (N,P) montrent une difficulté végétative importante. La disponibilité du phosphore a été insuffisante ici.";
        }
        else if($status_pt == "Faible" && $status_nRp == "correct" && $status_nRca == "correct"){
            $commantaire =  "Teneur  faible en phosphore, mais en équilibre correct avec l'azote. Cela traduit un déséquilibre végétatif ou un phénomène de dilution.";
        }
        else if($status_pt == "Faible" && $status_nRp == "correct" && $status_nRca == "Elevé"){
            $commantaire =  "Teneur  faible en phosphore, mais en équilibre correct avec l'azote. Cela traduit un déséquilibre végétatif et ne justifie pas d'augmenter les apports de P2O5.";
        }
        else if($status_pt == "Faible" && $status_nRp == "Elevé"){
            $commantaire =  " Teneur en phosphore  faible, insister sur les apports en cet élément après avoir vérifié sa disponibilité au sol. Attention à un éventuel blocage par l'azote.";
        }
        else if($status_pt == "correct" && $status_nRp == "Faible"){
            $commantaire =  "Niveau correct en phosphore.  Il est inutile d'augmenter ici les apports en cet élément.";
        }
        else if($status_pt == "correct" && $status_nRp == "correct"){
            $commantaire =  "Teneur favorable en phosphore, en niveau et en équilibre avec l'azote.";
        }
        else if($status_pt == "correct" && $status_nRp == "Elevé"){
            $commantaire =  "Teneur correcte en phosphore, mais en équilibre défavorable par rapport à l'azote. Maintenir une disponibilité suffisante en phosphore et vérifier le fonctionnement du sol et l'équilibre N / P2O5 de la fertilisation.";
        }
        else if($status_pt == "Elevé" && $status_nRp == "Faible"){
            $commantaire =  "Teneur élevée en phosphore mais non pénalisante. Cela traduit souvent un manque précoce d'azote. Vérifier l'équilibre N / P2O5 de la fertilisation.";
        }
        else if($status_pt == "Elevé" && $status_nRp == "correct" && $status_nRca == "Faible"){
            $commantaire =  "Teneur soutenue en phosphore, là aussi ne pas accentuer les apports de P2O5. ";
        }
        else if($status_pt == "Elevé" && $status_nRp == "correct" && $status_nRca == "correct"){
            $commantaire =  "Teneur élevée en phosphore, liée à un phénomène de concentration. Ne pas diminuer, s'il y a lieu les apports en P2O5.";
        }
        else if($status_pt == "Elevé" && $status_nRp == "correct" && $status_nRca == "Elevé"){
            $commantaire =  "Teneur soutenue en anions (azote, phosphore) montrant un végétal juvénile.";
        }
        else if($status_pt == "Elevé" && $status_nRp == "Elevé"){
            $commantaire =  "Niveau soutenu en phosphore mais en équilibre trop faible par rapport à l'azote. Maintenir, s'il y a lieu, des apports suffisants en P2O5.";
        }
        else if($status_pt == "Très élevé" && $status_nRp == "Faible"){
            $commantaire =  "Teneur très élevée en phosphore mais non pénalisante. Cela traduit souvent un manque précoce d'azote. Vérifier l'équilibre N / P2O5 de la fertilisation.";
        }
        else if($status_pt == "Très élevé" && $status_nRp == "correct" && $status_nRca == "Elevé"){
            $commantaire =  "Teneur très soutenue en anions (azote, phosphore) montrant un végétal juvénile.";
        }
        else if($status_pt == "Très élevé" && $status_nRp == "correct" && $status_nRca == "correct"){
            $commantaire =  "Teneur très élevée en phosphore, liée à un phénomène de concentration. Ne pas diminuer, s'il y a lieu les apports en P2O5.";
        }
        else if($status_pt == "Très élevé" && $status_nRp == "correct" && $status_nRca == "Faible"){
            $commantaire =  "Teneur très soutenue en phosphore, là aussi ne pas accentuer les apports de P2O5. ";
        }
        else if($status_pt == "Très élevé" && $status_nRp == "Elevé"){
            $commantaire =  "Niveau très soutenu en phosphore mais en équilibre trop faible par rapport à l'azote. Maintenir, s'il y a lieu, des apports suffisants en P2O5.";
        }
        return $commantaire;
    }
    public static function com3(\stdClass $data)
    {
      //     dd($data);
        $res_k        = $data->K["res"];
        $min_k        = $data->K["min"];
        $max_k        = $data->K["max"];
        $res_nRk      = $data->NTK["res"]/$data->K["res"];////////
        $min_nRk      = $data->NrK["min"];
        $max_nRk      = $data->NrK["max"];
        $res_nRca     = $data->NTK["res"]/$data->Ca["res"];
        $min_nRca     = $data->NrCa["min"];
        $max_nRca     = $data->NrCa["max"];

        $res_kRca     = $data->K["res"]/$data->Ca["res"];
        $min_kRca     = $data->KrCa["min"];
        $max_kRca     = $data->KrCa["max"];

        $status_k     = self::parametreStatusSec1($res_k, $min_k, $max_k);
        $status_nRk   = self::parametreStatusSec3($res_nRk, $min_nRk, $max_nRk);  
        $status_nRca  = self::parametreStatusSec3($res_nRca, $min_nRca, $max_nRca);
        $status_kRca  = self::parametreStatusSec3($res_kRca, $min_kRca, $max_kRca);
        //dd($res_nRk,$min_nRk,$max_nRk );
        //dd($status_k, $status_nRk, $status_nRca,$status_kRca);
        $commantair     = "";
        if($status_k == "Très faible" && $status_nRk == "Faible" && $status_nRca == "Faible"){
            $commantair =  "Teneur très limitée en potassium montrant avec l'azote un problème de disponibilité minérale ou hydrique sur cette parcelle. Vérifier les réserves du sol en potasse et les apports de K2O (niveau, fractionnement,...etc).";
        }
        else if($status_k == "Très faible" && $status_nRk == "Faible" && $status_nRca == "correct"){
            $commantair =  "Très faible teneur en potassium liée à un phénomène de dilution, il est inutile d'augmenter les apports de K2O.";
        }
        else if($status_k == "Très faible" && $status_nRk == "Faible" && $status_nRca == "Elevé"){
            $commantair =  "Très faible teneur en potassium liée à un phénomène de dilution, il est inutile d'augmenter les apports en K2O.";
        }
        else if($status_k == "Très faible" && $status_nRk == "correct" && $status_nRca == "Faible"){
            $commantair =  "Très faible teneur en potassium, montrant un problème important de disponibilité en K2O (sol, fertilisation) ou en eau.";
        }
        else if($status_k == "Très faible" && $status_nRk == "correct" && $status_nRca == "correct"){
            $commantair =  "Très faible teneur en potassium liée à un phénomène de dilution, il est inutile d'augmenter les apports de K2O.";
        }
        else if($status_k == "Très faible" && $status_nRk == "correct" && $status_nRca == "Elevé"){
            $commantair =  "Très faible teneur en potassium, montrant un problème important de disponibilité en K2O (sol, fertilisation) ou en eau.";
        }
        else if($status_k == "Très faible" && $status_nRk == "Elevé" && $status_nRca == "Faible"){
            $commantair =  "Teneur  très faible en potassium ; vérifier la disponibilité en potasse du sol ; les apports en K2O sont-ils suffisants (niveau, fractionnement...) ?";
        }
        else if($status_k == "Très faible" && $status_nRk == "Elevé" && $status_nRca == "correct"){
            $commantair =  "Teneur  très faible en potassium ; vérifier la disponibilité en potasse du sol ; les apports en K2O sont-ils suffisants (niveau, fractionnement...) ?";
        }
        else if($status_k == "Très faible" && $status_nRk == "Elevé" && $status_nRca == "Elevé"){
            $commantair =  "Teneur  très faible en potassium ; vérifier la disponibilité en potasse du sol ; les apports en K2O sont-ils suffisants (niveau, fractionnement...) ?";
        }
        else if($status_k == "Faible" && $status_nRk == "Faible" && $status_nRca == "Faible"){
            $commantair =  "Teneur limitée en potassium montrant avec l'azote un problème de disponibilité minérale ou hydrique sur cette parcelle. Vérifier les réserves du sol en potasse et les apports de K2O (niveau, fractionnement,...etc).";
        }
        else if($status_k == "Faible" && $status_nRk == "Faible" && $status_nRca == "correct"){
            $commantair =  "Faible teneur en potassium liée à un phénomène de dilution, il est inutile d'augmenter les apports de K2O.";
        }
        else if($status_k == "Faible" && $status_nRk == "Faible" && $status_nRca == "Elevé"){
            $commantair =  "Faible teneur en potassium liée à un phénomène de dilution, il est inutile d'augmenter les apports en K2O.";
        }
        else if($status_k == "Faible" && $status_nRk == "correct" && $status_nRca == "Faible"){
            $commantair =  "Faible teneur en potassium, montrant un problème important de disponibilité en K2O (sol, fertilisation) ou en eau.";
        }
        else if($status_k == "Faible" && $status_nRk == "correct" && $status_nRca == "correct"){
            $commantair =  "Faible teneur en potassium liée à un phénomène de dilution, il est inutile d'augmenter les apports de K2O.";
        }
        else if($status_k == "Faible" && $status_nRk == "correct" && $status_nRca == "Elevé"){
            $commantair =  "Faible teneur en potassium, montrant un problème important de disponibilité en K2O (sol, fertilisation) ou en eau.";
        }
        else if($status_k == "Faible" && $status_nRk == "Elevé" && $status_nRca == "Faible"){
            $commantair =  "Teneur  faible en potassium ; vérifier la disponibilité en potasse du sol ; les apports en K2O sont-ils suffisants (niveau, fractionnement...) ?";
        }
        else if($status_k == "Faible" && $status_nRk == "Elevé" && $status_nRca == "correct"){
            $commantair =  "Teneur  faible en potassium ; vérifier la disponibilité en potasse du sol ; les apports en K2O sont-ils suffisants (niveau, fractionnement...) ?";
        }
        else if($status_k == "Faible" && $status_nRk == "Elevé" && $status_nRca == "Elevé"){
            $commantair =  "Teneur  faible en potassium ; vérifier la disponibilité en potasse du sol ; les apports en K2O sont-ils suffisants (niveau, fractionnement...) ?";
        }
        else if($status_k == "correct" && $status_nRk == "Faible" && $status_kRca == "Faible"){
            $commantair =  "Niveau correct en potassium, mais en équilibre faible vis-à-vis du calcium. Vérifier la disponibilité en K2O (sol, fertilisation) et surtout en eau sur cette parcelle.";
        }
        else if($status_k == "correct" && $status_nRk == "Faible" && $status_kRca == "correct"){
            $commantair =  "Teneur correcte en potassium, il est inutile d'accentuer les apports en cet élément.";
        }
        else if($status_k == "correct" && $status_nRk == "Faible" && $status_kRca == "Elevé"){
            $commantair =  "Teneur correcte en potassium, il est inutile d'accentuer les apports en cet élément.";
        }
        else if($status_k == "correct" && $status_nRk == "correct" && $status_kRca == "Faible"){
            $commantair =  "Niveau correct en potassium, mais en équilibre trop faible vis-à-vis du calcium. Vérifier la disponibilité en K2O (sol, fertilisation) et surtout en eau sur cette parcelle.";
        }
        else if($status_k == "correct" && $status_nRk == "correct" && $status_nRca == "Faible"){
            $commantair =  "Teneur correcte en potassium, il est inutile d'accentuer les apports en cet élément.";
        }
        else if($status_k == "correct" && $status_nRk == "correct" && $status_nRca == "correct"){
            $commantair =  "Niveau favorable en potassium, en équilibre avec l'azote. Ne pas accentuer les apports en K2O.";
        }
        else if($status_k == "correct" && $status_nRk == "correct" && $status_nRca == "Elevé"){
            $commantair =  "Niveau correct en potassium, mais trop élevé par rapport au calcium. Attention à l'antagonisme entre ces deux éléments.";
        }
        else if($status_k == "correct" && $status_nRk == "Elevé" && $status_nRca == "Faible"){
            $commantair =  "Teneur correcte en potassium mais trop faible par rapport à l'azote. Contrôler l'équilibre N / K2O de la fertilisation et du sol.";
        }
        else if($status_k == "correct" && $status_nRk == "Elevé" && $status_nRca == "correct"){
            $commantair =  "Teneur correcte en potassium mais trop faible par rapport à l'azote. Contrôler l'équilibre N / K2O de la fertilisation et du sol.";
        }
        else if($status_k == "correct" && $status_nRk == "Elevé" && $status_nRca == "Elevé"){
            $commantair =  "Teneur correcte en potassium mais trop faible par rapport à l'azote. Contrôler l'équilibre N / K2O de la fertilisation et du sol.";
        }
        else if($status_k == "Elevé" && $status_nRk == "Faible" && $status_nRca == "Faible"){
            $commantair =  "Teneur élevée en potassium liée essentiellement à un manque de disponibilité azotée. Cela ne justifie pas forcément de diminuer les apports de K2O.";
        }
        else if($status_k == "Elevé" && $status_nRk == "Faible" && $status_nRca == "correct"){
            $commantair =  "Teneur élevée en potassium par rapport aux autres éléments majeurs. Attention aux risques de limitation végétative. Ne pas augmenter, voire diminuer les apports de K2O.";
        }
        else if($status_k == "Elevé" && $status_nRk == "Faible" && $status_nRca == "Elevé"){
            $commantair =  "Teneur élevée en potassium par rapport aux autres éléments majeurs. Attention aux risques de limitation végétative. Ne pas augmenter, voire diminuer les apports de K2O.";
        }
        else if($status_k == "Elevé" && $status_nRk == "correct" && $status_nRca == "Faible"){
            $commantair =  "Potassium soutenu, lié à un phénomène de concentration, cela ne justifie pas forcément de diminuer les apports en K2O.";
        }
        else if($status_k == "Elevé" && $status_nRk == "correct" && $status_nRca == "correct"){
            $commantair =  "Potassium soutenu, lié à un phénomène de concentration, cela ne justifie pas forcément de diminuer les apports en K2O.";
        }
        else if($status_k == "Elevé" && $status_nRk == "correct" && $status_nRca == "Elevé"){
            $commantair =  "Niveau élevé en potassium, montrant une disponibilité potassique ou hydrique très soutenue. Ne pas accentuer, voire diminuer, les apports en K2O. Attention à l'antagonisme potassium / calcium.";
        }
        else if($status_k == "Elevé" && $status_nRk == "Elevé" && $status_nRca == "Faible"){
            $commantair =  "Potassium soutenu, lié à un phénomène de concentration, cela ne justifie pas forcément de diminuer les apports en K2O.";
        }
        else if($status_k == "Elevé" && $status_nRk == "Elevé" && $status_nRca == "correct"){
            $commantair =  "Potassium soutenu, lié à un phénomène de concentration, cela ne justifie pas forcément de diminuer les apports en K2O.";
        }
        else if($status_k == "Elevé" && $status_nRk == "Elevé" && $status_nRca == "Elevé"){
            $commantair =  "Niveau élevé en potassium, montrant une disponibilité potassique ou hydrique très soutenue. Ne pas accentuer, voire diminuer, les apports en K2O. Attention à l'antagonisme potassium / calcium.";
        }
        else if($status_k == "Très élevé" && $status_nRk == "Faible" && $status_nRca == "Faible"){
            $commantair =  "Teneur très élevée en potassium liée essentiellement à un manque de disponibilité azotée. Cela ne justifie pas forcément de diminuer les apports de K2O.";
        }
        else if($status_k == "Très élevé" && $status_nRk == "Faible" && $status_nRca == "correct"){
            $commantair =  "Teneur très élevée en potassium par rapport aux autres éléments majeurs. Attention aux risques de limitation végétative. Ne pas augmenter, voire diminuer les apports de K2O.";
        }
        else if($status_k == "Très élevé" && $status_nRk == "Faible" && $status_nRca == "Elevé"){
            $commantair =  "Teneur très élevée en potassium par rapport aux autres éléments majeurs. Attention aux risques de limitation végétative. Ne pas augmenter, voire diminuer les apports de K2O.";
        }
        else if($status_k == "Très élevé" && $status_nRk == "correct" && $status_nRca == "Faible"){
            $commantair =  "Potassium très soutenu, lié à un phénomène de concentration, cela ne justifie pas forcément de diminuer les apports en K2O.";
        }
        else if($status_k == "Très élevé" && $status_nRk == "correct" && $status_nRca == "correct"){
            $commantair =  "Potassium très soutenu, lié à un phénomène de concentration, cela ne justifie pas forcément de diminuer les apports en K2O.";
        }
        else if($status_k == "Très élevé" && $status_nRk == "correct" && $status_nRca == "Elevé"){
            $commantair =  "Niveau très élevé en potassium, montrant une disponibilité potassique ou hydrique très soutenue. Ne pas accentuer, voire diminuer, les apports en K2O. Attention à l'antagonisme potassium / calcium.";
        }
        else if($status_k == "Très élevé" && $status_nRk == "Elevé" && $status_nRca == "Faible"){
            $commantair =  "Potassium très soutenu, lié à un phénomène de concentration, cela ne justifie pas forcément de diminuer les apports en K2O.";
        }
        else if($status_k == "Très élevé" && $status_nRk == "Elevé" && $status_nRca == "correct"){
            $commantair =  "Potassium très soutenu, lié à un phénomène de concentration, cela ne justifie pas forcément de diminuer les apports en K2O.";
        }
        else if($status_k == "Très élevé" && $status_nRk == "Elevé" && $status_nRca == "Elevé"){
            $commantair =  "Niveau très élevé en potassium, montrant une disponibilité potassique ou hydrique très soutenue. Ne pas accentuer, voire diminuer, les apports en K2O. Attention à l'antagonisme potassium / calcium.";
        }
        return $commantair;
    }
    public static function commants($analyse_data, $cultureData)
    {
        //dd($analyse_data,$cultureData);
        //return self::parametreStatusCom1(2,3,5);
        $com1data = new \stdClass();
        foreach ($cultureData as $key => $value) {
            $com1data->$key = ["res" => $analyse_data->$key ?? "", "min" => min($value["min"],$value["max"]), "max" => max($value["min"],$value["max"])];
        }
        return '<table style="margin-left: 1px;font-size:10px;">
                    <tr>
                        <th
                            style="width: 698px; padding-top:10px;padding-bottom:10px;text-align:left;border-right: 1px solid black;border-bottom: 1px dotted black;border-left: 1px solid black;">
                            *' . self::com1($com1data) . '
                        </th>
                    </tr>
                </table><table style="margin-left: 1px;font-size:10px;">
                <tr>
                    <th
                        style="width: 698px; padding-top:10px;padding-bottom:10px;text-align:left;border-right: 1px solid black;border-bottom: 1px dotted black;border-left: 1px solid black;">
                        *' . self::com2($com1data) . '
                    </th>
                </tr>
                </table><table style="margin-left: 1px;font-size:10px;">
                    <tr>
                        <th
                            style="width: 698px; padding-top:10px;padding-bottom:10px;text-align:left;border-right: 1px solid black;border-bottom: 1px dotted black;border-left: 1px solid black;">
                            *' . self::com3($com1data) . '
                        </th>
                    </tr>
                </table>';
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
