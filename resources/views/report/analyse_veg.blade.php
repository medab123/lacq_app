<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head >
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
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="https://auth.sso.elephant-vert.com/static/common/favicon.ico" rel="icon"
        type="image/vnd.microsoft.icon" sizes="16x16 32x32 48x48 64x64 128x128">
    <link href="https://auth.sso.elephant-vert.com/static/common/favicon.ico" rel="shortcut icon"
        type="image/vnd.microsoft.icon" sizes="16x16 32x32 48x48 64x64 128x128">
</head >

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
    <table border="0" style="width: 100%">
        <tr>
            <td style="width: 55%;"><img src="{{ Archivos::imagenABase64(public_path('img/LacqLogo.jpg')) }}"
                    width="160px" height="40px">
                <br>
                <label style="font-size:9px;margin:0;padding:0;">Laboratoire d'Analyses et Contrôle<br> Qualité ELEPHANT
                    VERT <br>MAROC S.A. </label>
                <br>
                <label style="color:green;font-size:11px;">LAB03F62-Ve</label>
            </td>
            <td style="align-self: center;">
                <h5 style="color:green;text-align:center; font-size:14px;">RAPPORT D'ANALYSE DE
                    VEGETAUX <br>N° VEG
                    {{ $commande_info->code_commande }} <br></h5>
            </td>
            <!--<td style="text-align:right;vertical-align:top;"><img
                    src="{{ Archivos::imagenABase64(public_path('img/semac.png')) }}" width="90px" height="40px"><br>
                <h6 style="color:brown;font-size:10px;margin:0;padding:0;text-align:right;">N° MCI/CE AL 93/2018 </h6>
            </td>-->
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
            <th class="head bordered" style="width: 150px;">Date de prélèvement :</th>
            <td class="bordered">@php echo Archivos::costomDateFormate($commande_info->date_prelevement) @endphp</td>
        </tr>

        <tr>
            <th class="head bordered" style="width: 150px;">Culture :</th>
            <td class="bordered">{{ $commande_info->culture }}</td>
            <th class="head bordered" style="width: 150px;">Date de réception :</th>
            <td class="bordered">@php echo Archivos::costomDateFormate($commande_info->date_reception) @endphp </td>
        </tr>

        <tr>
            <th class="head bordered" style="width: 150px;">Variété :</th>
            <td class="bordered">{{ $commande_info->varite }}</td>
            <th class="head bordered">Date d'analyse :</th>
            <td class="bordered" style="width: 150px;"> @php echo Archivos::costomDateFormate($commande_info->date_reception) @endphp </td>
        </tr>
        <tr>
            <th class="head bordered" style="width: 150px;">Coordonnées GPS :</th>
            <td class="bordered">{{ $commande_info->gps_1 }}</td>
            <th class="head bordered" style="width: 150px;">Date d'édition :</th>
            <td class="bordered">@php echo Archivos::costomDateFormate($commande_info->date_edition) @endphp </td>

        </tr>
        <tr>
            <th class="head bordered" style="width: 150px;">Lieu d'exécution des essais : :</th>
            <td class="bordered">{{ $commande_info->lieu ?? "_" }}</td>
            <th class="head bordered" style="width: 150px;">Quantité récéptionnée: </th>
            <td class="bordered">{{ $commande_info->quantite }}</td>

        </tr>

        <tr>
            <th class="head bordered" style="width: 150px;">Référence client :</th>
            <td class="bordered" colspan="3">{{ $commande_info->ref_client }}</td>
        </tr>
        <tr>
            <th class=" " style="width: 150px;"></th>
            <td class=""></td>
            <th class="head bordered" style="width: 150px;">Organisme :</th>
            <td class="bordered">{{ $client_info->organisme }}</td>
        </tr>
    </table>
    <table style="width:100%;font-size:10px;margin-top:10px;border:1px solid black;">
        <tr class="head bordered">
            <th style="width:151px;text-align: left;padding-left:10px ">Paramètres</th>
            <th style="width:34px;">Sym.</th>
            <th class=" bordered" style="width:59px;">Unité</th>
            <th class=" bordered" style="width:91px;">Résultats</th>
            <th class=" bordered" style="width:70px;">Niveau souhaitable</th>
            <th class=" bordered"> Appréciation</th>
        </tr>
    </table>
    <table style="width:100%;font-size:10px;">
        <tr style="font-size:10px;">
            <td colspan="4" class="" style="padding: 0;text-align:left;color:green;"><strong
                    style="margin-left:-10px;padding:0">ELEMENTS MAJEURS</strong></td>

            <td class="" style="width:65px;text-align:left; color:orange; font-weight: 900;">Faible</td>
            <td class="" style="width:65px;text-align:center; color:green; font-weight: 900;">Correct</td>
            <td class="" style="width:65px; text-align:right; color:red; font-weight: 900;">Elevé</td>
        </tr>

    </table>

    <table style="width:100%;font-size:10px;margin-top:0;border:1px solid black;">
        <tr>
            <td style="width:130px;">Azote total</td>
            <td style="width:22px;text-align:center;border-right:1px solid black;">NTK</td>
            <td style="width:50px;border-right:1px solid black;text-align:center;">%MS</td>
            <td style="width:75px;border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->NTK)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->NTK, true);
                    }
                @endphp
            </td>
            <td style="width:60px;text-align:center;border-right:1px solid black;">
                {{ $cultureData->NTK["min"] }} -
                {{ $cultureData->NTK["max"] }}</td>
                {!! Archivos::VEG($analyse_data->NTK,$cultureData->NTK["min"] , $cultureData->NTK["max"]) !!}

        </tr>
        <tr>
            <td>Phosphore </td>
            <td style="text-align:center;border-right:1px solid black;">PT</td>
            <td style="border-right:1px solid black;text-align:center;">%MS</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php

                    if (empty($analyse_data->PT)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->PT, true);
                    }
                @endphp


            </td>
            <td style="text-align:center;border-right:1px solid black;">{{ $cultureData->PT["min"] }} -
                {{ $cultureData->PT["max"] }} </td>

        </tr>
        <tr>
            <td>Potassium </td>
            <td style="text-align:center;border-right:1px solid black;">K</td>
            <td style="border-right:1px solid black;text-align:center;">%MS</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->K)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->K, true);
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">{{ $cultureData->K["min"] }} -
                {{ $cultureData->K["max"] }}</td>
                {!! Archivos::VEG($analyse_data->K,$cultureData->K["min"] , $cultureData->K["max"]) !!}
        </tr>
        <tr>
            <td> Magnésium</td>
            <td style="text-align:center;border-right:1px solid black;">Mg</td>
            <td style="border-right:1px solid black;text-align:center;">%MS</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->Mg)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->Mg, true);
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">{{ $cultureData->Mg["min"] }} -
                {{ $cultureData->Mg["max"] }}</td>
                {!! Archivos::VEG($analyse_data->Mg,$cultureData->Mg["min"] , $cultureData->Mg["max"]) !!}
        </tr>
        <tr>
            <td>Calcium</td>
            <td style="text-align:center;border-right:1px solid black;">Ca</td>
            <td style="border-right:1px solid black;text-align:center">%MS</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->Ca)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->Ca, true);
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">{{ $cultureData->Ca["min"] }} -
                {{ $cultureData->Ca["max"] }}</td>
                {!! Archivos::VEG($analyse_data->Ca,$cultureData->Ca["min"] , $cultureData->Ca["max"]) !!}
        </tr>
    </table>
    <table style="width:100%;font-size:10px;">
        <tr style="font-size:10px;">
            <td colspan="4" class="" style="padding: 0;text-align:left;color:green;"><strong
                    style="margin-left:-10px;padding:0">ELEMENTS NEFASTES</strong></td>

            <td class="" style="width:65px;text-align:left; color:orange; font-weight: 900;">Faible</td>
            <td class="" style="width:65px;text-align:center; color:green; font-weight: 900;">Correct</td>
            <td class="" style="width:65px; text-align:right; color:red; font-weight: 900;">Elevé</td>
        </tr>
    </table>

    <table style="width:100%;font-size:10px;margin-top:0;border:1px solid black;">
        <tr>
            <td style="width:130px;">Sodium </td>
            <td style="width:22px;text-align:center;border-right:1px solid black;">Na</td>
            <td style="width:50px;border-right:1px solid black;text-align:center;">% MS</td>
            <td style="width:75px;border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->Na)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->Na, true);
                    }
                @endphp
            </td>
            <td style="width: 60px;text-align:center;border-right:1px solid black;">{{ $cultureData->Na["min"] }} -
                {{ $cultureData->Na["max"] }}</td>
                {!! Archivos::VEG($analyse_data->Na,$cultureData->Na["min"] , $cultureData->Na["max"]) !!}
        </tr>
        <tr>
            <td>Chlorure</td>
            <td style="text-align:center;border-right:1px solid black;">Cl</td>
            <td style="border-right:1px solid black;text-align:center;">% MS</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                if (empty($analyse_data->Na)) {
                    echo '-';
                } else {
                    echo Archivos::ft3nb($analyse_data->Na*1.3947534658436, true);
                }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">
                {{ $cultureData->Cl["min"] }} -
                {{ $cultureData->Cl["max"] }}</td>
                {!! Archivos::VEG($analyse_data->Na*1.3947534658436,$cultureData->Cl["min"] , $cultureData->Cl["max"]) !!}
        </tr>
    </table>
    <table style="width:100%;font-size:10px;">
        <tr style="font-size:10px;">
            <td colspan="4" class="" style="padding: 0;text-align:left;color:green;"><strong
                    style="margin-left:-10px;padding:0">OLIGO-ELEMENTS</strong></td>

            <td class="" style="width:65px;text-align:left; color:orange; font-weight: 900;">Faible</td>
            <td class="" style="width:65px;text-align:center; color:green; font-weight: 900;">Correct</td>
            <td class="" style="width:65px; text-align:right; color:red; font-weight: 900;">Elevé</td>
        </tr>
    </table>
    <table style="width:100%;font-size:10px;margin-top:0;border:1px solid black;">
        <tr>
            <td style="width:130px;">Zinc</td>
            <td style="width:22px;text-align:center;border-right:1px solid black;">Zn</td>
            <td style="width:50px;border-right:1px solid black;text-align:center;">mg/kg MS</td>
            <td style="width:75px;border-right:1px solid black;text-align:center;">@php

                if (empty($analyse_data->Zn)) {
                    echo '-';
                } else {
                    echo Archivos::ft3nb($analyse_data->Zn, true);
                }

            @endphp
            </td>
            <td style="width:60px;text-align:center;border-right:1px solid black;">
                {{ $cultureData->Zn["min"] }} -
                {{ $cultureData->Zn["max"] }}
            </td>
            {!! Archivos::VEG($analyse_data->Zn,$cultureData->Zn["min"] , $cultureData->Zn["max"]) !!}
        </tr>
        <tr>
            <td>Cuivre
            </td>
            <td style="text-align:center;border-right:1px solid black;">Cu</td>
            <td style="border-right:1px solid black;text-align:center;">mg/kg MS</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->Cu)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->Cu, true);
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">{{ $cultureData->Cu["min"] }} -
                {{ $cultureData->Cu["max"] }}</td>
                {!! Archivos::VEG($analyse_data->Cu,$cultureData->Cu["min"] , $cultureData->Cu["max"]) !!}
        </tr>
        <tr>
            <td>Manganèse
            </td>
            <td style="text-align:center;border-right:1px solid black;">Mn</td>
            <td style="border-right:1px solid black;text-align:center;">mg/kg MS</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->Mn)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->Mn, true);
                    }
                @endphp</td>
            <td style="text-align:center;border-right:1px solid black;">{{ $cultureData->Mn["min"] }} -
                {{ $cultureData->Mn["max"] }}</td>
                {!! Archivos::VEG($analyse_data->Mn,$cultureData->Mn["min"] , $cultureData->Mn["max"]) !!}
        </tr>
        <tr>
            <td>Fer
            </td>
            <td style="text-align:center;border-right:1px solid black;">Fe</td>
            <td style="border-right:1px solid black;text-align:center;">mg/kg MS</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->Fe)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->Fe, true);
                    }
                @endphp</td>
            <td style="text-align:center;border-right:1px solid black;">{{ $cultureData->Fe["min"] }} -
                {{ $cultureData->Fe["max"] }}</td>
                {!! Archivos::VEG($analyse_data->Fe,$cultureData->Fe["min"] , $cultureData->Fe["max"]) !!}
        </tr>
        <tr>
            <td>Bore </td>
            <td style="text-align:center;border-right:1px solid black;">B</td>
            <td style="border-right:1px solid black;text-align:center;">mg/kg MS</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->B)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->B, true);
                    }
                @endphp</td>
            <td style="text-align:center;border-right:1px solid black;">{{ $cultureData->B["min"] }} -
                {{ $cultureData->B["max"] }}</td>
            {!! Archivos::VEG($analyse_data->B,$cultureData->B["min"] , $cultureData->B["max"]) !!}
        </tr>
    </table>
    <table style="width:100%;font-size:10px;">
        <tr style="font-size:10px;">
            <td colspan="4" class="" style="padding: 0;text-align:left;color:green;"><strong
                    style="margin-left:-10px;padding:0">EQUILIBRES NUTRITIONNELS</strong></td>

            <td class="" style="width:65px;text-align:left; color:orange; font-weight: 900;">Faible</td>
            <td class="" style="width:65px;text-align:center; color:green; font-weight: 900;">Correct</td>
            <td class="" style="width:65px; text-align:right; color:red; font-weight: 900;">Elevé</td>
        </tr>
    </table>

    <table style="width:100%;font-size:10px;margin-top:0;border:1px solid black;">
        <tr>
            <td style="width: 130px">N/P</td>
            <td style="width:22px;text-align:center;border-right:1px solid black;"></td>
            <td style="width:50px;border-right:1px solid black;text-align:center;">-</td>
            <td style="width:75px;border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->PT)) {
                        echo '_';
                    } else {
                        echo Archivos::ft3nb($analyse_data->NTK / $analyse_data->PT, true);
                    }
                @endphp


            </td>
            <td style="width:60px;text-align:center;border-right:1px solid black;">{{ Archivos::ft3nb((($cultureData->NTK["min"]+$cultureData->NTK["max"])/2)/(($cultureData->PT["min"]+$cultureData->PT["max"])/2),true) }}</td>
            {!! Archivos::VEG($analyse_data->NTK / $analyse_data->PT,$cultureData->NrP["min"] , $cultureData->NrP["max"]) !!}

        </tr>
        <tr>
            <td>N/K </td>
            <td style="text-align:center;border-right:1px solid black;"></td>
            <td style="text-align:center;border-right:1px solid black;border-left:1px solid black; ">-
            </td>
            <td style="text-align:center;border-right:1px solid black;border-left:1px solid black; ">
                @php
                    if (empty($analyse_data->K)) {
                        echo '_';
                    } else {
                        echo Archivos::ft3nb($analyse_data->NTK / $analyse_data->K, true);
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;border-left:1px solid black; ">{{ Archivos::ft3nb((($cultureData->NTK["min"]+$cultureData->NTK["max"])/2)/(($cultureData->K["min"]+$cultureData->K["max"])/2),true) }}</td>
            {!! Archivos::VEG($analyse_data->NTK / $analyse_data->K,$cultureData->NrK["min"] , $cultureData->NrK["max"]) !!}

        </tr>
        <tr>
            <td style="">N/Ca</td>
            <td style="text-align:center;border-right:1px solid black;"></td>
            <td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>
            <td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">
                @php
                    if (empty($analyse_data->PT)) {
                        echo '_';
                    } else {
                        echo Archivos::ft3nb($analyse_data->NTK / $analyse_data->Ca, true);
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">{{ Archivos::ft3nb((($cultureData->NTK["min"]+$cultureData->NTK["max"])/2)/(($cultureData->Ca["min"]+$cultureData->Ca["max"])/2),true) }}</td>
            {!! Archivos::VEG($analyse_data->NTK / $analyse_data->Ca,$cultureData->NrCa["min"] , $cultureData->NrCa["max"]) !!}
        </tr>
        <tr>
            <td>Ca/P</td>
            <td style="text-align:center;border-right:1px solid black;"></td>
            <td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>
            <td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">

                @php
                    if (empty($analyse_data->PT)) {
                        echo '_';
                    } else {
                        echo Archivos::ft3nb($analyse_data->Ca / $analyse_data->PT, true);
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">{{ Archivos::ft3nb((($cultureData->Ca["min"]+$cultureData->Ca["max"])/2)/(($cultureData->PT["min"]+$cultureData->PT["max"])/2),true) }}</td>
            {!! Archivos::VEG($analyse_data->Ca / $analyse_data->PT,$cultureData->CarP["min"] , $cultureData->CarP["max"]) !!}

        </tr>
        <tr>
            <td>K2O / Mg</td>
            <td style="text-align:center;border-right:1px solid black;"></td>
            <td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>
            <td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">

                @php
                    if (empty($analyse_data->Mg)) {
                        echo '_';
                    } else {
                        echo Archivos::ft3nb($analyse_data->K / $analyse_data->Mg, true);
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">{{ Archivos::ft3nb((($cultureData->K["min"]+$cultureData->K["max"])/2)/(($cultureData->Mg["min"]+$cultureData->Mg["max"])/2),true) }}</td>
            {!! Archivos::VEG($analyse_data->K / $analyse_data->Mg,$cultureData->KrmG["min"] , $cultureData->KrmG["max"]) !!}

        </tr>


        <tr>
            <td>K2O / Ca</td>
            <td style="text-align:center;border-right:1px solid black;"></td>
            <td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>
            <td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">

                @php
                    if (empty($analyse_data->Ca)) {
                        echo '_';
                    } else {
                        echo Archivos::ft3nb($analyse_data->K / $analyse_data->Ca, true);
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">{{ Archivos::ft3nb((($cultureData->K["min"]+$cultureData->K["max"])/2)/(($cultureData->Ca["min"]+$cultureData->Ca["max"])/2),true) }}</td>
            {!! Archivos::VEG($analyse_data->K / $analyse_data->Ca,$cultureData->KrCa["min"] , $cultureData->KrCa["max"]) !!}
        </tr>

        <tr>
            <td>CaO / Mg</td>
            <td style="text-align:center;border-right:1px solid black;"></td>
            <td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>
            <td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">

                @php
                    if (empty($analyse_data->Mg)) {
                        echo '_';
                    } else {
                        echo Archivos::ft3nb($analyse_data->Ca / $analyse_data->Mg, true);
                    }
                    // ((max1+min1)/2)/((max2+min2)/2)
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">{{ Archivos::ft3nb((($cultureData->Ca["min"]+$cultureData->Ca["max"])/2)/(($cultureData->Mg["min"]+$cultureData->Mg["max"])/2),true) }}</td>
            {!! Archivos::VEG($analyse_data->Ca / $analyse_data->Mg,$cultureData->CarMg["min"] , $cultureData->CarMg["max"]) !!}
        </tr>
    </table>
    <table style="margin-left: 1px;font-size:10px;">
        <tr>
            <th
                style="background: #b5feb4 !important; padding-top:10px;padding-bottom:10px;text-align:left;color:green;border-right: 1px solid black;border-bottom: 1px dotted black;width: 198px;border-left: 1px solid black;">
                <strong>COMMENTAIRES : </strong>
            </th>
            <th
                style="text-align:left;color:green;border-bottom: 1px dotted black;border-right: 1px solid black;width: 497.5px">
            </th>

        </tr>
    </table>

    {!! Archivos::commants($analyse_data,$cultureData) !!}
    <img src="{{ Archivos::imagenABase64(public_path('img/signature.png')) }}" style="margin-top:50px"
        width="500px">
    <p class="text" style="font-size:8px;"><strong> FIN DE PAGE<br>
            ------------------------------<br>
            Laboratoire LACQ <br>
            AGROPOLIS-GI5 GI6, Commune de Mejjate, Meknes, Maroc <br>
            Tel:+212 535 52 94 01 <br>
            contact.lacq@elephant-vert.com
    </p> </strong>

</body>

</html>
