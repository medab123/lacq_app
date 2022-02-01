
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
                      <label style="color:green;font-size:11px;">LAB03F63-VE.</label>
              </td>
              <td>
                  <h5 style="color:green;text-align:center; font-size:12px;">RAPPORT D'ANALYSE AMENDEMENT ORGANIQUE ET SUPPORT DE CULTURE
                      </br>N° {{$commande_info->code_commande }}</h5>
              </td>
              <td style="text-align:right;vertical-align:top"><img src="{{ Archivos::imagenABase64(public_path('img/semac.png')) }}"
                      width="80px" height="40px"><br>
                      <label style="color:brown;font-size:10px;margin:0;padding:0;text-align:right;">N° MCI/CE AL 93/2018</label>
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
              <th class="head bordered" style="width:125px;">Lieu d'exécution des essais :</th>
              <td class="bordered">{{ $commande_info->lieu }}</td>
              <th class="head bordered" style="width:110px;">Date d'analyse :</th>
              <td class="bordered">{{ $commande_info->date_edition }}</td>
          </tr>
  
          <tr>
              <th class="head bordered" style="width:125px;">Dossier suivi par :</th>
              <td class="bordered">{{ $commande_info->commercial}}</td>
              <th class="head bordered" style="width:110px;">Date d'édition :</th>
              <td class="bordered" >{{ $commande_info->date_edition }}</td>
          </tr>
  
          <tr>
              <th class="head bordered" style="width:125px;">Référence client:</th>
              <td class="bordered">{{ $commande_info->ref_client  }}</td>
              <th class="head bordered" style="width: 150px;">Quantité récéptionnée:</th>
              <td class="bordered">{{ $commande_info->quantite }}</td>
          </tr>
      </table>
  
      <table style="width:100%;font-size:10px;margin-top:" >
          <tr>
            <th class="head bordered" style="text-align:center">RENSEIGNEMENTS RELATIFS A L'ECHANTILLON</th>
          </tr>
  
      </table>
      @php
      $etat=$analyse_data->Etat;
        if($etat=="p"){
          $etat="présence";
        }
        else
        $etat="absence";
  
        @endphp
  
          <table style="width:100%;font-size:10px;margin-top:;border:1px solid black;background:rgb(230, 230, 230);" >
              <tr >
                <th style="width:180px;border:1px solid black;height:150px"><label style="text-align:top;color:green">Photo prise à la réception</label>
                  <img src="{{ Archivos::imagenABase64(public_path('img/semac.png')) }}"
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
          <tr>
        <th class=" bordered" style="background:rgb(230, 230, 230);width:153px;" rowspan="2">Paramètres</th>
        <th class=" bordered" style="background:rgb(230, 230, 230);width:22px;"rowspan="2">Sym.</th>
        <th class=" bordered" style="background:rgb(230, 230, 230);width:18px;"rowspan="2">Unité</th>
        <th class=" bordered" style="background:rgb(230, 230, 230);width:105px;"rowspan="2">Méthodes</th>
        <th class=" bordered" colspan="2" style="background:rgb(230, 230, 230);">Résultats</th>
        <th class=" bordered" style="background:rgb(230, 230, 230);"rowspan="2">Observations et paramètres calculés</th>
  </tr>
  <tr>
        <td class=" bordered" style="background:rgb(230, 230, 230);width:60px;text-align:center;">Sec</td>
        <td class=" bordered" style="background:rgb(230, 230, 230);width:60px;text-align:center;">Brut</td>
      
  </tr>
      </table>
      <table style="width:100%;font-size:9px;" >
          <tr>
            <th style="border:0px;text-align:left;color:green">ANALYSE SUR PRODUIT BRUT</th>
          </tr>
          </table>
  
          <table style="width:100%;font-size:10px;border:1px solid black;" >
          <tr>
                  <td style="width:160px;border-right:1px solid black;font-size:9px;">Fraction de refus dépassant 40 mm</td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;font-size:9px;">FR</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">%</td> 
                  <td style="width:113px;border-right:1px solid black;font-size:9px;">NF EN 13040:V2007</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;"></td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">-</td>
                  <td style="border-right:1px solid black;font-size:9px;"></td>
          </tr>
          <tr >
                  <td style="width:160px;border-right:1px solid black;font-size:9px;">Matière sèche à 103°C <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;font-size:9px;">MS</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">%</td>
                  <td style="width:113px;border-right:1px solid black;font-size:9px;">NF EN 13040:V2007</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;"></td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">75,0</td>
                  <td style="border-right:1px solid black;font-size:9px;">Humidité: 25,0 %</td>
              </tr>
              <tr>
                  <td style="width:160px;border-right:1px solid black;font-size:9px;">Masse volumique</td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;font-size:9px;">M/V</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">Kg/m3</td>
                  <td style="width:113px;border-right:1px solid black;font-size:9px;">NF EN 13040:V2007</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;"></td>
                  <td  style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">-</td>
                  <td style="border-right:1px solid black;font-size:9px;;font-size:9px;"></td>
              </tr>
              <tr>
                  <td style="width:160px;border-right:1px solid black;font-size:9px;">Potentiel hydrogène</td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;font-size:9px;">pH</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">-</td>
                  <td style="width:113px;border-right:1px solid black;font-size:9px;">NF EN 13040:V2007</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;"></td>
                  <td style="width:60px;text-align:center;border-right:1px solid black;font-size:9px;">-</td>
                  <td style="border-right:1px solid black;font-size:9px;"></td>
              </tr>
              <tr>
                  <td style="width:160px;border-right:1px solid black;font-size:9px;">Conductivité électrique</td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;font-size:9px;">EC</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">mS/cm</td>
                  <td style="width:113px;border-right:1px solid black;font-size:9px;">NF EN 13038:V2000</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;"></td>
                  <td style="width:60px;text-align:center;border-right:1px solid black;font-size:9px;">-</td>
                  <td style="border-right:1px solid black;font-size:9px;"></td>
              </tr>
      </table>
      <table style="width:100%;font-size:9px;" >
          <tr>
            <th style="border:0px;text-align:left;color:green">COMPOSITION DU PRODUIT</th>
          </tr>
          </table>
          <table style="width:100%;font-size:12px;border:1px solid black;" >
          <tr>
                  <td style="width:160px;border-right:1px solid black;font-size:9px;">Matière organique <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;font-size:9px;">M.O</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">%</td>
                  <td style="width:113px;border-right:1px solid black;font-size:9px;">NF EN 13039:V2011</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">-</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">-</td>
                  <td style="border-right:1px solid black;font-size:9px;"></td>
          </tr>
          <tr>
                  <td style="width:160px;border-right:1px solid black;font-size:9px;">Azote total Kjeldahl <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;font-size:9px;">NTK</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">%</td>
                  <td style="width:113px;border-right:1px solid black;font-size:9px;">NF EN 13654-1:V2002/NF EN 11261:V1995</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">-</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">-</td>
                  <td style="border-right:1px solid black;font-size:9px;"></td>
          </tr>
          </table><br>
          
          <table style="width:100%;font-size:12px;border:1px solid black;" >
          <tr>
                  <td style="width:160px;border-right:1px solid black;font-size:9px;">Phosphore <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;font-size:9px;">P2O5</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">%</td>
                  <td style="width:113px;border-right:1px solid black;font-size:9px;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">-</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">-</td>
                  <td style="border-right:1px solid black;font-size:9px;">NF EN 13650: V2002 eau régale Dos.ICP OES</td>
          </tr>
          <tr>
                  <td style="width:160px;border-right:1px solid black;font-size:9px;">Potassium <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;font-size:9px;">K2O</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">%</td>
                  <td style="width:113px;border-right:1px solid black;font-size:9px;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">-</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">-</td>
                  <td style="border-right:1px solid black;font-size:9px;">NF EN 13650: V2002 eau régale Dos.ICP OES</td>
          </tr>
          <tr>
                  <td style="width:160px;border-right:1px solid black;font-size:9px;">Magnésium <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;font-size:9px;">MgO</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">%</td>
                  <td style="width:113px;border-right:1px solid black;font-size:9px;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">-</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">-</td>
                  <td style="border-right:1px solid black;font-size:9px;">NF EN 13650: V2002 eau régale Dos.ICP OES</td>
          </tr>
          <tr>
                  <td style="width:160px;border-right:1px solid black;font-size:9px;">Calcium <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;font-size:9px;">CaO</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">%</td>
                  <td style="width:113px;border-right:1px solid black;font-size:9px;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">-</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">-</td>
                  <td style="border-right:1px solid black;font-size:9px;">NF EN 13650: V2002 eau régale Dos.ICP OES</td>
          </tr>
          </table>
          <table style="width:100%;font-size:9px;" >
          <tr>
            <th style="border:0px;text-align:left;color:green">OLEGO-ELEMENTS</th>
          </tr>
          </table>
  
          <table style="width:100%;font-size:12px;border:1px solid black;" >
          <tr>
                  <td style="width:160px;border-right:1px solid black;font-size:9px;">Fer <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;font-size:9px;">FR</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">%</td> 
                  <td style="width:113px;border-right:1px solid black;font-size:9px;">NF EN 13040:V2007</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;"></td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">-</td>
                  <td style="border-right:1px solid black;font-size:9px;"></td>
          </tr>
          <tr >
                  <td style="width:160px;border-right:1px solid black;font-size:9px;">Fer <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;font-size:9px;">Fe</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">mg/kg</td>
                  <td style="width:113px;border-right:1px solid black;font-size:9px;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">-</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">-</td>
                  <td style="border-right:1px solid black;font-size:9px;">NF EN 13650:V2002 eau régale Dos.ICP OES</td>
              </tr>
              <tr>
                  <td style="width:160px;border-right:1px solid black;font-size:9px;">Zinc <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">Zn</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">mg/kg</td>
                  <td style="width:113px;border-right:1px solid black;font-size:9px;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">311,5</td>
                  <td  style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">233,6</td>
                  <td style="border-right:1px solid black;font-size:9px;">NF EN 13650:V2002 eau régale Dos.ICP OES</td>
              </tr>
              <tr>
                  <td style="width:160px;border-right:1px solid black;font-size:9px;">Cuivre <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">Cu</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">mg/kg</td>
                  <td style="width:113px;border-right:1px solid black;font-size:9px;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">81,8</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">61,4</td>
                  <td style="border-right:1px solid black;font-size:9px;">NF EN 13650:V2002 eau régale Dos.ICP OES</td>
              </tr>
              <tr>
                  <td style="width:160px;border-right:1px solid black;font-size:9px;">Manganèse <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">Mn</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">mg/kg</td>
                  <td style="width:113px;border-right:1px solid black;font-size:9px;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">-</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">-</td>
                  <td style="border-right:1px solid black;font-size:9px;">NF EN 13650:V2002 eau régale Dos.ICP OES</td>
              </tr>
      </table>
      <table style="width:100%;font-size:9px;" >
          <tr>
            <th style="border:0px;text-align:left;color:green">ELEMENTS TRACES METALIQUES</th>
          </tr>
          </table>
  
          <table style="width:100%;font-size:12px;border:1px solid black;" >
          <tr>
                  <td style="width:160px;border-right:1px solid black;font-size:9px;">Arsenic</td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;font-size:9px;">As</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">mg/kg</td> 
                  <td style="width:113px;border-right:1px solid black;font-size:9px;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">1,86</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">1,40</td>
                  <td style="border-right:1px solid black;font-size:9px;">NF EN 13650:V2002 eau régale Dos.ICP OES</td>
          </tr>
          <tr >
                  <td style="width:160px;border-right:1px solid black;font-size:9px;"> Cadmium <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;font-size:9px;">Cd</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">mg/kg</td>
                  <td style="width:113px;border-right:1px solid black;font-size:9px;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">0,52</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">0,39</td>
                  <td style="border-right:1px solid black;font-size:9px;">NF EN 13650:V2002 eau régale Dos.ICP OES</td>
              </tr>
              <tr>
                  <td style="width:160px;border-right:1px solid black;font-size:9px;"> Chrome <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;font-size:9px;">Cr</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">mg/kg</td>
                  <td style="width:113px;border-right:1px solid black;font-size:9px;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">14,3</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">10,8</td>
                  <td style="border-right:1px solid black;font-size:9px;">NF EN 13650:V2002 eau régale Dos.ICP OES</td>
              </tr>
              <tr>
                  <td style="width:160px;border-right:1px solid black;font-size:9px;">Mercure</td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;font-size:9px;">Hg</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">mg/kg</td>
                  <td style="width:113px;border-right:1px solid black;font-size:9px;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">Inf à 0,10</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">Inf à 0,10</td>
                  <td style="border-right:1px solid black;font-size:9px;">NF EN 13650:V2002 eau régale Dos.ICP OES</td>
              </tr>
              <tr>
                  <td style="width:160px;border-right:1px solid black;font-size:9px;">Nickel <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;font-size:9px;">Ni</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">mg/kg</td>
                  <td style="width:113px;border-right:1px solid black;font-size:9px;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">11,0</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">8,2</td>
                  <td style="border-right:1px solid black;font-size:9px;">NF EN 13650:V2002 eau régale Dos.ICP OES</td>
              </tr>
              <tr>
                  <td style="width:160px;border-right:1px solid black;font-size:9px;">Plomb <h6 style='color:red;'>(*)</h6></td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;font-size:9px;">Pb</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">mg/kg</td>
                  <td style="width:113px;border-right:1px solid black;font-size:9px;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">4,26</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">3,20</td>
                  <td style="border-right:1px solid black;font-size:9px;">NF EN 13650:V2002 eau régale Dos.ICP OES</td>
              </tr>
              <tr>
                  <td style="width:160px;border-right:1px solid black;font-size:9px;">Selenium</td>
                  <td style="width:32px;text-align:center;border-right:1px solid black;font-size:9px;">Se</td>
                  <td style="width:30px;text-align:center;border-right:1px solid black;font-size:9px;">mg/kg</td>
                  <td style="width:113px;border-right:1px solid black;font-size:9px;">NF EN ISO 11885:V2009</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">3,7</td>
                  <td style="width:68px;text-align:center;border-right:1px solid black;font-size:9px;">2,8</td>
                  <td style="border-right:1px solid black;font-size:9px;">NF EN 13650:V2002 eau régale Dos.ICP OES</td>
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
                          AGROPOLIS-GI5 GI6, Commune de Mejjate, Meknes, Maroc <br>
                          Tél:+212 538 00 49 20/ www.elephantvert.ch / contactmaroc@elephantvert.ch
         
          </p>
  
  
  
         
  
  
         <table border="0">
          <tr>
              <td><img src="{{ Archivos::imagenABase64(public_path('img/LacqLogo.jpg')) }}" width="130px" height="40px">
                  <br>
                  <label style="font-size:9px;margin:0;padding:0;">Laboratoire d'Analyses et Contrôle<br> Qualité ELEPHANT
                      VERT MAROC S.A. </label>
                      <br>
                      <label style="color:green;font-size:11px;">LAB03F63-VE.</label>
              </td>
              <td>
                  <h5 style="color:green;text-align:center; font-size:12px;">ANNEXE</td> 
          </tr>
      </table>
      <table style="width:100%;font-size:10px;margin-top:">
  
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
              <td class="bordered">{{ $commande_info->date_edition }} </td>
          </tr>
      </table>
      <br>
     
      <table style="width:100%;font-size:9px;margin-top:;border:1px solid black;" >
      <label style="text-align:top;color:green;font-size:11px;">Photo prise lors de la préparation de l'échantillon</label>
              <tr >
                <th style="width:180px;height:150px">
                  <img src="{{ Archivos::imagenABase64(public_path('img/semac.png')) }}"
                width="150px" height="500px" style="margin-top:5;"></th>            
              </tr>
            </table>
            <p class="text" style="font-size:8px;">2/2 <br>
                             ------------------------------<br>
             AGROPOLIS-GI5 GI6, Commune de Mejjate, Meknes, Maroc <br>
            Tél:+212 538 00 49 20/ www.elephantvert.ch / contactmaroc@elephantvert.ch
         
          </p>
  </body>
  </html>