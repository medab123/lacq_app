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
                <label style="color:green;font-size:11px;">LAB03F62-Vd</label>
            </td>
            <td>
                <h5 style="color:green;text-align:center; font-size:14px;">RAPPORT D'ANALYSE DE SOL <br>N° EAP
                    {{ $commande_info->code_commande }} <br>
                    EXTRAIT AQUEUX EN POIDS 1/5</h5>
            </td>
            <td style="text-align:right;vertical-align:top;"><img
                    src="{{ Archivos::imagenABase64(public_path('img/semac.png')) }}" width="90px" height="40px"><br>
                <h6 style="color:brown;font-size:10px;margin:0;padding:0;text-align:right;">N° MCI/CE AL 93/2018 </h6>
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
            <th class="head bordered" style="width: 150px;">Référence client :</th>
            <td class="bordered">{{ $commande_info->ref_client }}</td>
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
    <table style="width:100%;font-size:10px;margin-top:;border:1px solid black;">
        <tr class="head bordered">
            <th style="width:151px;">Paramètres</th>
            <th style="width:39px;">Sym.</th>
            <th class=" bordered" style="width:50px;">Unité</th>
            <th class=" bordered" style="width:91px;">Résultats</th>
            <th class=" bordered" style="width:70px;">Niveau souhaitable</th>
            <th class=" bordered"> Appréciation</th>
        </tr>
    </table>
    <table style="width:100%;font-size:10px;">
        <tr style="font-size:10px;">
            <td style="width:114px;"></td>
            <td style="width:30px;"></td>
            <td style="width:42px;"></td>
            <td style=" width:162px;"></td>

            <td style="width:70px;text-align:center; color:orange; font-weight: 900;">Faible</td>
            <td style="width:70px;text-align:center; color:green; font-weight: 900;">Satisfaisant</td>
            <td style="text-align:center; color:red; font-weight: 900;">Elevé</td>
        </tr>
    </table>

    <table style="width:100%;font-size:9px;border:1px solid black;">
        <tr>
            <td style="width:123px;">pH H2O à 25°C <h6 style='color:red;'>(*)</h6>
            </td>
            <td style="width:30px;text-align:center;border-right:1px solid black;"></td>
            <td style="width:42px;border-right:1px solid black;text-align:center;">unité pH</td>
            <td style="width:80px;border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->PH)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->PH, true);
                    }
                @endphp
            </td>
            <td style="width:60px;text-align:center;border-right:1px solid black;">6.0 à 6.5</td>
            <td style="z-index:10;padding:0px !important;width:90px;">
                <div style="position:absolute;padding:0px;margin:0px;">
                    @php
                        if (empty($analyse_data->PH)) {
                            echo '-';
                        } else {
                            Archivos::EAP($analyse_data->PH, 6.0, 6.5);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td>Conductivité éléctrique à 25°C <h6 style='color:red;'>(*)</h6>
            </td>
            <td style="text-align:center;border-right:1px solid black;"></td>
            <td style="border-right:1px solid black;text-align:center;">mS/cm </td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->EC)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->EC, true);
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">inf à 0.40</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php
                        if (empty($analyse_data->EC)) {
                            echo '-';
                        } else {
                            Archivos::EAP($analyse_data->EC, 0, 4);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td>Salinité total</td>
            <td style="text-align:center;border-right:1px solid black;"></td>
            <td style="border-right:1px solid black;text-align:center;">mg/kg </td>
            <td style="border-right:1px solid black;text-align:center;">@php
                echo Archivos::ft3nb($analyse_data->EC, true) * 3000 . ' à ' . Archivos::ft3nb($analyse_data->EC, true) * 4000;
            @endphp</td>
            <td style="text-align:center;border-right:1px solid black;">inf à 1600</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php
                        if (empty($analyse_data->EC)) {
                            echo '-';
                        } else {
                            echo Archivos::EAP($analyse_data->EC, Archivos::ft3nb($analyse_data->EC * 3000, true), Archivos::ft3nb($analyse_data->EC * 4000), true);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>

    </table>
    <table style="width:100%;font-size:10px;margin-top:;border:1px solid black;">

        <tr>
            <td style="width:123px;">Matière organqiue</td>
            <td style="width:30px;text-align:center;border-right:1px solid black;">M.O</td>
            <td style="width:42px;border-right:1px solid black;text-align:center;">g/kg</td>
            <td style="width:80px;border-right:1px solid black;text-align:center;">
                @php

                    if (empty($analyse_data->C_O)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->C_O, false) * 1.72;
                    }
                @endphp

            </td>
            <td style="width:60px;text-align:center;border-right:1px solid black;">20.0 à 30.0</td>
            <td style="z-index:10;padding:0px !important;width:90px;">
                <div style="position:absolute;padding:0px;margin:0px;">
                    @php
                        if (empty($analyse_data->C_O)) {
                            echo ' ';
                        } else {
                            echo Archivos::EAP($analyse_data->C_O, 20.0, 30.0);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td>Azote total </td>
            <td style="text-align:center;border-right:1px solid black;">NTK</td>
            <td style="border-right:1px solid black;text-align:center;">g/kg</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->NT)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->NT, true);
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">2.0 à 3.0</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php

                        if (empty($analyse_data->NT)) {
                            echo ' ';
                        } else {
                            echo Archivos::EAP($analyse_data->NT, 2.0, 3.0);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td>Rapport C/N </td>
            <td style="text-align:center;border-right:1px solid black;">C/N</td>
            <td style="border-right:1px solid black;text-align:center">-</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->C_O)) {
                        echo '-';
                    } else {
                        $X = Archivos::ft3nb($analyse_data->C_O / $analyse_data->NT, true);
                        echo $X;
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">8.0 à 12.0</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">

                    @php
                        $X = Archivos::ft3nb($analyse_data->NT, true) / Archivos::ft3nb($analyse_data->C_O, true);
                        echo Archivos::EAP($X, 8.0, 12.0);
                    @endphp

                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>

    </table>
    <table style="width:100%;font-size:10px;">
        <tr>
            <th style="border:0px;text-align:left;color:green"><strong>Bilan ionique</strong></th>
        </tr>
    </table>
    <table style="width:100%;font-size:10px;margin-top:;border:1px solid black;">

        <tr>
            <td style="width:123px;">Azote nitrique </td>
            <td style="width:30px;text-align:center;border-right:1px solid black;">NNO3</td>
            <td style="width:42px;border-right:1px solid black;text-align:center;">mg/kg</td>
            <td style="width:80px;border-right:1px solid black;text-align:center;">@php

                if (empty($analyse_data->NO3)) {
                    echo '-';
                } else {
                    echo Archivos::ft3nb($analyse_data->NO3 * 5, true);
                }

            @endphp
            </td>
            <td style="width:60px;text-align:center;border-right:1px solid black;">30.0 à 60.0</td>
            <td style="z-index:10;padding:0px !important;width:90px;">
                <div style="position:absolute;padding:0px;margin:0px;">
                    @php

                        if (empty($analyse_data->NO3)) {
                            echo ' ';
                        } else {
                            echo Archivos::EAP($analyse_data->NO3, 30.0, 60.0);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td>Azote ammoniacal </td>
            <td style="text-align:center;border-right:1px solid black;">NNH4</td>
            <td style="border-right:1px solid black;text-align:center;">mg/kg</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->NH4)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->NH4 * 5, true);
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">10.0 à 20.0</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php

                        if (empty($analyse_data->NH4)) {
                            echo ' ';
                        } else {
                            echo Archivos::EAP($analyse_data->NH4, 10.0, 20.0);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
    </table>
    <table style="width:100%;font-size:10px;margin-top:;border:1px solid black;">

        <tr>
            <td style="width:123px;">Phosphates</td>
            <td style="width:30px;text-align:center;border-right:1px solid black;">PO4</td>
            <td style="width:42px;border-right:1px solid black;text-align:center;">mg/kg</td>
            <td style="width:80px;border-right:1px solid black;text-align:center;">@php
                if (empty($analyse_data->P)) {
                    echo '-';
                } else {
                    echo Archivos::ft3nb(($analyse_data->P * 5 * 31) / 96, true);
                }
            @endphp
            </td>
            <td style="width:60px;text-align:center;border-right:1px solid black;">3.0 à 6.0</td>
            <td style="z-index:10;padding:0px !important;width:90px;">
                <div style="position:absolute;padding:0px;margin:0px;">
                    @php

                        if (empty($analyse_data->P)) {
                            echo ' ';
                        } else {
                            echo Archivos::EAP($analyse_data->P, 3.0, 6.0);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td>Sulfates </td>
            <td style="text-align:center;border-right:1px solid black;">SO4</td>
            <td style="border-right:1px solid black;text-align:center;">mg/kg</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->SO4)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->SO4 * 5, true);
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">35 à 120</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php

                        if (empty($analyse_data->SO4)) {
                            echo ' ';
                        } else {
                            echo Archivos::EAP($analyse_data->SO4, 35, 120);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td>Chlorure </td>
            <td style="text-align:center;border-right:1px solid black;">Cl</td>
            <td style="border-right:1px solid black;text-align:center;">mg/kg</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->Cl)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->Cl * 5, true);
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">inf à 100</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php

                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td>Bicarbonates</td>
            <td style="text-align:center;border-right:1px solid black;">HCO3</td>
            <td style="border-right:1px solid black;text-align:center;">mg/kg</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->HCO3)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->HCO3 * 5, true);
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">100 à 360 </td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php

                        if (empty($analyse_data->HCO3)) {
                            echo ' ';
                        } else {
                            echo Archivos::EAP($analyse_data->HCO3, 100, 360);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
    </table>
    <table style="width:100%;font-size:10px;margin-top:;border:1px solid black;">

        <tr>
            <td style="width:123px;">Sodium</td>
            <td style="width:30px;text-align:center;border-right:1px solid black;">Na</td>
            <td style="width:42px;border-right:1px solid black;text-align:center;">mg/kg</td>
            <td style="width:80px;border-right:1px solid black;text-align:center;">@php

                if (empty($analyse_data->Na)) {
                    echo '-';
                } else {
                    echo Archivos::ft3nb($analyse_data->Na * 5, true);
                }

            @endphp
            </td>
            <td style="width:60px;text-align:center;border-right:1px solid black;">inf à 100</td>
            <td style="z-index:10;padding:0px !important;width:90px;">
                <div style="position:absolute;padding:0px;margin:0px;">
                    @php

                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td>Potassium </td>
            <td style="text-align:center;border-right:1px solid black;">K</td>
            <td style="border-right:1px solid black;text-align:center;">mg/kg</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->K)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->K * 5, true);
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
                            echo Archivos::EAP($analyse_data->K, 50, 150);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td>Calcium </td>
            <td style="text-align:center;border-right:1px solid black;">Ca</td>
            <td style="border-right:1px solid black;text-align:center;">mg/kg</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->Ca)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->Ca * 5, true);
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">70 à 120</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php

                        if (empty($analyse_data->Ca)) {
                            echo ' ';
                        } else {
                            echo Archivos::EAP($analyse_data->Ca, 70, 120);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td>Magnésium </td>
            <td style="text-align:center;border-right:1px solid black;">Mg</td>
            <td style="border-right:1px solid black;text-align:center;">mg/kg</td>
            <td style="border-right:1px solid black;text-align:center;" @php
                if (empty($analyse_data->Mg)) {
                    echo '-';
                } else {
                    echo Archivos::ft3nb($analyse_data->Mg * 5, true);
                }
            @endphp</td>
            <td style="text-align:center;border-right:1px solid black;">20 à 50</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php

                        if (empty($analyse_data->Mg)) {
                            echo ' ';
                        } else {
                            echo Archivos::EAP($analyse_data->Mg, 20, 50);
                        }
                    @endphp
                </div>
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
    <table style="width:100%;font-size:10px;margin-top:;border:1px solid black;">

        <tr>
            <td style="width:123px;">Zinc</td>
            <td style="width:30px;text-align:center;border-right:1px solid black;">Zn</td>
            <td style="width:42px;border-right:1px solid black;text-align:center;">mg/kg</td>
            <td style="width:80px;border-right:1px solid black;text-align:center;">@php

                if (empty($analyse_data->Zn)) {
                    echo '-';
                } else {
                    echo Archivos::ft3nb($analyse_data->Zn, true);
                }

            @endphp
            </td>
            <td style="width:60px;text-align:center;border-right:1px solid black;">2.0 à 5.0</td>
            <td style="z-index:10;padding:0px !important;width:90px;">
                <div style="position:absolute;padding:0px;margin:0px;">
                    @php

                        if (empty($analyse_data->Zn)) {
                            echo ' ';
                        } else {
                            echo Archivos::EAP($analyse_data->Zn, 2.0, 5.0);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td>Cuivre <h6 style='color:red;'>(*)</h6>
            </td>
            <td style="text-align:center;border-right:1px solid black;">Cu</td>
            <td style="border-right:1px solid black;text-align:center;">mg/kg</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->Cu)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->Cu, true);
                    }
                @endphp
            </td>
            <td style="text-align:center;border-right:1px solid black;">2.0 à 5.0</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php

                        if (empty($analyse_data->Cu)) {
                            echo ' ';
                        } else {
                            echo Archivos::EAP($analyse_data->Cu, 2.0, 5.0);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td>Manganèse <h6 style='color:red;'>(*)</h6>
            </td>
            <td style="text-align:center;border-right:1px solid black;">Mn</td>
            <td style="border-right:1px solid black;text-align:center;">mg/kg</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->Mn)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->Mn, true);
                    }
                @endphp</td>
            <td style="text-align:center;border-right:1px solid black;">5.0 à 20.0</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php

                        if (empty($analyse_data->Mn)) {
                            echo ' ';
                        } else {
                            echo Archivos::EAP($analyse_data->Mn, 5.0, 20.0);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td>Fer <h6 style='color:red;'>(*)</h6>
            </td>
            <td style="text-align:center;border-right:1px solid black;">Fe</td>
            <td style="border-right:1px solid black;text-align:center;">mg/kg</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->Fe)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->Fe, true);
                    }
                @endphp</td>
            <td style="text-align:center;border-right:1px solid black;">20 à 50</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php

                        if (empty($analyse_data->Fe)) {
                            echo ' ';
                        } else {
                            echo Archivos::EAP($analyse_data->Fe, 20, 50);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
        <tr>
            <td>Bore </td>
            <td style="text-align:center;border-right:1px solid black;">B</td>
            <td style="border-right:1px solid black;text-align:center;">mg/kg</td>
            <td style="border-right:1px solid black;text-align:center;">
                @php
                    if (empty($analyse_data->Bore)) {
                        echo '-';
                    } else {
                        echo Archivos::ft3nb($analyse_data->Bore, true);
                    }
                @endphp</td>
            <td style="text-align:center;border-right:1px solid black;">0.3 à 0.5</td>
            <td style="z-index:10;padding:0px !important;">
                <div style="position:absolute;">
                    @php

                        if (empty($analyse_data->Bore)) {
                            echo ' ';
                        } else {
                            echo Archivos::EAP($analyse_data->Bore, 0.3, 0.5);
                        }
                    @endphp
                </div>
            </td>
            <td style="background:#b5feb4;"></td>
            <td></td>
        </tr>
    </table>
    <table style="width:100%;font-size:10px;">
        <tr>
            <th style="border:0px;text-align:left;color:green"><strong>EQUILIBRES NUTRITIONNELS</strong></th>
        </tr>
    </table>
    <table style="width:100%;font-size:10px;margin-top:;border:1px solid black;">
        <tr>
            <th
                style="border-bottom:1px solid black;background:rgb(230, 230, 230);width:193px;z-index:10;padding:0px !important;">
                <div style="position:absolute;"> Equilibres /Stades physiologiques</div>
            </th>
            <th
                style="border-bottom:1px solid black;background:rgb(230, 230, 230);width:61px;border-right:1px solid black;">
            </th>
            <th
                style="border-bottom:1px solid black;background:rgb(230, 230, 230);text-align:center;width:96px;border-right:1px solid black;">
                Croisssance</th>
            <th
                style="border-bottom:1px solid black;background:rgb(230, 230, 230);text-align:center;border-right:1px solid black;width:171px;">
                Mise en Fruit</th>
            <th
                style="border-bottom:1px solid black;background:rgb(230, 230, 230);text-align:center;border-right:1px solid black;">
                Maintien végétatif</th>
        </tr>
        <tr>
            <td>NO3 / NH4</td>
            <!-- ('=valeur NNO3*62/15)/(Valeur NNH4*18/14) -->
            <td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>

            @php
                // valeur NNO3*62/15)/(Valeur NNH4*18/14)
                $X = (Archivos::ft3nb($analyse_data->NO3, true) * 62) / 15 / ((Archivos::ft3nb($analyse_data->NH4, true) * 18) / 14);

                if ($X < 2.5) {
                    echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black; color:red;">Défavorable</td>';
                } else {
                    echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>';
                }
                //
                if ($X < 3) {
                    echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black; color:red;">Défavorable</td>';
                } else {
                    echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>';
                }
                //
                if ($X < 3) {
                    echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black; color:red;">Défavorable</td>';
                } else {
                    echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>';
                }

                //''=(NNO3+NNH4)/(Ca*1,4)

            @endphp
        </tr>
        <tr>
            <td>N / CaO</td>
            <td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>
            @php
                //(NNO3+NNH4)/(Ca*1,4)
                $X = (Archivos::ft3nb($analyse_data->NO3, true) * 5 + Archivos::ft3nb($analyse_data->NH4, true) * 5) / (Archivos::ft3nb($analyse_data->Ca, true) * 1.4 * 5);
                if ($X == 0) {
                    echo $X;
                } else {
                    if ($X < 0.4 || $X > 0.15) {
                        echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black; color:red;">Défavorable</td>';
                    } else {
                        echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>';
                    }
                    //
                    if ($X > 0.65) {
                        echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black; color:red;">Défavorable</td>';
                    } else {
                        echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>';
                    }
                    //
                    if ($X > 0.65) {
                        echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black; color:red;">Défavorable</td>';
                    } else {
                        echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>';
                    }
                }

            @endphp
        </tr>
        <tr>
            <td>K2O / CaO</td>
            <td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>
            @php
                //'=(K*1,2)/(Ca*1,4)
$X = (Archivos::ft3nb($analyse_data->K, true) * 1.2 * 5) / (Archivos::ft3nb($analyse_data->Ca, true) * 1.4 * 5);
if ($X == 0) {
    echo $X;
} else {
    if ($X > 0.9) {
        echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black; color:red;">Défavorable</td>';
    } else {
        echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>';
    }
    //
    if ($X < 0.6) {
        echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black; color:red;">Défavorable</td>';
    } else {
        echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>';
    }
    //
    if ($X < 0.3 || $X > 1.6) {
        echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black; color:red;">Défavorable</td>';
    } else {
        echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>';
                    }
                }

            @endphp
        </tr>
        <tr>
            <td>K2O / MgO</td>
            <td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>
            @php
                //(K*1,2)/(Mg*1,66)

                $X = (Archivos::ft3nb($analyse_data->K, true) * 1.2 * 5) / (Archivos::ft3nb($analyse_data->Mg, true) * 1.66 * 5);
                if ($X == 0) {
                    echo $X;
                } else {
                    if ($X > 2.5) {
                        echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black; color:red;">Défavorable</td>';
                    } else {
                        echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>';
                    }
                    //
                    if ($X < 2) {
                        echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black; color:red;">Défavorable</td>';
                    } else {
                        echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>';
                    }
                    //
                    if ($X < 0.72 || $X > 5.45) {
                        echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black; color:red;">Défavorable</td>';
                    } else {
                        echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>';
                    }
                }

            @endphp

        </tr>
        <tr>
            <td>CaO / MgO</td>
            <td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>

            @php
                //(Ca*1,4)/(Mg*1,66)
                $X = (Archivos::ft3nb($analyse_data->Ca, true) * 1.4 * 5) / (Archivos::ft3nb($analyse_data->Mg, true) * 1.66 * 5);
                if ($X == 0) {
                    echo $X;
                } else {
                    if ($X < 1.5) {
                        echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black; color:red;">Défavorable</td>';
                    } else {
                        echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>';
                    }
                    //
                    if ($X < 1.18) {
                        echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black; color:red;">Défavorable</td>';
                    } else {
                        echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>';
                    }

                    if ($X < 0.18) {
                        echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black; color:red;">Défavorable</td>';
                    } else {
                        echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>';
                    }
                }

            @endphp
            echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black; color:red;">
                Défavorable</td>';
            }
            else {
            echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>';
            }

            if ($X<0.18){
                echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black; color:red;">Défavorable</td>'
                ; } else {
                echo '<td style="text-align:center;border-right:1px solid black;border-left:1px solid black;">-</td>' ;
                } } @endphp>>>>>>> 156b2d26e0acd6b388de867bfda2e9897b67af72
