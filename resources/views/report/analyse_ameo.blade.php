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
       table{
            border-collapse:collapse;
           
           
        }

        .head {
            text-align: left;
            background-color: #b5feb4 !important;
           
           
        }

        .bordered {
            padding: 1px 5px;
            border: 1px solid black;
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

    </style>


    @php use App\Custom\Archivos; @endphp
    <table border="0">
        <tr>
            <td><img src="{{ Archivos::imagenABase64(public_path('img/LacqLogo.jpg')) }}" width="160px" height="40px">
                <br>
                <label style="font-size:9px;margin:0;padding:0;">Laboratoire d'Analyses et Contrôle<br> Qualité ELEPHANT
                    VERT <br>MAROC S.A. </label>
                    <br>
                    <label style="color:green;font-size:11px;">LAB03F63-Vd.</label>
            </td>
            <td>
                <h5 style="color:green;text-align:center; font-size:14px;">RAPPORT D'ANALYSE AMENDEMENT ORGANIQUE ET SUPPORT DE CULTURE
                    </br>N° {{$commande_info->code_commande }}</h5>
            </td>
            <td style="text-align:right;vertical-align:top"><img src="{{ Archivos::imagenABase64(public_path('img/semac.png')) }}"
                    width="90px" height="40px"><br>
                <h6 style="color:brown;font-size:10px;margin:0;padding:0;text-align:right;">N° MCI/CE AL 93/2018</h6>
                </td>
        </tr>
    </table>

    <table style="width:100%;font-size:10px;margin-top:">

        <tr>
            <th class="head bordered" style="width:125px;">Client :</th>
            <td class=" bordered">{{ $client_info->exploiteur }}</td>
            <th class=" head bordered" style="width:110px;">Référence d'échantillon:</th>
            <td class="bordered">{{ $commande_info->code_commande}}</td>
        </tr>

        <tr>
            <th class="head bordered" style="width:125px;">N° RC :</th>
            <td class="bordered">{{ $client_info->cin_rc }}</td>
            <th class="head bordered" style="width:110px;">Date de prélèvement:</th>
            <td class="bordered">{{$commande_info->date_prelevement }} </td>
        </tr>

        <tr>
            <th class="head bordered" style="width:125px;">Adresse :</th>
            <td class="bordered">{{ $client_info->address }}</td>
            <th class="head bordered" style="width:110px;">Date de réception:</th>
            <td class="bordered">{{ $commande_info->date_reception }}</td>
        </tr>

        <tr>
            <th class="head bordered" style="width:125px;">Lieu de prélèvement:</th>
            <td class="bordered">{{ $commande_info->lieu }}</td>
            <th class="head bordered" style="width:110px;">Date d'analyse :</th>
            <td class="bordered"></td>
        </tr>

        <tr>
            <th class="head bordered" style="width:125px;">Prélevé par:</th>
            <td class="bordered">{{ $commande_info->commercial}}</td>
            <th class="head bordered" style="width:110px;">Date d'édition :</th>
            <td class="bordered" >{{ $commande_info->date_edition }}</td>
        </tr>

        <tr>
            <th class="head bordered" style="width:125px;">Référence client:</th>
            <td class="bordered" colspan="3">{{ $commande_info->ref_client  }}</td>
        </tr>
    </table>

    <table style="width:100%;font-size:12px;margin-top:" >
        <tr>
          <th class="head bordered" style="text-align:center">RENSEIGNEMENTS RELATIFS A L'ECHANTILLON</th>
        </tr>

    </table>

        <table style="width:100%;font-size:12px;margin-top:; border:1px solid black; background:rgb(230, 230, 230);" >
            <tr >
              <th style="width:180px;border:1px solid black;height:150px"><label style="text-align:top;color:green">Photo prise à la réception</label>
                <img src="{{ Archivos::imagenABase64(public_path('img/semac.png')) }}"
              width="150px" height="120px" style="margin-top:5;border:0.01em solid black"></th>
              <th class="bordred" style="height:150px ">Observations :</label></th> 
             
            </tr>
         
         
          </table>
         
     
     
</body>
</html>