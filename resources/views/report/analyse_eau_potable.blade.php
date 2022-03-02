<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head bordered>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title trspan="authPortal"></title>
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">


    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/preloader.css') }}">
    <script src="{{ asset('assets/js/jquery.preloader.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}">
    </script>
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="https://auth.sso.elephant-vert.com/static/common/favicon.ico" rel="icon" type="image/vnd.microsoft.icon"
        sizes="16x16 32x32 48x48 64x64 128x128">
    <link href="https://auth.sso.elephant-vert.com/static/common/favicon.ico" rel="shortcut icon"
        type="image/vnd.microsoft.icon" sizes="16x16 32x32 48x48 64x64 128x128">
</head bordered>

<body style="text-align: center;margin:0 auto">
    <style>
        table {
            border-collapse: collapse
        }

        h6{
            display:inline !important;
            font-family: DejaVu Sans;
       
        }

        .head {
            text-align: left;
            background-color: #b5feb4 !important;
           
        }

        .h4::before {
            content: "*";
            color: red
        }

        tr,
        td {
            margin: 0 !important;
            padding: 2px 10px !important;
           
        }

        .th,
        .col-md-3 {
            text-align: center;
            border: 1px solid black;
        }

        .bordered {
            padding: 1px 5px;
            border: 1px solid black;
        }
        table.border_light tr>td {
            border-bottom: 1px solid rgb(228, 228, 228);
        }

        .text{
            text-align: center;
            bottom : 0px;
            position: fixed;
            left: 0px;
            bottom: -180px;
            right: 0px;
            height: 150px;
            position: fixed;
            left: 0px;
            bottom: -140px;
            right: 0px;
             height: 150px;
             
}
table.border_light tr>td {

border-bottom: 1px solid rgb(228, 228, 228);

}

    </style>

    @php use App\Custom\Archivos; @endphp
    <table border="0" >
        <tr>
            <td><img src="{{ Archivos::imagenABase64(public_path('img/LacqLogo.jpg')) }}" width="160px" height="40px">
                <br>
                <label style="font-size:9px;margin:0;padding:0;">Laboratoire d'Analyses et Contrôle<br> Qualité ELEPHANT
                    VERT <br>MAROC S.A. </label>
                    <br>
                    <label style="color:green;font-size:11px;">LAB03F132-Vb</label>
            </td>
            <td>
                <h5 style="color:green;text-align:center; font-size:14px;">RAPPORT D'ANALYSE PHYSICO-CHIMIQUE D'EAU
                    </br>N° EAU {{$commande_info->code_commande }} </h5>
            </td>
            <td style="text-align:right;vertical-align: top;"><img src="{{ Archivos::imagenABase64(public_path('img/semac.png')) }}"
                    width="90px" height="40px"><br>
                <h6 style="color:brown;font-size:10px;margin:0;padding:0;text-align:right;">N° MCI/CE AL 93/2018</h6>
                </td>   
        </tr>
       
    </table>

    <table style="width:100%;font-size:10px;margin-top:">

        <tr>
            <th class="head bordered" style="width: 150px;">Client :</th>
            <td class=" bordered">{{ $client_info->exploiteur }}</td>
            <th class=" head bordered" style="width: 150px;">Dossier suivi par :</th>
            <td class="bordered">{{ $commande_info->commercial }}</td>
        </tr>

        <tr>
            <th class="head bordered" style="width: 150px;">N°CIN :</th>
            <td class="bordered">{{ $client_info->cin_rc }}</td>
            <th class="head bordered" style="width: 150px;">Référence d'échantillon :</th>
            <td class="bordered">{{$commande_info->code_commande}} </td>
        </tr>

        <tr>
            <th class="head bordered" style="width: 150px;">Adresse :</th>
            <td class="bordered">{{ $client_info->address }}</td>
            <th class="head bordered" style="width: 150px;">Date de prélèvement :</th>
            <td class="bordered">@php echo Archivos::costomDateFormate($commande_info->date_prelevement) @endphp</td>
        </tr>

        <tr>
            <th class="head bordered" style="width: 150px;">Référence client :</th>
            <td class="bordered">{{ $commande_info->ref_client }}</td>
            <th class="head bordered" style="width: 150px;">Date de réception :</th>
            <td class="bordered">@php echo Archivos::costomDateFormate($commande_info->date_reception) @endphp </td>
        </tr>

        <tr>
            <th class="head bordered" style="width: 150px;">Nature déchantillon :</th>
            <td class="bordered">{{ $commande_info->nature }}</td>
            <th class="head bordered">Date d'analyse :</th>
            <td class="bordered" style="width: 150px;"> @php echo Archivos::costomDateFormate($commande_info->date_reception) @endphp  </td>
        </tr>

        <tr>
            <th class="head bordered" style="width: 150px;">Température à la réception :</th>
            <td class="bordered">{{ $commande_info->temperature }} °C</td>
            <th class="head bordered" style="width: 150px;">Date d'édition :</th>
            <td class="bordered">@php echo Archivos::costomDateFormate($commande_info->date_edition) @endphp </td>
        </tr>

        <tr>
            <th class="head bordered" style="width: 150px;">Coordonnées GPS :</th>
            <td class="bordered">{{ $commande_info->gps_1 }}</td>
            <th class="head bordered" style="width: 150px;">Organisme :</th>
            <td class="bordered">{{ $client_info->organisme }}</td>
        </tr>
        <tr>
            <th class="head bordered" style="width: 150px;">Lieu d'exécution des essais :</th>
            <td class="bordered">{{ $commande_info->lieu }}</td>
            <th class="head bordered" style="width: 150px;">Quantité récéptionnée:</th>
            <td class="bordered">{{ $commande_info->quantite }}</td>
        </tr>
    </table>

    <table style="width:100%;font-size:10px;margin-top:10px" class="border_light ">
            <tr>
                <th style="text-align: center" class="head bordered">Paramètres</th>
                <th style="text-align: center" class="head bordered">Sym. </th>
                <th style="text-align: center" class="head bordered">Méthodes</th>
                <th style="text-align: center" class="head bordered">Unités</th>
                <th style="text-align: center" class="head bordered">Résultats</th>
                <th style="text-align: center" class="head bordered">N.S</th>
                <th style="text-align: center" class="head bordered">Critères</th>
            </tr>
            @php
                $nitra = $analyse_data->NO3;
                $commantair_analyse = $commantair[0];
                
                $nitri = $analyse_data->NO2;
                $ammon = $analyse_data->NH4;
                
                $cu = $analyse_data->Cu;
                $zn = $analyse_data->Zn;
                $mn = $analyse_data->Mn;
                $fe = $mn = $analyse_data->Fe;
                
                
            @endphp
            <tr class="border_light">
                <td class="bordered">Potentiel hydrogène(<h6 style='color:red;'>*</h6>)</td>
                <td class="col-md-3 bordered">PH</td>
                <td class="col-md-3 bordered">NM ISO 10523:V2012</td>
                <td class="col-md-3 bordered">Unités pH</td>
                <td class="col-md-3 bordered">@php echo Archivos::ft3nb($analyse_data->PH ) @endphp</td>
                <td class="col-md-3 bordered">
                    @php
                       
                        if ($analyse_data->PH > 8.5 or $analyse_data->PH < 6.5) {
                            echo "<h6 style='color:red;'>◉</h6>";
                            $commantair_analyse = $commantair[1];
                        }
                    @endphp
                </td>
                <td class="col-md-3 bordered"> 6,5-8,5</td>
            </tr>

            <tr>
                <td class="bordered">Conductivité éléctrique(<h6 style='color:red;'>*</h6>)</td>
                <td class="col-md-3 bordered">EC</td>
                <td class="col-md-3 bordered"> NF EN 27888:V2001</td>
                <td class="col-md-3 bordered">uS/cm</td>
                <td class="col-md-3 bordered">@php echo Archivos::ft3nb($analyse_data->EC * 1000 ) @endphp</td>
                <td class="col-md-3 bordered">
                    @php
                        if ($analyse_data->EC * 1000 > 2700 ) {
                            echo "<h6 style='color:red;'>◉</h6>";
                            $commantair_analyse = $commantair[1];
                        }
                    @endphp
                </td>
                <td class="col-md-3 bordered">2700</td>
            </tr>

            <tr>
                <td class="bordered">Nitrates</td>
                <td class="col-md-3 bordered">NO3</td>
                <td class="col-md-3 bordered">NF EN ISO 13395:V1996</td>
                <td class="col-md-3 bordered">mg/L</td>
                <td class="col-md-3 bordered">  {{(floatval($nitra) < 0.1) ? "INF à 0,5":Archivos::ft3nb($nitra)}}</td>
                <td class="col-md-3 bordered">
                    @php
                        if ($nitra > 50 ) {
                            echo "<h6 style='color:red;'>◉</h6>";
                            $commantair_analyse = $commantair[1];
                        }
                    @endphp
                </td>
                <td class="col-md-3 bordered"> 50</td>
            </tr>

            <tr>
                <td class="bordered">Nitrites</td>
                <td class="col-md-3 bordered">NO2</td>
                <td class="col-md-3 bordered">NF EN ISO 13395:V1996</td>
                <td class="col-md-3 bordered">mg/L</td>
                <td class="col-md-3 bordered"> {{(floatval($nitri) < 0.1) ? "INF à 0,1":Archivos::ft3nb($nitri)}}</td>
                <td class="col-md-3 bordered">
                    @php
                        if ($nitri > 0.5 ) {
                            echo "<h6 style='color:red;'>◉</h6>";
                            $commantair_analyse = $commantair[1];
                        }
                    @endphp
                </td>
                <td class="col-md-3 bordered">0,5 </td>
            </tr>

            <tr>
                <td class="bordered">Ammonium</td>
                <td class="col-md-3 bordered">NH4</td>
                <td class="col-md-3 bordered">NF EN ISO 11732:V2005</td>
                <td class="col-md-3 bordered">mg/L</td>
                <td class="col-md-3 bordered">{{(floatval($ammon ) < 0.1) ? "INF à 0,1":Archivos::ft3nb($ammon)}} </td>
                <td class="col-md-3 bordered">
                    @php
                        if ($ammon > 0.5 ) {
                            echo "<h6 style='color:red;'>◉</h6>";
                            $commantair_analyse = $commantair[1];
                        }
                    @endphp
                </td>
                <td class="col-md-3 bordered">0,5 </td>
            </tr>
 
            <tr>
                <td class="bordered">Chlorures</td>
                <td class="col-md-3 bordered">Cl</td>
                <td class="col-md-3 bordered"> NF EN ISO 15682:V2001</td>
                <td class="col-md-3 bordered">mg/L</td>
                <td class="col-md-3 bordered">@php echo Archivos::ft3nb($analyse_data->Cl) @endphp</td>
                <td class="col-md-3 bordered">
                    @php
                        if ($analyse_data->Cl > 750 ) {
                            echo "<h6 style='color:red;'>◉</h6>";
                            $commantair_analyse = $commantair[1];
                        }
                    @endphp
                </td>
                <td class="col-md-3 bordered"> 750</td>
            </tr>

            <tr>
                <td class="bordered">Sulfates</td>
                <td class="col-md-3 bordered">SO4</td>
                <td class="col-md-3 bordered"> NF T 90_040:V1986</td>
                <td class="col-md-3 bordered">mg/L</td>
                <td class="col-md-3 bordered">@php echo Archivos::ft3nb($analyse_data->SO4) @endphp</td>
                <td class="col-md-3 bordered">
                    @php
                        if ($analyse_data->SO4 > 400 ) {
                            echo "<h6 style='color:red;'>◉</h6>";
                            $commantair_analyse = $commantair[1];
                        }
                    @endphp
                </td>
                <td class="col-md-3 bordered"> 400</td>
            </tr>

            <tr>
                <td class="bordered">Calcium(<h6 style='color:red;'>*</h6>)</td>
                <td class="col-md-3 bordered">Ca</td>
                <td class="col-md-3 bordered"> NF EN ISO 11885:V2009</td>
                <td class="col-md-3 bordered">mg/L</td>
                <td class="col-md-3 bordered"> @php echo Archivos::ft3nb($analyse_data->Ca) @endphp</td>
                <td class="col-md-3 bordered"></td>
                <td class="col-md-3 bordered"> Non spécifié</td>
            </tr>

            <tr>
                <td class="bordered">Magnésium(<h6 style='color:red;'>*</h6>)</td>
                <td class="col-md-3 bordered">Mg</td>
                <td class="col-md-3 bordered"> NF EN ISO 11885:V2009</td>
                <td class="col-md-3 bordered">mg/L</td>
                <td class="col-md-3 bordered"> @php echo Archivos::ft3nb($analyse_data->Mg) @endphp</td>
                <td class="col-md-3 bordered"></td>
                <td class="col-md-3 bordered">Non spécifié</td>
            </tr>

            <tr>
                <td class="bordered">Dureté total</td>
                <td class="col-md-3 bordered">THt</td>
                <td class="col-md-3 bordered"> Calcul.</td>
                <td class="col-md-3 bordered">°f</td>
                <td class="col-md-3 bordered"> @php echo Archivos::ft3nb(($analyse_data->Ca / 20 + $analyse_data->Mg / 12) * 5,2) @endphp</td>
                <td class="col-md-3 bordered"></td>
                <td class="col-md-3 bordered"> Non spécifié</td>
            </tr>

            <tr>
                <td class="bordered">Bicarbonates</td>
                <td class="col-md-3 bordered">HCO3</td>
                <td class="col-md-3 bordered"> MN ISO 9963-1:V2001</td>
                <td class="col-md-3 bordered">mg/L</td>
                <td class="col-md-3 bordered">@php echo Archivos::ft3nb($analyse_data->HCO3) @endphp</td>
                <td class="col-md-3 bordered"></td>
                <td class="col-md-3 bordered"> Non spécifié</td>
            </tr>

            <tr>
                <td class="bordered">Alcalinité</td>
                <td class="col-md-3 bordered">TAC</td>
                <td class="col-md-3 bordered"> MN ISO 9963-1 </td>
                <td class="col-md-3 bordered">°f</td>
                <td class="col-md-3 bordered"> @php echo Archivos::ft3nb($analyse_data->HCO3 / 12.2 ,2) @endphp</td>
                <td class="col-md-3 bordered"></td>
                <td class="col-md-3 bordered"> Non spécifié</td>
            </tr>

            <tr>
                <td class="bordered">Oxydabilité ay KMnO4</td>
                <td class="col-md-3 bordered">-</td>
                <td class="col-md-3 bordered"> MN 03 7 015 </td>
                <td class="col-md-3 bordered">mgO2/L</td>
                <td class="col-md-3 bordered">@php echo Archivos::ft3nb($analyse_data->Oxydabilite) @endphp</td>
                <td class="col-md-3 bordered">
                    @php
                        if ($analyse_data->Oxydabilite > 5 ) {
                            echo "<h6 style='color:red;'>◉</h6>";
                            $commantair_analyse = $commantair[1];
                        }
                    @endphp
                </td>
                <td class="col-md-3 bordered"> 5</td>
            </tr>

            <tr>
                <td class="bordered">Turbidité</td>
                <td class="col-md-3 bordered"> -</td>
                <td class="col-md-3 bordered"> MN 03 7 010</td>
                <td class="col-md-3 bordered">NTU</td>
                <td class="col-md-3 bordered">@php echo Archivos::ft3nb($analyse_data->Turbidite) @endphp</td>
                <td class="col-md-3 bordered">
                    @php
                        if ($analyse_data->Turbidite > 5 ) {
                            echo "<h6 style='color:red;'>◉</h6>";
                            $commantair_analyse = $commantair[1];
                        }
                    @endphp
                </td>
                <td class="col-md-3 bordered"> 5</td>
            </tr>

            <tr>
                <td class="bordered">Cuivre(<h6 style='color:red;'>*</h6>)</td>
                <td class="col-md-3 bordered">Cu</td>
                <td class="col-md-3 bordered"> NF EN ISO 11885:V2009</td>
                <td class="col-md-3 bordered">mg/L</td>
                <td class="col-md-3 bordered">{{(floatval($cu) < 0.01) ? "INF à 0,01":Archivos::ft3nb($cu) }}</td>
                <td class="col-md-3 bordered">
                    @php
                        if ($cu > 2 ) {
                            echo "<h6 style='color:red;'>◉</h5>";
                            $commantair_analyse = $commantair[1];
                        }
                    @endphp
                </td>
                <td class="col-md-3 bordered"> 2 </td>
            </tr>

            <tr>
                <td class="bordered">Zinc(<h6 style='color:red;'>*</h6>)</td>
                <td class="col-md-3 bordered">Zn</td>
                <td class="col-md-3 bordered">NF EN ISO 11885:V2009 </td>
                <td class="col-md-3 bordered">mg/L</td>
                <td class="col-md-3 bordered">{{ (floatval($zn) <=0.01) ? "INF à 0,01":Archivos::ft3nb($zn) }}</td>
                <td class="col-md-3 bordered">
                    @php
                        if ($zn > 3 ) {
                            echo "<h6 style='color:red;' >◉</h6>";
                            $commantair_analyse = $commantair[1];
                        }
                    @endphp
                </td>
                <td class="col-md-3 bordered"> 3</td>
            </tr>

            <tr>
                <td class="bordered">Manganèse(<h6 style='color:red;'>*</h6>)</td>
                <td class="col-md-3 bordered"> Mn</td>
                <td class="col-md-3 bordered"> NF EN ISO 11885:V2009</td>
                <td class="col-md-3 bordered">mg/L</td>
                <td class="col-md-3 bordered"> {{ (floatval($mn) < 0.01) ? "INF à 0,01":Archivos::ft3nb($mn) }}</td>
                <td class="col-md-3 bordered">
                    @php
                        if ($mn > 0.5 ) {
                            echo "<h6 style='color:red;'>◉</h6>";
                            $commantair_analyse = $commantair[1];
                        }
                    @endphp
                </td>
                <td class="col-md-3 bordered"> 0,5</td>
            </tr>

            <tr>
                <td class="bordered">Fer(<h6 style='color:red;'>*</h6>)</td>
                <td class="col-md-3 bordered"> Fe</td>
                <td class="col-md-3 bordered"> NF EN ISO 11885:V2009</td>
                <td class="col-md-3 bordered">mg/L</td>
                <td class="col-md-3 bordered">{{ (floatval($fe) < 0.005) ? "INF à 0,005 ":Archivos::ft3nb($fe) }}</td>
                <td class="col-md-3 bordered">
                    @php
                        if ($fe > 0.30 ) {
                            echo "<h6 style='color:red;'>◉</h6>";
                            $commantair_analyse = $commantair[1];
                        }
                    @endphp
                </td>
                <td class="col-md-3 bordered"> 0,30</td>
            </tr>
            <tr class='head'>
                <td colspan='7'>
                    Le présent rapport ne concerne que les objets soumis à l'essai.
                    Il comporte une seule page et ne doit pas être reproduit partiellement sans l’approbation du
                    laboratoire.
                    Seule une reproduction sous sa forme intégrale est autorisée.
                    Les échantillons sont conservés au Laboratoire 7 jours maximum après communication des résultats aux
                    clients.<br>
                    <h6 style='color:red;'>&#9673;</h6>: Résultat non satisfaisant</td>
            </tr>
    </table>

    <h5 style="font-size:11px;text-align:left;margin:2px;padding:0"> <u>Commentaire :</u> </h5>
    <p style="font-size:12px; text-align:left;margin:2px;padding:0">{{ $commantair_analyse }}</p>
    <p class="h4" style="font-size:11px;text-align:left"> Paramètre accrédité</p>
    <img src="{{ Archivos::imagenABase64(public_path('img/signature.png')) }}" style="margin-top:50px" width="560px">
    <p class="text" style="font-size:8px;">Laboratoire LACQ <br>
        AGROPOLIS-GI5 GI6, Commune de Mejjate, Meknes, Maroc <br>
        Tel:+212 535 52 94 01 <br>
        contact.lacq@elephant-vert.com <br>
        <span style="margin-left: 650px;font-size:8px;">Fin de page</span>
        </p>
       

</body>

</html>