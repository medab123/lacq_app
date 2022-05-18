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
</head>

<body style="text-align: center;margin:0 auto">
    <style>
        table {
            border-collapse: collapse;

        }

        h6 {
            display: inline !important;
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

        .text {
            text-align: center;
            bottom: 0px;
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

    </style>

    @php use App\Custom\Archivos; @endphp
    <table border="0">
        <tr>
            <td><img src="{{ Archivos::imagenABase64(public_path('img/LacqLogo.jpg')) }}" width="160px" height="40px">
                <br>
                <label style="font-size:9px;margin:0;padding:0;">Laboratoire d'Analyses et Contrôle<br> Qualité ELEPHANT
                    VERT <br>MAROC S.A. </label>
                <br>
                <label style="color:green;font-size:11px;">LAB03F61-Vg</label>
            </td>
            <td>
                <h5 style="color:green;text-align:center; font-size:14px;">RAPPORT D'ANALYSE D'EAU D'IRRIGATION
                    </br>N° EAU {{ $commande_info->code_commande }} </h5>
            </td>
            <td style="text-align:right;vertical-align: top;"><img
                    src="{{ Archivos::imagenABase64(public_path('img/semac.png')) }}" width="90px" height="40px"><br>
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
            <td class="bordered">{{ $commande_info->code_commande }} </td>
        </tr>

        <tr>
            <th class="head bordered" style="width: 150px;">Adresse :</th>
            <td class="bordered">{{ $client_info->address }}</td>
            <th class="head bordered" style="width: 150px;">Température à la réception:</th>
            <td class="bordered">{{ $commande_info->temperature }} °C</td>
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
            <td class="bordered" style="width: 150px;"> @php echo Archivos::costomDateFormate($commande_info->date_reception) @endphp </td>
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
    <div style="font-size:9px; margin-top:10px;float:left;border-top:black 0.5pt solid;border-left:black 0.5pt solid;border-right:black 0.5pt solid;padding:2px 5px 2px 5px;width:300px;background-color:#b5feb4;font-family: Verdana, Geneva, sans-serif;font-weight: 700;">ETAT PHYSIQUE</div>
    <table border="" style="width:100%;font-size:9px;margin-top:26px;border:0.1pt solid black;">

        <tr style="">
            <td class="" style="text-align:left; width:150px">Argile ‰ (&lt; 2 µm): <span style="text-align:center;margin-top:5px;float: right; background-color: #b5feb4;padding:2px 5px 2px 5px;width:20px;border:black 1px solid">50</span></td>
            <td class="" style="text-align:;" rowspan="3"><img src="{{ App\Custom\Archivos::GeneratTriengleTextural(10,2,1) }}" height="70px"></td>
            <td class="" style="text-align:;">Indice de battance : <span style="text-align:center;margin-top:5px;float: right; background-color: #b5feb4;padding:2px 5px 2px 5px;width:20px;border:black 1px solid">50</span></td>

        </tr>
        <tr style="">
            <td class="" style="text-align:left;width:150px ">Limons ‰ (2 à 50 µm): <span style="text-align:center;margin-top:5px;float: right; background-color: #b5feb4;padding:2px 5px 2px 5px;width:20px;border:black 1px solid">50</span></td>
            <td class="" style="text-align:;">Indice de porosité : <span style="text-align:center;margin-top:5px;float: right; background-color: #b5feb4;padding:2px 5px 2px 5px;width:20px;border:black 1px solid">50</span></td>

        </tr>
        <tr style="">
            <td class="" style="text-align:left;width:150px ">Sables ‰ (50 à 2000 µm): <span style="text-align:center;margin-top:5px;float: right; background-color: #b5feb4;padding:2px 5px 2px 5px;width:20px;border:black 1px solid">50</span></td>
            <td class="" style="text-align:;">Réserve Utile estimée :</td>

        </tr>

    </table>
    <table style="width: 50%;font-size:10px;float:left;margin-top:10px" class="bordered">
        <tr >
            <td class="head bordered" style="font-weight: 500" colspan="4">ETAT HUMIQUE</td>
        </tr>
        <tr>
            <td style="border-bottom:rgb(141, 141, 141) 0.2pt solid;width:150px"></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">Résultats</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">Faible</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">Seuils</td>
        </tr>
        <tr>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"><span style="font-weight: 500;font-size:9px">Matière organique en g/kg (<b style="color: red">*</b>)</span><br/><span style="color: gray;font-size:8px">NF ISO 14235:V1998</span></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;text-align:center">0</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">12 à 17</td>
        </tr>
        <tr>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"><span style="font-weight: 500;font-size:9px">Matière organique en g/kg</span><br/><span style="color: gray;font-size:8px">NF ISO 14235: V1998 (MO=Carb. Org*1,72)</span></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;text-align:center">0</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">20 à 30</td>
        </tr>
        <tr>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"><span style="font-weight: 500;font-size:9px">Azote total en g/kg</span><br/><span style="color: gray;font-size:8px">NF ISO 11261: V1995</span></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;text-align:center">0</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">1,0 à 3,0</td>
        </tr>
        <tr>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"><span style="font-weight: 500;font-size:9px">Rapport C/N</span><br/><span style="color: gray;font-size:8px">Calcul.</span></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;text-align:center">0</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">8 à 12</td>
        </tr>
    </table>
    <table style="width: 50%;font-size:10px;float:right;margin-top:10px" class="bordered">
        <tr >
            <td class="head bordered" style="font-weight: 500" colspan="4">SALINITE</td>
        </tr>
        <tr>
            <td style="border-bottom:rgb(141, 141, 141) 0.2pt solid;width:150px"></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">Résultats</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">Faible</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">Seuils</td>
        </tr>
        <tr>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"><span style="font-weight: 500;font-size:9px">Conductivité éléctrique mS/cm (<b style="color: red">*</b>)</span><br/><span style="color: gray;font-size:8px">ISO 11265: V1995</span></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;text-align:center">0</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">Inf à 0,40</td>
        </tr>
        <tr>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"><span style="font-weight: 500;font-size:9px">Sodium (Na2O) g/kg (<b style="color: red">*</b>)</span><br/><span style="color: gray;font-size:8px">NF × 31 -108: V2002</span></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;text-align:center">0</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">Inf à 0,34</td>
        </tr>
        <tr>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"><span style="font-weight: 500;font-size:9px">Chlorures (Cl ) mg/kg (<b style="color: red">*</b>)</span><br/><span style="color: gray;font-size:8px">Extrait aqueux  1/5 Flux continu</span></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;text-align:center">0</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">Inf à 100</td>
        </tr>
        <tr>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"><span style="font-weight: 500;font-size:9px">Conductivité éléctrique mS/m (<b style="color: red">*</b>)</span><br/><span style="color: gray;font-size:8px">ISO 11265 :V1995</span></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;text-align:center">0</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">Inf à 40</td>
        </tr>
    </table>

    <table style="width: 50%;font-size:10px;float:left;margin-top:160px" class="bordered">
        <tr >
            <td class="head bordered" style="font-weight: 500" colspan="4">STATUT ACIDO-BASIQUE</td>
        </tr>
        <tr>
            <td style="border-bottom:rgb(141, 141, 141) 0.2pt solid;width:150px"></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">Résultats</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">Faible</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">Seuils</td>
        </tr>
        <tr>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"><span style="font-weight: 500;font-size:9px">Calcaire total g/kg</span><br/><span style="color: gray;font-size:8px">NF ISO 10693:V2014</span></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;text-align:center">0</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">12 à 17</td>
        </tr>
        <tr>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"><span style="font-weight: 500;font-size:9px">Calcaire actif g/kg</span><br/><span style="color: gray;font-size:8px">NF X 31-106:V 2002</span></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;text-align:center">0</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">20 à 30</td>
        </tr>
        <tr>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"><span style="font-weight: 500;font-size:9px">pH eau corrigé à 25°C (<b style="color: red">*</b>)</span><br/><span style="color: gray;font-size:8px">NF ISO 10390: V2005</span></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;text-align:center">0</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">1,0 à 3,0</td>
        </tr>
        <tr>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"><span style="font-weight: 500;font-size:9px">pH KCl corrigé à 25°C (<b style="color: red">*</b>)</span><br/><span style="color: gray;font-size:8px">NF ISO 10390: V2005</span></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;text-align:center">0</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">8 à 12</td>
        </tr>
        <tr>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"><span style="font-weight: 500;font-size:9px">Calcium (CaO) g/kg (<b style="color: red">*</b>)</span><br/><span style="color: gray;font-size:8px">NF × 31 -108: V2002</span></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;text-align:center">0</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">8 à 12</td>
        </tr>
        <tr>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"><span style="font-weight: 500;font-size:9px">CEC Metson  Cmol/kg</span><br/><span style="color: gray;font-size:8px">NF × 31 -130:V 1999</span></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;text-align:center">0</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">8 à 12</td>
        </tr>
    </table>
    <table style="width: 50%;font-size:10px;float:right;margin-top:160px" class="bordered">
        <tr >
            <td class="head bordered" style="font-weight: 500" colspan="4">ETAT HUMIQUE</td>
        </tr>
        <tr>
            <td style="border-bottom:rgb(141, 141, 141) 0.2pt solid;width:150px"></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">Résultats</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">Faible</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">Seuils</td>
        </tr>
        <tr>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"><span style="font-weight: 500;font-size:9px">Matière organique en g/kg (<b style="color: red">*</b>)</span><br/><span style="color: gray;font-size:8px">NF ISO 14235:V1998</span></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;text-align:center">0</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">12 à 17</td>
        </tr>
        <tr>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"><span style="font-weight: 500;font-size:9px">Matière organique en g/kg</span><br/><span style="color: gray;font-size:8px">NF ISO 14235: V1998 (MO=Carb. Org*1,72)</span></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;text-align:center">0</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">20 à 30</td>
        </tr>
        <tr>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"><span style="font-weight: 500;font-size:9px">Azote total en g/kg</span><br/><span style="color: gray;font-size:8px">NF ISO 11261: V1995</span></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;text-align:center">0</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">1,0 à 3,0</td>
        </tr>
        <tr>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"><span style="font-weight: 500;font-size:9px">Rapport C/N</span><br/><span style="color: gray;font-size:8px">Calcul.</span></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;text-align:center">0</td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;"></td>
            <td  style="border-bottom:rgb(141, 141, 141) 0.2pt solid;">8 à 12</td>
        </tr>
    </table>





    <img src="{{ Archivos::imagenABase64(public_path('img/signature.png')) }}" style="margin-top:400px" width="560px">
    <p class="text" style="font-size:8px;">Laboratoire LACQ <br>
        AGROPOLIS-GI5 GI6, Commune de Mejjate, Meknes, Maroc <br>
        Tel:+212 535 52 94 01 <br>
        contact.lacq@elephant-vert.com <br>
        <span style="margin-left: 650px;font-size:8px;">Fin de page</span>
        </p>

</body>

</html>
