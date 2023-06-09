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
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="https://auth.sso.elephant-vert.com/static/common/favicon.ico" rel="icon" type="image/vnd.microsoft.icon"
        sizes="16x16 32x32 48x48 64x64 128x128">
    <link href="https://auth.sso.elephant-vert.com/static/common/favicon.ico" rel="shortcut icon"
        type="image/vnd.microsoft.icon" sizes="16x16 32x32 48x48 64x64 128x128">
</head bordered>

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

    <table style="width:100%;font-size:10px;margin-top:;border:1px solid black;">

        <tr class="head bordered">
            <th class=" bordered" style="width:131px;" rowspan="2">Paramètres</th>
            <th class=" bordered" style="width:39px;" rowspan="2">Sym.</th>
            <th class=" bordered" rowspan="2" style="width:107px;">Méthodes</th>
            <th class=" bordered" rowspan="2" style="width:140px;">Résultats <h6 style="font-size:6px;"> (Unité)
                </h6>
            </th>
            <th class=" bordered" rowspan="2" style="width:58px;">Seuils <h6 style="font-size:6px;"> (mg/L)</h6>
            </th>
            <th class=" bordered" colspan="3">Appréciation</th>
        </tr>
        <tr class="head bordered" style="font-size:10px;">
            <td style="text-align:center;color:#FFA500">Faible</td>
            <td style="color:green">Moyen</td>
            <td style="color:red">Fort</td>
        </tr>
    </table>
    <table style="width:100%;font-size:10px;">
        <tr>
            <th style="border:0px;text-align:left;color:green">CARACTERISTIQUES DE L'EAU</th>
        </tr>
    </table>
    <table style="width:100%;font-size:9px;border:1px solid black;">
        <tr>
            <td style="width:121px;border-right:1px solid black;">Potentiel hydrogène<h6 style='color:red;'>(*)</h6> à
                25°C</td>
            <td style="width:30px;text-align:center;border-right:1px solid black;">pH</td>
            <td style="width:97px;border-right:1px solid black;">NM ISO 10523:V2001</td>
            <td style="width:130px;border-right:1px solid black;text-align:center;">@php
                if (empty($analyse_data->PH)) {
                    echo '-';
                } else {
                    echo Archivos::ft3nb($analyse_data->PH, true);
                }
            @endphp
            </td>
            <td style="width:48px;text-align:center;border-right:1px solid black;">6.50 à 8.40</td>
            <td style="z-index:10;padding:0px !important;width:58px;">
                <div style="position:absolute;padding:0px;margin:0px;">
                    @php
                        if (empty($analyse_data->PH)) {
                            echo ' ';
                        } else {
                            echo Archivos::afficherBar($analyse_data->PH, 6.5, 8.4);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td style="border-right:1px solid black;">Conductivité éléctrique à 25°C </td>
            <td style="text-align:center;border-right:1px solid black;">EC</td>
            <td style="border-right:1px solid black;">NM ISO 7888:V2001</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->EC)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->EC, true), ' (mS/cm)';
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">0.70 à 3.00</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php
                        if (empty($analyse_data->EC)) {
                            echo ' ';
                        } else {
                            echo Archivos::afficherBar($analyse_data->EC, 0.7, 3.0);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td style="border-right:1px solid black;">Conductivité éléctrique<h6 style='color:red;'>(*)</h6> à 25°C</td>
            <td style="text-align:center;border-right:1px solid black;">EC</td>
            <td style="border-right:1px solid black;">NM ISO 7888:V2001</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->EC)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->EC * 1000, true), ' (&micro;S/cm)';
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">700 à 3000</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php
                        if (empty($analyse_data->EC)) {
                            echo ' ';
                        } else {
                            echo Archivos::afficherBar($analyse_data->EC * 1000, 700, 3000);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>

            <td style="border-right:1px solid black;background:rgb(230, 230, 230);">Salinité (teneur en sels totaux)
            </td>
            <td style="text-align:center;border-right:1px solid black;background:rgb(230, 230, 230);">TDS</td>
            <td style="border-right:1px solid black;text-align:center;background:rgb(230, 230, 230);">Calcul.</td>
            <td style="border-right:1px solid black;background:rgb(230, 230, 230);text-align:center;">@php
                if (empty($analyse_data->EC)) {
                    $var = '-';
                } elseif ($analyse_data->EC < 0.05) {
                    $var = Archivos::ft3nb($analyse_data->EC * 1.365079, true);
                } elseif ($analyse_data->EC < 0.166) {
                    $var = Archivos::ft3nb($analyse_data->EC * 0.947658, true);
                } elseif ($analyse_data->EC < 0.333) {
                    $var = Archivos::ft3nb($analyse_data->EC * 0.769574, true);
                } elseif ($analyse_data->EC < 0.833) {
                    $var = Archivos::ft3nb($analyse_data->EC * 0.71592, true);
                } elseif ($analyse_data->EC < 10) {
                    $var = Archivos::ft3nb($analyse_data->EC * 0.758544, true);
                }
             echo $var;
            @endphp

            </td>
            <td style="text-align:center;border-right:1px solid black;background:rgb(230, 230, 230);">0.56 à 2.54</td>
            <td style="background:rgb(230, 230, 230);z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php
                        if (empty($analyse_data->EC)) {
                            echo ' ';
                        } else {
                            echo Archivos::afficherBar($var, 0.56, 2.54);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:rgb(230, 230, 230);"></td>
            <td style="background:rgb(230, 230, 230);"></td>

        </tr>
    </table>

    <table style="width:100%;font-size:10px;">
        <tr>
            <th style="border:0px;text-align:left;color:green">BILAN IONIQUE</th>
        </tr>
    </table>
    <table style="width:100%;font-size:9px;border:1px solid black;">
        <tr>
            <td style="width:121px;border-right:1px solid black;">Nitrates </td>
            <td style="width:30px;text-align:center;border-right:1px solid black;">NO3</td>
            <td style="width:97px;border-right:1px solid black;">NF EN ISO 13395:V1996</td>
            <td style="text-align:center;width:62px;border-right:1px solid rgb(228, 228, 228);">
                @php
                    if (empty($analyse_data->NO3)) {
                        echo '-';
                    } elseif ($analyse_data->NO3 < 0.5) {
                        echo 'inf à 0.50 (mg/l)';
                    } else {
                        echo Archivos::ft3nb($analyse_data->NO3, true), ' (mg/l)';
                    }
                @endphp
            </td>
            <td style="text-align:center;width:48px;border-right:1px solid black;font-size:8px;">
                @php
                    if (empty($analyse_data->NO3 / 62)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->NO3 / 62, true), ' (méq/L)';
                    }
                @endphp
            </td>
            <td style="width:48px;text-align:center;border-right:1px solid black;">22 à 33</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php
                        if (empty($analyse_data->NO3)) {
                            echo ' ';
                        } else {
                            echo Archivos::afficherBar($analyse_data->NO3, 22, 33);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td style="border-right:1px solid black;border-bottom:1px solid rgb(228, 228, 228);">Ammonium </td>
            <td style="text-align:center;border-right:1px solid black;border-bottom:1px solid rgb(228, 228, 228);">NH4
            </td>
            <td style="border-right:1px solid black;border-bottom:1px solid rgb(228, 228, 228);">NF EN ISO 11732:V2005
            </td>
            <td
                style="text-align:center;border-right:1px solid rgb(228, 228, 228);border-bottom:1px solid rgb(228, 228, 228);">
                @php
                    if (empty($analyse_data->NH4)) {
                        echo '-';
                    } elseif ($analyse_data->NH4 < 0.5) {
                        echo 'inf à 0.10 (mg/l)';
                    } else {
                        echo Archivos::ft3nb($analyse_data->NH4, true), ' (mg/l)';
                    }
                @endphp
            </td>
            <td
                style="text-align:center;border-right:1px solid black;border-bottom:1px solid rgb(228, 228, 228);font-size:8px;">
                @php
                    if (empty($analyse_data->NH4 / 18)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->NH4 / 18, true), ' (méq/L)';
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;border-bottom:1px solid rgb(228, 228, 228);">7 à
                44 </td>
            <td style="border-bottom:1px solid rgb(228, 228, 228);z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php
                        if (empty($analyse_data->NH4)) {
                            echo ' ';
                        } else {
                            echo Archivos::afficherBar($analyse_data->NH4, 7, 44);
                        }
                    @endphp
                </div>
            </td>
            <td style="border-bottom:1px solid rgb(228, 228, 228);background:#b5feb4;"></td>
            <td style="border-bottom:1px solid rgb(228, 228, 228);"></td>
        </tr>
        <tr>
            <td style="border-right:1px solid black;">Calcium<h6 style='color:red;'>(*)</h6>
            </td>
            <td style="text-align:center;border-right:1px solid black;">Ca</td>
            <td style="border-right:1px solid black;">NF EN ISO 11885:V2009 </td>
            <td style="text-align:center;border-right:1px solid rgb(228, 228, 228);">
                @php
                    if (empty($analyse_data->Ca)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->Ca, true), ' (mg/l)';
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;font-size:8px;">
                @php
                    if (empty($analyse_data->Ca / 20)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->Ca / 20, true), ' (méq/L)';
                    }
                @endphp
            </td>
            <td style="text-align:center;text-align:center;border-right:1px solid black;">70 à 120</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php
                        if (empty($analyse_data->Ca)) {
                            echo ' ';
                        } else {
                            echo Archivos::afficherBar($analyse_data->Ca, 70, 120);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td style="border-right:1px solid black;">Magnésium<h6 style='color:red;'>(*)</h6>
            </td>
            <td style="text-align:center;border-right:1px solid black;">Mg</td>
            <td style="border-right:1px solid black;">NF EN ISO 11885:V2009 </td>
            <td style="text-align:center;border-right:1px solid rgb(228, 228, 228);">
                @php
                    if (empty($analyse_data->Mg)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->Mg, true), ' (mg/l)';
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;font-size:8px;">
                @php
                    if (empty($analyse_data->Mg / 12)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->Mg / 12, true), ' (méq/L)';
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">20 à 50</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php
                        if (empty($analyse_data->Mg)) {
                            echo ' ';
                        } else {
                            echo Archivos::afficherBar($analyse_data->Mg, 20, 50);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td style="border-right:1px solid black;">Potassium<h6 style='color:red;'>(*)</h6>
            </td>
            <td style="text-align:center;border-right:1px solid black;">K</td>
            <td style="border-right:1px solid black;">NF EN ISO 11885:V2009 </td>
            <td style="text-align:center;border-right:1px solid rgb(228, 228, 228);">
                @php
                    if (empty($analyse_data->K)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->K, true), ' (mg/l)';
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;font-size:8px;">
                @php
                    if (empty($analyse_data->K / 39)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->K / 39, true), ' (méq/L)';
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">50 à 150</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php
                        if (empty($analyse_data->K)) {
                            echo ' ';
                        } else {
                            echo Archivos::afficherBar($analyse_data->K, 50, 150);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td style="border-right:1px solid black;">Sodium<h6 style='color:red;'>(*)</h6>
            </td>
            <td style="text-align:center;border-right:1px solid black;">Na</td>
            <td style="border-right:1px solid black;">NF EN ISO 11885:V2009 </td>
            <td style="text-align:center;border-right:1px solid rgb(228, 228, 228);">@php
                if (empty($analyse_data->Na)) {
                    echo '-';
                } else {
                    echo Archivos::ft3nb($analyse_data->Na, true), ' (mg/l)';
                }
            @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;font-size:8px;">@php
                if (empty($analyse_data->Na / 23)) {
                    echo '-';
                } else {
                    echo Archivos::ft3nb($analyse_data->Na / 23, true), ' (méq/L)';
                }
            @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">
                @php
                    $max = Archivos::ft3nb(23 * 9 * (sqrt($analyse_data->Ca + $analyse_data->Mg) / 2), true);
                    echo 'Inf à ', $max;
                @endphp
            </td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php

                        if (empty($analyse_data->Na)) {
                            echo ' ';
                        } else {
                            $max = Archivos::ft3nb(23 * 9 * (sqrt($analyse_data->Ca + $analyse_data->Mg) / 2), true);
                            echo Archivos::afficherBar($analyse_data->Na, 1357, $max);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td style="border-right:1px solid black;background:rgb(230, 230, 230);">Sodium absorption Ratio</td>
            <td style="text-align:center;border-right:1px solid black;background:rgb(230, 230, 230);">SAR</td>
            <td style="text-align:center;border-right:1px solid black;background:rgb(230, 230, 230);">Calcul. </td>
            <td style="text-align:center;border-right:1px solid black;background:rgb(230, 230, 230);" colspan="2">
                @php
                    if (empty($analyse_data->Na)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->Na / (sqrt($analyse_data->Ca + $analyse_data->Mg) / 2), true), ' (mg/l)';
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;background:rgb(230, 230, 230);">-</td>
            <td style="background:rgb(230, 230, 230);color:#FFD700;z-index:10;">
                <div style="position:absolute;"></div>
            </td>
            <td style="background:rgb(230, 230, 230);"></td>
            <td style="background:rgb(230, 230, 230);"></td>
        </tr>
        <tr>
            <td style="border-right:1px solid black;">Phosphates</td>
            <td style="text-align:center;border-right:1px solid black;">H2PO4</td>
            <td style="border-right:1px solid black;">NM ISO 15681-2: V2007 </td>
            <td style="text-align:center;border-right:1px solid rgb(228, 228, 228);">
                @php
                    if (empty($analyse_data->H2PO4)) {
                        echo '-';
                    } elseif ($analyse_data->H2PO4 < 0.2) {
                        echo 'inf à 0.02 (mg/l)';
                    } else {
                        echo Archivos::ft3nb($analyse_data->H2PO4, true), ' (mg/l)';
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;font-size:8px;">
                @php
                    if (empty($analyse_data->H2PO4 / 97)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->H2PO4 / 97, true), ' (méq/L)';
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">3 à 6</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php
                        if (empty($analyse_data->H2PO4)) {
                            echo ' ';
                        } else {
                            echo Archivos::afficherBar($analyse_data->H2PO4, 3, 6);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td style="border-right:1px solid black;">Chlorure </td>
            <td style="text-align:center;border-right:1px solid black;">Cl</td>
            <td style="border-right:1px solid black;">NF EN ISO 15682:V2001 </td>
            <td style="text-align:center;border-right:1px solid rgb(228, 228, 228);">
                @php
                    if (empty($analyse_data->Cl)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->Cl, true), ' (mg/l)';
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;font-size:8px;">
                @php
                    if (empty($analyse_data->Cl / 35.5)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->Cl / 35.5, true), ' (méq/L)';
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">Inf à 335</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php

                        if (empty($analyse_data->Cl)) {
                            echo ' ';
                        } else {
                            echo Archivos::afficherBar($analyse_data->Na, 0, 335);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td style="border-right:1px solid black;">Sulfates</td>
            <td style="text-align:center;border-right:1px solid black;">SO4</td>
            <td style="border-right:1px solid black;">NF T 90-040: V1986 </td>
            <td style="text-align:center;border-right:1px solid rgb(228, 228, 228);">
                @php
                    if (empty($analyse_data->SO4)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->SO4, true), ' (mg/l)';
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;font-size:8px;">@php
                if (empty($analyse_data->SO4 / 96.06)) {
                    echo '-';
                } else {
                    echo Archivos::ft3nb($analyse_data->SO4 / 96.06, true), ' (méq/L)';
                }
            @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">35 à 250</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php
                        if (empty($analyse_data->SO4)) {
                            echo ' ';
                        } else {
                            echo Archivos::afficherBar($analyse_data->SO4, 35, 250);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td style="border-right:1px solid black;">Bicarbonates</td>
            <td style="text-align:center;border-right:1px solid black;">HCO3</td>
            <td style="border-right:1px solid black;">NM ISO 9963-1:V2001 </td>
            <td style="text-align:center;border-right:1px solid rgb(228, 228, 228);">@php
                if (empty($analyse_data->HCO3)) {
                    echo '-';
                } else {
                    echo Archivos::ft3nb($analyse_data->HCO3, true), ' (mg/l)';
                }
            @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;font-size:8px;">@php
                if (empty($analyse_data->HCO3 / 61)) {
                    echo '-';
                } else {
                    echo Archivos::ft3nb($analyse_data->HCO3 / 61, true), ' (méq/L)';
                }
            @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">92 à 510</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php
                        if (empty($analyse_data->HCO3)) {
                            echo ' ';
                        } else {
                            echo Archivos::afficherBar($analyse_data->HCO3, 92, 510);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td style="border-right:1px solid black;">Carbonates </td>
            <td style="text-align:center;border-right:1px solid black;">CO3</td>
            <td style="border-right:1px solid black;">NM ISO 9963-1:V2001 </td>
            <td style="text-align:center;border-right:1px solid rgb(228, 228, 228);">@php
                if (empty($analyse_data->CO3)) {
                    echo '-';
                } else {
                    echo Archivos::ft3nb($analyse_data->CO3, true), ' (mg/l)';
                }
            @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;font-size:8px;">
                @php
                    if (empty($analyse_data->CO3 / 100)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->CO3 / 100, true), ' (méq/L)';
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">-</td>
            <td style="z-index:10;">
                <div style="position:absolute;"></div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
    </table>

    <table style="width:100%;font-size:10px;">
        <tr>
            <th style="border:0px;text-align:left;color:green">OLIGO-ELEMENTS</th>
        </tr>
    </table>
    <table style="width:100%;font-size:9px;border:1px solid black;">
        <tr>
            <td style="width:121px;border-right:1px solid black;">Zinc<h6 style='color:red;'>(*)</h6>
            </td>
            <td style="width:30px;text-align:center;border-right:1px solid black;">Zn</td>
            <td style="width:97px;border-right:1px solid black;">NF EN ISO 11885:V2009</td>
            <td style="width:130px;border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->Zn)) {
                        echo '-';
                    } elseif ($analyse_data->Zn < 0.01) {
                        echo 'inf à 0.010 (mg/l)';
                    } else {
                        echo Archivos::ft3nb($analyse_data->Zn, true), ' (mg/l)';
                    }
                @endphp
            </td>
            <td style="width:48px;text-align:center;border-right:1px solid black;">0.01 à 2</td>
            <td style="z-index:10;padding:0px !important;width:58px;">
                <div style="position:absolute;">
                    @php

                        if (empty($analyse_data->Zn)) {
                            echo ' ';
                        } else {
                            echo Archivos::afficherBar($analyse_data->Zn, 0.01, 2);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td style="border-right:1px solid black;">Cuivre<h6 style='color:red;'>(*)</h6>
            </td>
            <td style="text-align:center;border-right:1px solid black;">Cu</td>
            <td style="border-right:1px solid black;">NF EN ISO 11885:V2009</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->Cu)) {
                        echo '-';
                    } elseif ($analyse_data->Cu < 0.01) {
                        echo 'inf à 0.020 (mg/l)';
                    } else {
                        echo Archivos::ft3nb($analyse_data->Cu, true), ' (mg/l)';
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">0.01 à 0.2</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php
                        if (empty($analyse_data->Cu)) {
                            echo ' ';
                        } else {
                            echo Archivos::afficherBar($analyse_data->Cu, 0.01, 0.2);
                        }
                    @endphp


                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td style="border-right:1px solid black;">Manganèse<h6 style='color:red;'>(*)</h6>
            </td>
            <td style="text-align:center;border-right:1px solid black;">Mn</td>
            <td style="border-right:1px solid black;">NF EN ISO 11885:V2009</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->Mn)) {
                        echo '-';
                    } elseif ($analyse_data->Mn < 0.01) {
                        echo 'inf à 0.015 (mg/l)';
                    } else {
                        echo Archivos::ft3nb($analyse_data->Mn, true), ' (mg/l)';
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">0.01 à 0.2</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php
                        if (empty($analyse_data->Mn)) {
                            echo ' ';
                        } else {
                            echo Archivos::afficherBar($analyse_data->Mn, 0.01, 0.2);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td style="border-right:1px solid black;">Fer<h6 style='color:red;'>(*)</h6>
            </td>
            <td style="text-align:center;border-right:1px solid black;">Fe</td>
            <td style="border-right:1px solid black;text-align:center;">NF EN ISO 11885:V2009</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->Fe)) {
                        echo '-';
                    } elseif ($analyse_data->Fe < 0.01) {
                        echo 'inf à 0.010 (mg/l)';
                    } else {
                        echo Archivos::ft3nb($analyse_data->Fe, true), ' (mg/l)';
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">0.01 à 0.5</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php
                        if (empty($analyse_data->Fe)) {
                            echo ' ';
                        } else {
                            echo Archivos::afficherBar($analyse_data->Fe, 0.01, 0.5);
                        }
                    @endphp
                </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td style="border-right:1px solid black;">Bore</td>
            <td style="text-align:center;border-right:1px solid black;">B</td>
            <td style="border-right:1px solid black;text-align:center;">NF EN ISO 11885:V2009</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->B)) {
                        echo '-';
                    } elseif ($analyse_data->Zn < 0.01) {
                        echo 'inf à 0.100 (mg/l)';
                    } else {
                        echo Archivos::ft3nb($analyse_data->B, true), ' (mg/l)';
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">0.7 à 3</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php
                        if (empty($analyse_data->B)) {
                            echo ' ';
                        } else {
                            echo Archivos::afficherBar($analyse_data->B, 0.7, 3);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
    </table>
    <p style="font-size:9px;text-align:left;">Echantillon prélevé et conservé selon les recommondations de la norme NF
        ISO 5667-1.<br>
        L'échantillonnage est réalisé selon les recommandations de la norme NF ISO 5667-3 relatives aux eaux naturelles
        et souterraines.<br>
        La technique d'échantillonnage utilisée : Echantillonnage ponctuel.
        Si l'échantillonnage est assuré par le client, le laboratoire dégage toute résponsablité par rapport à la
        technique d'échantillonnage utilisée.<br>
        Le présent rapport ne concerne que les objets soumis à l'essai. Il comporte une seule page et ne doit pas être
        reproduit partiellement sans
        l’approbation du laboratoire. Seule une reproduction sous sa forme intégrale est autorisée.<br>
        Les échantillons sont conservés au Laboratoire 7 jours maximum après communication des résultats aux
        clients.<br>
        Les avis et interprétations contenus dans ce rapport ne sont pas couverts par l'accréditation.</p>
    <p class="h4" style="font-size:9px;text-align:left"> : Paramètre accrédité</p>
    <img src="{{ Archivos::imagenABase64(public_path('img/signature.png')) }}" style="margin-top:20px" width="500px">
    <p class="text" style="font-size:8px;">FIN DE PAGE<br>
        ------------------------------<br>
        Laboratoire LACQ <br>
        AGROPOLIS-GI5 GI6, Commune de Mejjate, Meknes, Maroc <br>
        Tel:+212 535 52 94 01 <br>
        contact.lacq@elephant-vert.com <br>
    </p>
</body>

</html>
