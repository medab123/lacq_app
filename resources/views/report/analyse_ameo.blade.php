
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
          .h4::before {
              content: "*";
              color: red
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
  h6{
  display:inline !important;
  font-family: DejaVu Sans;
  }
      </style>
      @php use App\Custom\Archivos; @endphp
      <table border="0">
          <tr>
              <td><img src="{{ Archivos::imagenABase64(public_path('img/LacqLogo.jpg')) }}" width="130px" height="40px">
                  <br>
                  <label style="font-size:9px;margin:0;padding:0;">Laboratoire d'Analyses et Contrôle<br> Qualité ELEPHANT
                      VERT MAROC S.A. </label>
                      <br>
                      <label style="color:green;font-size:11px;">LAB03F63-Ve</label>
              </td>
              <td>
                  <h5 style="color:green;text-align:center; font-size:12px;">RAPPORT D'ANALYSE AMENDEMENT ORGANIQUE ET SUPPORT DE CULTURE
                      <br>N° PO {{$commande_info->code_commande }} </h5>
              </td>
              <td style="text-align:right;vertical-align:top"><img src="{{ Archivos::imagenABase64(public_path('img/semac.png')) }}"
                      width="80px" height="40px"><br>
                      <label style="color:brown;font-size:11px;margin:0;padding:0;text-align:right;">N° MCI/CE AL 93/2018</label>
              </td>
          </tr>
      </table>

      <table style="width:100%;font-size:9px;margin-top:">
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
              <td class="bordered">@php echo Archivos::costomDateFormate($commande_info->date_prelevement) @endphp</td>
          </tr>
          <tr>
              <th class="head bordered" style="width:125px;">Adresse :</th>
              <td class="bordered">{{ $client_info->address }}</td>
              <th class="head bordered" style="width:110px;">Date de réception:</th>
              <td class="bordered">@php echo Archivos::costomDateFormate($commande_info->date_reception) @endphp</td>
          </tr>
          <tr>
              <th class="head bordered" style="width:125px;">Lieu d'exécution des essais :</th>
              <td class="bordered">{{ $commande_info->lieu}}</td>
              <th class="head bordered" style="width:110px;">Date d'analyse :</th>
              <td class="bordered">@php echo Archivos::costomDateFormate($commande_info->date_reception) @endphp</td>
          </tr>
          <tr>
              <th class="head bordered" style="width:125px;">Dossier suivi par :</th>
              <td class="bordered">{{ $commande_info->commercial}}</td>
              <th class="head bordered" style="width:110px;">Date d'édition :</th>
              <td class="bordered" >@php echo Archivos::costomDateFormate($commande_info->date_edition ) @endphp</td>
          </tr>
          <tr>
              <th class="head bordered" style="width:125px;">Référence client:</th>
              <td class="bordered">{{ $commande_info->ref_client}}</td>
              <th class="head bordered" style="width: 150px;">Quantité récéptionnée:</th>
              <td class="bordered">{{ $commande_info->quantite }}</td> 
          </tr>
      </table>
    
      <table style="width:100%;font-size:9px;margin-top:" >
          <tr>
            <th class="head bordered" style="text-align:center">RENSEIGNEMENTS RELATIFS A L'ECHANTILLON</th>
          </tr>
      </table>
      
      @php
      $etat=$analyse_data->Etat;
        if(strtolower($etat)=="p")
        {
          $etat="présence";
        }
        elseif(strtolower($etat)=="a")
        $etat="absence";
        @endphp
  
          <table style="width:100%;font-size:9px;margin-top:;border:1px solid black;background:rgb(230, 230, 230);" >
              <tr >
                <th style="width:180px;border:1px solid black;height:150px"><label style="text-align:top;color:green">Photo prise à la réception</label>
                  <img src='{{ Archivos::imagenABase64(public_path("img/commande/ameo/{$commande_info->img_1}")) }}'
                width="150px" height="120px" style="margin-top:5;border:0.01em solid black"></th>
                <th class="bordred" style="text-align:left;vertical-align:top;color:green;padding:8px 0px 0px 5px;">Observations :<br>
               <p> <label style="text-align:top;color:black;font-size:9px;">Echantillon reçu dans un emballage en plastique fermé en <?php echo "$etat" ?> des corps étrangers
                                                                            susceptibles d’avoir une influence 
                                                                            sur la qualité des analyses .(Annexe page 2)<br>
                  <p style="text-align:top;color:black;font-size:9px;"> L'échantillon sera conservé au Laboratoire 4 jours maximum après communication des résultats.</p><br>
                  <p style="text-align:top;color:black;font-size:9px;">Quantité de l'échantillon réceptionné est suffisante.</p></label></p>
              </th>             
              </tr>
            </table>
           
            <table style="width:100%;font-size:9px;margin-top:;border:1px solid black;" >
               <tr>
                  <th class="head bordered" style="text-align:center" colspan="7">CARACTERISATION DE LA VALEUR AGRONOMIQUE</th>
              </tr>
              <tr style="background:rgb(230, 230, 230);">
                    <th class=" bordered" style="width:153px;" rowspan="2">Paramètres</th>
                    <th class=" bordered" style="width:22px;"rowspan="2">Sym.</th>
                    <th class=" bordered" style="width:18px;"rowspan="2">Unité</th>
                    <th class=" bordered" style="width:105px;"rowspan="2">Méthodes</th>
                    <th class=" bordered" colspan="2" >Résultats</th>
                    <th class=" bordered" rowspan="2">Observations et paramètres calculés</th>
              </tr>
              <tr style="background:rgb(230, 230, 230);">
                    <th class=" bordered" style="width:60px;text-align:center;">Sec</th>
                    <th class=" bordered" style="width:60px;text-align:center;">Brut</th>
              </tr>
      </table>
      <table style="width:100%;font-size:9px;" >
          <tr>
            <th style="border:0px;text-align:left;color:green">ANALYSE SUR PRODUIT BRUT</th>
          </tr>
          </table>
  
          <table style="width:100%;font-size:9px;border:1px solid black;" >
          <tr>
                  <td style="width:160px;border-right:1px solid black;">Fraction de refus dépassant 40 mm</td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;">FR</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;">%</td> 
                  <td style="width:113px;border-right:1px solid black;">NF EN 13040:V2007</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"></td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(empty($analyse_data->Refus)){
                        echo "-";
                    }
                    elseif ($analyse_data->Refus < 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo $analyse_data->Refus;
                    } 
                    @endphp </td>
                  <td style="border-right:1px solid black;"></td>     
          </tr>
          <tr>
                  <td style="width:160px;border-right:1px solid black;">Matière sèche à 103°C <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;">MS</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;">%</td>
                  <td style="width:113px;border-right:1px solid black;">NF EN 13040:V2007</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"></td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(empty(round($analyse_data->MS,1))){
                        echo "-";
                    }
                    elseif (round($analyse_data->MS,1) < 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo number_format($analyse_data->MS, 1);
                    }
                    @endphp </td>      
                  <td style="border-right:1px solid black;">@php 
                  echo "Humidité: ", number_format(100 - $analyse_data->MS,1);
                    @endphp </td>
              </tr>  
              <tr>
                  <td style="width:160px;border-right:1px solid black;">Masse volumique</td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;">M/V</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;">Kg/m3</td>
                  <td style="width:113px;border-right:1px solid black;">NF EN 13040:V2007</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"></td>
                  <td  style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(empty($analyse_data->M_V)){
                        echo "-";
                    }
                    elseif ($analyse_data->M_V < 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo number_format($analyse_data->M_V, 1);
                    }
                    @endphp </td>
                  <td style="border-right:1px solid black;font-size:9px;;"></td>
              </tr>
              <tr>
                  <td style="width:160px;border-right:1px solid black;">Potentiel hydrogène</td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;">pH</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;">-</td>
                  <td style="width:113px;border-right:1px solid black;">NF EN 13040:V2007</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"></td>
                  <td style="width:60px;text-align:center;border-right:1px solid black;"> @php
                    if(empty($analyse_data->PH)){
                        echo "-";
                    }
                    elseif ($analyse_data->PH < 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo number_format($analyse_data->PH, 1);
                    }
                    @endphp </td>
                  <td style="border-right:1px solid black;"> @php
                  if(empty($analyse_data->PH)){
                        echo " ";
                    }
                    elseif($analyse_data->PH<5)
                    {
                    echo "Produit extrèmement acide";
                    }
                    elseif ($analyse_data->PH<6) {
                        echo "Produit très acide";
                    }
                    elseif ($analyse_data->PH<6.6) {
                        echo "Produit acide";
                    }
                    elseif ($analyse_data->PH<7.4) {
                        echo "Produit pratiquement neutre";
                    }
                    elseif ($analyse_data->PH<7.8) {
                        echo "Produit légèrement alcalin";
                    }
                    elseif ($analyse_data->PH>8) {
                        echo "Produit alcalin";
                    }
                    @endphp </td>
              </tr>
              <tr>
                  <td style="width:160px;border-right:1px solid black;">Conductivité électrique</td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;">EC</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;">mS/cm</td>
                  <td style="width:113px;border-right:1px solid black;">NF EN 13038:V2000</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"></td>
                  <td style="width:60px;text-align:center;border-right:1px solid black;"> @php
                    if(empty(round($analyse_data->EC,1))){
                        echo "-";
                    }
                    elseif (round($analyse_data->EC,1)< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo number_format($analyse_data->EC, 1);
                    }
                    @endphp </td>
                  <td style="border-right:1px solid black;"></td>
              </tr>
      </table>
      <table style="width:100%;font-size:9px;" >
          <tr>
            <th style="border:0px;text-align:left;color:green">COMPOSITION DU PRODUIT</th>
          </tr>
          </table>
          <table style="width:100%;font-size:9px;border:1px solid black;" >
          <tr>
                  <td style="width:160px;border-right:1px solid black;">Matière organique <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;">M.O</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;">%</td>
                  <td style="width:113px;border-right:1px solid black;">NF EN 13039:V2011</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(empty(round($analyse_data->M_O,1))){
                        echo "-";
                    }
                    elseif (round($analyse_data->M_O,1)< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo number_format($analyse_data->M_O, 1);
                    }
                    @endphp </td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(empty(round($analyse_data->M_O * ($analyse_data->MS/100),1))){
                        echo "-";
                    }
                    elseif (round($analyse_data->M_O * ($analyse_data->MS/100),1)< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo number_format($analyse_data->M_O * ($analyse_data->MS/100),1);
                    }
                    @endphp </td> 

                  <td style="border-right:1px solid black;">@php
                  if(empty(round($analyse_data->M_O,1))){
                        echo " ";
                    }
                    else {
                        echo "Carb.org en % ms: ", number_format($analyse_data->M_O/1.72, 1);
                    }
                    @endphp
                    </td>
          </tr>
          <tr>
                  <td style="width:160px;border-right:1px solid black;">Azote total Kjeldahl <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;">NTK</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;">%</td>
                  <td style="width:113px;border-right:1px solid black;">NF EN 13654-1:V2002/<br>NF EN 11261:V1995</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(empty(round($analyse_data->NTK,1))){
                        echo "-";
                    }
                    elseif (round($analyse_data->NTK,1)< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo round($analyse_data->NTK,1);
                    } 
                    @endphp </td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(empty(round($analyse_data->NTK * ($analyse_data->MS/100),1))){
                        echo "-";
                    }
                    elseif (round($analyse_data->NTK * ($analyse_data->MS/100),1)< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo round($analyse_data->NTK * ($analyse_data->MS/100),1);
                    } 
                    @endphp </td>  
                  <td style="border-right:1px solid black;"> @php
                    if(empty(round($analyse_data->M_O,1))){
                        echo " ";
                    }
                    else {
                    echo "Rapport C/N: " ,  ($analyse_data->NTK == 0)  ? "_": round($analyse_data->M_O/$analyse_data->NTK,2);
                }
                      @endphp </td>
          </table><br>
          <table style="width:100%;font-size:9px;border:1px solid black;" >
          <tr>
                  <td style="width:160px;border-right:1px solid black;">Phosphore <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;">P2O5</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;">%</td>
                  <td style="width:113px;border-right:1px solid black;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(empty(round($analyse_data->PT,1))){
                        echo "-";
                    }
                    elseif (round($analyse_data->PT,1)< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo round($analyse_data->PT,1);
                    } 
                    @endphp </td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(empty(round($analyse_data->PT * ($analyse_data->MS/100),1))){
                        echo "-";
                    }
                    elseif (round($analyse_data->PT * ($analyse_data->MS/100),1)< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo round($analyse_data->PT * ($analyse_data->MS/100),1);
                    } 
                    @endphp</td>
                  <td style="border-right:1px solid black;">NF EN 13650: V2002 eau régale Dos.ICP OES</td>
          </tr>
          <tr>
                  <td style="width:160px;border-right:1px solid black;">Potassium <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;">K2O</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;">%</td>
                  <td style="width:113px;border-right:1px solid black;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(empty(round($analyse_data->K,1))){
                        echo "-";
                    }
                    elseif (round($analyse_data->K,1)< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo round($analyse_data->K,1);
                    } 
                    @endphp </td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(empty(round($analyse_data->K * ($analyse_data->MS/100),1))){
                        echo "-";
                    }
                    elseif (round($analyse_data->K * ($analyse_data->MS/100),1)< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo round($analyse_data->K * ($analyse_data->MS/100),1);
                    } 
                    @endphp </td>
                  <td style="border-right:1px solid black;">NF EN 13650: V2002 eau régale Dos.ICP OES</td>
          </tr>
          <tr>
                  <td style="width:160px;border-right:1px solid black;">Magnésium <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;">MgO</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;">%</td>
                  <td style="width:113px;border-right:1px solid black;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(empty(round($analyse_data->Mg * 1.658, 2))){
                        echo "-";
                    }
                    elseif (round($analyse_data->Mg * 1.658, 2)< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo round($analyse_data->Mg * 1.658, 2);
                    } 
                    @endphp </td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(Archivos::ft3nb(empty(round($analyse_data->Mg * ($analyse_data->MS/100), 2)))){
                        echo "-";
                    }
                    elseif (Archivos::ft3nb(round($analyse_data->Mg * ($analyse_data->MS/100), 2))< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        if(ctype_digit(Archivos::ft3nb(round($analyse_data->Mg * ($analyse_data->MS/100), 2))))
                    {
                        echo Archivos::ft3nb(round($analyse_data->Mg * ($analyse_data->MS/100), 2)). ".0";
                    } else 
                    {
                        echo Archivos::ft3nb(round($analyse_data->Mg * ($analyse_data->MS/100), 2));
                    }
                }
                    
                    @endphp </td>
                  <td style="border-right:1px solid black;">NF EN 13650: V2002 eau régale Dos.ICP OES</td>
          </tr>
          <tr>
                  <td style="width:160px;border-right:1px solid black;">Calcium <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;">CaO</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;">%</td>
                  <td style="width:113px;border-right:1px solid black;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(empty(round($analyse_data->Ca * 1.399, 2))){
                        echo "-";
                    }
                    elseif (round($analyse_data->Ca * 1.399, 2)< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo round($analyse_data->Ca * 1.399, 2);
                    } 
                    @endphp </td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(Archivos::ft3nb(empty(round($analyse_data->Ca* ($analyse_data->MS/100), 2)))){
                        echo "-";
                    }
                    elseif (Archivos::ft3nb(round($analyse_data->Ca * ($analyse_data->MS/100), 2))< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo Archivos::ft3nb(round($analyse_data->Ca * ($analyse_data->MS/100), 2));
                    } 
                    @endphp </td>
                  <td style="border-right:1px solid black;">NF EN 13650: V2002 eau régale Dos.ICP OES</td>
          </tr>
          </table>
          <table style="width:100%;font-size:9px;" >
          <tr>
            <th style="border:0px;text-align:left;color:green">OLEGO-ELEMENTS</th>
          </tr>
          </table>
          <table style="width:100%;font-size:9px;border:1px solid black;" >
          <tr>
                  <td style="width:160px;border-right:1px solid black;">Fer <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;">Fe</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;">mg/kg</td> 
                  <td style="width:113px;border-right:1px solid black;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(empty($analyse_data->Fe)){
                        echo "-";
                    }
                    elseif ($analyse_data->Fe< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo $analyse_data->Fe;
                    } 
                    @endphp </td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(Archivos::ft3nb(empty(round($analyse_data->Fe * ($analyse_data->MS/100), 2)))){
                        echo "-";
                    }
                    elseif (Archivos::ft3nb(round($analyse_data->Fe * ($analyse_data->MS/100), 2))< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo Archivos::ft3nb(round($analyse_data->Fe * ($analyse_data->MS/100), 2));
                    } 
                    @endphp </td>
                  <td style="border-right:1px solid black;">NF EN 13650:V2002 eau régale Dos.ICP OES</td>
          </tr>
              <tr>
                  <td style="width:160px;border-right:1px solid black;">Zinc <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;">Zn</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;">mg/kg</td>
                  <td style="width:113px;border-right:1px solid black;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(empty($analyse_data->Zn)){
                        echo "-";
                    }
                    elseif ($analyse_data->Zn< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo $analyse_data->Zn;
                    } 
                    @endphp </td>
                  <td  style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(Archivos::ft3nb(empty(round($analyse_data->Zn * ($analyse_data->MS/100), 2)))){
                        echo "-";
                    }
                    elseif (Archivos::ft3nb(round($analyse_data->Zn * ($analyse_data->MS/100), 2))< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo Archivos::ft3nb(round($analyse_data->Zn * ($analyse_data->MS/100), 2));
                    } 
                    @endphp </td>
                  <td style="border-right:1px solid black;">NF EN 13650:V2002 eau régale Dos.ICP OES</td>
              </tr>
              <tr>
                  <td style="width:160px;border-right:1px solid black;">Cuivre <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;">Cu</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;">mg/kg</td>
                  <td style="width:113px;border-right:1px solid black;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(empty($analyse_data->Cu)){
                        echo "-";
                    }
                    elseif ($analyse_data->Cu< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo $analyse_data->Cu;
                    } 
                    @endphp</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(Archivos::ft3nb(empty(round($analyse_data->Cu * ($analyse_data->MS/100), 2)))){
                        echo "-";
                    }
                    elseif (Archivos::ft3nb(round($analyse_data->Cu * ($analyse_data->MS/100), 2))< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo Archivos::ft3nb(round($analyse_data->Cu * ($analyse_data->MS/100), 2));
                    } 
                    @endphp </td>
                  <td style="border-right:1px solid black;">NF EN 13650:V2002 eau régale Dos.ICP OES</td>
              </tr>
              <tr>
                  <td style="width:160px;border-right:1px solid black;">Manganèse <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;">Mn</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;">mg/kg</td>
                  <td style="width:113px;border-right:1px solid black;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(empty($analyse_data->Mn)){
                        echo "-";
                    }
                    elseif ($analyse_data->Mn< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo $analyse_data->Mn;
                    } 
                    @endphp </td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(Archivos::ft3nb(empty(round($analyse_data->Mn * ($analyse_data->MS/100), 2)))){
                        echo "-";
                    }
                    elseif (Archivos::ft3nb(round($analyse_data->Mn * ($analyse_data->MS/100), 2))< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo Archivos::ft3nb(round($analyse_data->Mn * ($analyse_data->MS/100), 2));
                    } 
                    @endphp </td>
                  <td style="border-right:1px solid black;">NF EN 13650:V2002 eau régale Dos.ICP OES</td>
              </tr>
      </table>
      <table style="width:100%;font-size:9px;" >
          <tr>
            <th style="border:0px;text-align:left;color:green">ELEMENTS TRACES METALIQUES</th>
          </tr>
          </table>
          <table style="width:100%;font-size:9px;border:1px solid black;" >
          <tr>
                  <td style="width:160px;border-right:1px solid black;">Arsenic</td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;">As</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;">mg/kg</td> 
                  <td style="width:113px;border-right:1px solid black;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                   $fonc=$analyse_data->As;

                    if(empty($analyse_data->As)){
                        echo "-";
                    }
                    elseif ($analyse_data->As< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                     $compt=strlen($fonc)-is_float($fonc);
                     }
                     echo  $compt;
                      echo number_format($fonc,4-$compt);
                    @endphp </td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(Archivos::ft3nb(empty(round($analyse_data->As * ($analyse_data->MS/100), 2)))){
                        echo "-";
                    }
                    elseif (Archivos::ft3nb(round($analyse_data->As * ($analyse_data->MS/100), 2))< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo Archivos::ft3nb(round($analyse_data->As * ($analyse_data->MS/100), 2));
                    } 
                    @endphp </td>
                  <td style="border-right:1px solid black;">NF EN 13650:V2002 eau régale Dos.ICP OES</td>
          </tr>
          <tr >
                  <td style="width:160px;border-right:1px solid black;"> Cadmium <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;">Cd</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;">mg/kg</td>
                  <td style="width:113px;border-right:1px solid black;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(empty($analyse_data->Cd)){
                        echo "-";
                    }
                    elseif ($analyse_data->Cd< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo $analyse_data->Cd;
                    } 
                    @endphp </td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(Archivos::ft3nb(empty(round($analyse_data->Cd * ($analyse_data->MS/100), 2)))){
                        echo "-";
                    }
                    elseif (Archivos::ft3nb(round($analyse_data->Cd * ($analyse_data->MS/100), 2)) < 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo Archivos::ft3nb(round($analyse_data->Cd * ($analyse_data->MS/100), 2));
                    } 
                    @endphp </td>
                  <td style="border-right:1px solid black;">NF EN 13650:V2002 eau régale Dos.ICP OES</td>
              </tr>
              <tr>
                  <td style="width:160px;border-right:1px solid black;"> Chrome <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;">Cr</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;">mg/kg</td>
                  <td style="width:113px;border-right:1px solid black;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(empty($analyse_data->Cr)){
                        echo "-";
                    }
                    elseif ($analyse_data->Cr< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo $analyse_data->Cr;
                    } 
                    @endphp </td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php

                  $fonc=Archivos::ft3nb($analyse_data->Cr * ($analyse_data->MS/100));
                 
                  if(is_float($fonc)){
                  $compt=strlen($fonc)-1;
                }else {
                    $compt=strlen($fonc);
                }
                
                       echo number_format($fonc,4-$compt);
                       
                    @endphp </td>
                  <td style="border-right:1px solid black;">NF EN 13650:V2002 eau régale Dos.ICP OES</td>
              </tr>
              <tr>
                  <td style="width:160px;border-right:1px solid black;">Mercure</td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;">Hg</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;">mg/kg</td>
                  <td style="width:113px;border-right:1px solid black;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(empty($analyse_data->Hg)){
                        echo "-";
                    }
                    elseif ($analyse_data->Hg< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo $analyse_data->Hg;
                    } 
                    @endphp </td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(Archivos::ft3nb(empty(round($analyse_data->Hg * ($analyse_data->MS/100), 2)))){
                        echo "-";
                    }
                    elseif (Archivos::ft3nb(round($analyse_data->Hg * ($analyse_data->MS/100), 2))< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo Archivos::ft3nb(round($analyse_data->Hg * ($analyse_data->MS/100), 2));
                    } 
                    @endphp </td>
                  <td style="border-right:1px solid black;">NF EN 13650:V2002 eau régale Dos.ICP OES</td>
              </tr>
              <tr>
                  <td style="width:160px;border-right:1px solid black;">Nickel <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;">Ni</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;">mg/kg</td>
                  <td style="width:113px;border-right:1px solid black;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(empty($analyse_data->Ni)){
                        echo "-";
                    }
                    elseif ($analyse_data->Ni< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo $analyse_data->Ni;
                    } 
                    @endphp </td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(Archivos::ft3nb(empty(round($analyse_data->Ni * ($analyse_data->MS/100), 2)))){
                        echo "-";
                    }
                    elseif (Archivos::ft3nb(round($analyse_data->Ni * ($analyse_data->MS/100), 2))< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo Archivos::ft3nb(round($analyse_data->Ni * ($analyse_data->MS/100), 2));
                    } 
                    @endphp </td>
                  <td style="border-right:1px solid black;">NF EN 13650:V2002 eau régale Dos.ICP OES</td>
              </tr>
              <tr>
                  <td style="width:160px;border-right:1px solid black;">Plomb <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;">Pb</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;">mg/kg</td>
                  <td style="width:113px;border-right:1px solid black;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(empty($analyse_data->Pb)){
                        echo "-";
                    }
                    elseif ($analyse_data->Pb< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo $analyse_data->Pb;
                    } 
                    @endphp </td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    if(Archivos::ft3nb(empty(round($analyse_data->Pb * ($analyse_data->MS/100), 2)))){
                        echo "-";
                    }
                    elseif (Archivos::ft3nb(round($analyse_data->Pb * ($analyse_data->MS/100), 2))< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo Archivos::ft3nb(round($analyse_data->Pb * ($analyse_data->MS/100), 2));
                    } 
                    @endphp </td>
                  <td style="border-right:1px solid black;">NF EN 13650:V2002 eau régale Dos.ICP OES</td>
              </tr>
              <tr>
                  <td style="width:160px;border-right:1px solid black;">Selenium</td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;">Se</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;">mg/kg</td>
                  <td style="width:113px;border-right:1px solid black;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    
                    if(empty($analyse_data->Se)){
                        echo "-";
                    }
                    elseif ($analyse_data->Se< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo $analyse_data->Se;
                    } 
                    @endphp </td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;"> @php
                    
                    if(Archivos::ft3nb(empty(round($analyse_data->Se * ($analyse_data->MS/100), 2)))){
                        echo "-";
                    }
                    elseif (Archivos::ft3nb(round($analyse_data->Se * ($analyse_data->MS/100), 2))< 0.10) {
                        echo "inf à 0.10";
                    }
                    else {
                        echo Archivos::ft3nb(round($analyse_data->Se * ($analyse_data->MS/100), 2));
                    } 
                    @endphp </td>
                  <td style="border-right:1px solid black;">NF EN 13650:V2002 eau régale Dos.ICP OES</td>
              </tr>
      </table>
      <h5 style="font-size:10px;text-align:left;margin:2px;padding:0"> <u>Notes:</u> </h5>
      <p style="font-size:9px;text-align:left;margin:2px;padding:0">La technique d'échantillonnage utilisée :Mise en cône et quartage selon la méthode interne (Réf: LAB03MO127-Va)<br>
         L'échantillon soumis à l'essai est analysé tel qu'il a été fournis.<br>
         Echantillon séché à 75°C dans une étuve ventulée, broyé mécaniquement par un broyeur à couteaux et tamisé à 2mm selon la norme 
         NF EN 13040:V2007. Les éléments dosés sont, sauf indication contraire, les éléments totaux.<br>
         Ce rapport d'analyse concerne seulement l'échantillon soumis aux analyses. Ce rapport ne doit pas être reproduit sans l'approbation
         du laboratoire d'essai. La reproduction de ce rapport d'essai n'est autorisé que sous sa forme intégrale.</p>
         <p class="h4" style="font-size:9px;text-align:left"> Paramètre accrédité</p>
         <img src="{{ Archivos::imagenABase64(public_path('img/signature.png')) }}" style="margin-top:10px" width="400px">
         <p class="text" style="font-size:8px;">1/2<br>
                             ------------------------------<br>
                             Laboratoire LACQ <br>
                             AGROPOLIS-GI5 GI6, Commune de Mejjate, Meknes, Maroc <br>
                             Tel:+212 535 52 94 01 <br>
                             contact.lacq@elephant-vert.com <br>        
          </p>  
         <table border="0">
          <tr>
              <td><img src="{{ Archivos::imagenABase64(public_path('img/LacqLogo.jpg')) }}" width="130px" height="40px">
                  <br>
                  <label style="font-size:9px;margin:0;padding:0;">Laboratoire d'Analyses et Contrôle<br> Qualité  
                      VERT MAROC S.A. </label>
                      <br>
                      <label style="color:green;font-size:11px;">LAB03F63-Ve</label>
              </td>
              <td>
                  <h5 style="color:green;text-align:center; font-size:12px;">ANNEXE</td> 
          </tr>
      </table>
      <table style="width:100%;font-size:9px;margin-top:">
          <tr>
              <th class="head bordered" style="width:125px;">Référence client :</th>
              <td class=" bordered">{{ $commande_info->ref_client  }}</td>
              <th class=" head bordered" style="width:110px;">Référence d'échantillon:</th>
              <td class="bordered">{{ $commande_info->code_commande}}</td>
          </tr>
          <tr>
              <th class="head bordered" style="width:125px;">Dossier suivi par :</th>
              <td class="bordered">{{ $commande_info->commercial}}</td>
              <th class="head bordered" style="width:110px;">Date d'édition :</th>
              <td class="bordered">@php echo Archivos::costomDateFormate($commande_info->date_edition) @endphp  </td>
          </tr>
      </table>
      <br>
      <table style="width:100%;font-size:9px;margin-top:;border:1px solid black;" >
      <label style="text-align:top;color:green;font-size:11px;">Photo prise lors de la préparation de l'échantillon</label>
              <tr >
                <th style="width:180px;height:150px;">
                  <img src='{{ Archivos::imagenABase64(public_path("img/commande/ameo/{$commande_info->img_1}")) }}'
                width="600px" height="500px" style="margin-top:6;"></th>            
              </tr>
            </table>
            <p class="text" style="font-size:8px;font-weight:lighter;">2/2 <br>
                             ------------------------------<br>
                             Laboratoire LACQ <br>
                             AGROPOLIS-GI5 GI6, Commune de Mejjate, Meknes, Maroc <br>
                             Tel:+212 535 52 94 01 <br>
                             contact.lacq@elephant-vert.com <br>
          </p>
  </body>
  </html>