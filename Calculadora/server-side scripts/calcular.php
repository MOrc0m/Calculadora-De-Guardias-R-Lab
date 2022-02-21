<!DOCTYPE html>
<html lang="es">  
  <head>    
    <title>Resultado</title>    
    <meta charset="UTF-8">
    <meta name="title" content="Resultado calculado">

    <link href="/styles/stylesheet.css" rel="stylesheet" type="text/css"/> 
    <link rel="shortcut icon" href="/images/favicon.jpg">   
  </head>  
  <body>   
    <header class="col-12 col-lg-6">
      <a href="https://rlab.be/">
        <img src="/images/logo-rlab-negro.svg" style="padding: 5px;" width="128"> <div> RLab  <div>
      </a>
    </header>

    <p>#~</p>  
      
   <h1><b>El monto a cobrar por sus guardias es:</b></h1>
   <?php
      $Guardiasabdirt = filter_input(INPUT_POST, 'Guardiasab', FILTER_SANITIZE_NUMBER_INT);
      $Guardiasab = intval($Guardiasabdirt); 
      $Guardiasnoabdirt =  filter_input(INPUT_POST, 'Guardiasnoab', FILTER_SANITIZE_NUMBER_INT);
      $Guardiasnoab = intval($Guardiasnoabdirt); 
      $horadirt = filter_input(INPUT_POST, 'Sueldo', FILTER_SANITIZE_NUMBER_FLOAT); 
      $hora = floatval($horadirt); 
      $hora = $hora / 240;
      $Guardiaspdirt = filter_input(INPUT_POST, 'Guardiasp', FILTER_SANITIZE_NUMBER_INT);
      $Guardiasp = intval($Guardiaspdirt); 
      if (  $Guardiasab + $Guardiasnoab <= 30 ) {
        $hora25 = $hora + ($hora * 0.25);
        $hora50 = $hora + ($hora * 0.50);
        $horapa = $Guardiasp *  $hora25;
        $horaa = $Guardiasab * $hora50;
        $horanoa =$Guardiasnoab * ($hora * 2);
        $total = $horapa + $horaa + $horanoa;
        $total =number_format($total, 2, ',', '.'); 
        echo  "$" . htmlspecialchars($total);
    } else {  echo '<script language="javascript">alert("cantidad de horas extra no valida")</script>';     
    }   
  ?>
<p>#~/</p>  
<footer>
      <p id="pie">Calculadora actualizada <a class="enlacef" href="https://unioninformatica.org/institucional/convenio-colectivo-de-trabajo/">según el convenio colectivo</a> y <a class="enlacef" href="http://servicios.infoleg.gob.ar/infolegInternet/anexos/60000-64999/63368/texact.htm">la Ley 11.544 </a> de la República Argentina al 27/09/2021.</p>
      <p id="pie" class="git" > By: <a  class="git" href="https://github.com/MOrc0m">M0rc0m</a></p>
    </footer>
  
  </body>       
  </html>
