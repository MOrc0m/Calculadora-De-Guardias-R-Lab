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
    } else {  echo 'cantidad de horas extra no valida';     
    }   
  ?>