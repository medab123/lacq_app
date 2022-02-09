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
    <table border="0">
        <tr>
            <td><img src="{{ Archivos::imagenABase64(public_path('img/LacqLogo.jpg')) }}" width="160px" height="40px">
                <br>
                <label style="font-size:9px;margin:0;padding:0;">Laboratoire d'Analyses et Contrôle<br> Qualité ELEPHANT
                    VERT <br>MAROC S.A. </label>
                    <br>
                    <label style="color:green;font-size:11px;">LAB03F61-Vf</label>
            </td>
            <td>
                <h5 style="color:green;text-align:center; font-size:14px;">RAPPORT D'ANALYSE D'EAU D'IRRIGATION
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
            <th class="head bordered" style="width: 150px;">Température à la réception:</th>
            <td class="bordered">{{$commande_info->temperature}} °C</td>
        </tr>

        <tr>
            <th class="head bordered" style="width: 150px;">Culture irriguée:</th>
            <td class="bordered">{{ $commande_info->culture }}</td>
            <th class="head bordered" style="width: 150px;">Date de prélèvement :</th>
            <td class="bordered">@php echo Archivos::costomDateFormate($commande_info->date_prelevement) @endphp</td>
        </tr>

        <tr>
            <th class="head bordered" style="width: 150px;">Variété :</th>
            <td class="bordered">{{ $commande_info->varite }}</td>
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
            <th class="head bordered" style="width: 150px;">Coordonnées GPS : :</th>
            <td class="bordered">{{ $commande_info->gps_1 }} </td>
            <th class="head bordered" style="width: 150px;">Date d'édition :</th>
            <td class="bordered">@php echo Archivos::costomDateFormate($commande_info->date_edition) @endphp </td>
        </tr>

        <tr>
            <th class="head bordered" style="width: 150px;">Référence client :</th>
            <td class="bordered">{{ $commande_info->ref_client }}</td>
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

    <table style="width:100%;font-size:12px;margin-top:;border:1px solid black;" >
      
       <tr class="head bordered">
             <th class=" bordered" style="width:160px;" rowspan="2">Paramètres</th>
             <th class=" bordered" style="width:54px;" rowspan="2">Sym.</th>
             <th class=" bordered" rowspan="2">Méthodes</th>
             <th class=" bordered" rowspan="2">Résultats (Unité) </th>
             <th class=" bordered" rowspan="2">Seuils (mg/L)</th>
             <th class=" bordered" colspan="3">Appréciation</th>
       </tr>
       <tr class="head bordered" style="font-size:9px;">
             <th  style="text-align:center;">Faible</th>
             <th  style="text-align:center;">Moyen</th>
             <th  style="text-align:center;">Fort</th>
       </tr>
</table>
<table style="width:100%;font-size:12px;" >
    <tr>
      <th style="border:0px;text-align:left;color:green">CARACTERISTIQUES DE L'EAU</th>
    </tr>
    </table>
    <table style="width:100%;font-size:11px;border:1px solid black;" >
        <tr>
                <td style="width:130px;border-right:1px solid black;">Potentiel hydrogène<h6 style='color:red;'>(*)</h6> à 25°C</td>
                <td style="width:20px;text-align:center;border-right:1px solid black;">pHAAA</td>
                <td style="width:89px;border-right:1px solid black;">NM ISO 10523:V2001</td> 
                <td style="width:113px;border-right:1px solid black;">7.05</td>
                <td style="width:68px;text-align:center;border-right:1px solid black;">6,50 à 8,40</td>
                <td style="width:68px;text-align:center;border-right:1px solid black;"> </td>   
        </tr>
        <tr>
            <td style="width:130px;border-right:1px solid black;">Conductivité éléctrique à 25°C </td>
            <td style="width:20px;text-align:center;border-right:1px solid black;">EC</td>
            <td style="width:89px;border-right:1px solid black;">NM ISO 7888:V2001</td> 
            <td style="width:113px;border-right:1px solid black;">1.835 (mS/cm)</td>
            <td style="width:68px;text-align:center;border-right:1px solid black;">0,70 à 3,00</td>
            <td style="width:68px;text-align:center;border-right:1px solid black;"></td>   
    </tr>
    <tr>
        <td style="width:130px;border-right:1px solid black;">Conductivité éléctrique<h6 style='color:red;'>(*)</h6> à 25°C</td>
        <td style="width:20px;text-align:center;border-right:1px solid black;">EC</td>
        <td style="width:89px;border-right:1px solid black;">NM ISO 7888:V2001</td> 
        <td style="width:113px;border-right:1px solid black;">1830 (μS/cm)</td>
        <td style="width:68px;text-align:center;border-right:1px solid black;">1.39(g/l)</td>
        <td style="width:68px;text-align:center;border-right:1px solid black;"> </td>   
</tr>
<tr>
    <td style="width:130px;border-right:1px solid black;">Salinité (teneur en sels totaux) </td>
    <td style="width:20px;text-align:center;border-right:1px solid black;">TDS</td>
    <td style="width:89px;border-right:1px solid black;text-align:center;">Calcul.</td> 
    <td style="width:113px;border-right:1px solid black;">1.39(g/l)</td>
    <td style="width:68px;text-align:center;border-right:1px solid black;">0,56 à 2,54</td>
    <td style="width:68px;text-align:center;border-right:1px solid black;"> </td>   
</tr>
       
    </table>

    

</body>

</html>