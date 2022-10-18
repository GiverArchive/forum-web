<?php
  $signos = simplexml_load_file("signos.xml");
  $birth = $_POST["birth"];
  $birth = explode("-", $birth);
  $birth = $birth[1]."/".$birth[2];

  foreach($signos->signo as $signo) {
    $dateS = explode('/', $signo->dataInicio);
    $dateS = $dateS[1]."/".$dateS[0];
    $dateF = explode('/', $signo->dataFim);
    $dateF = $dateF[1]."/".$dateF[0];

    if(strtotime($birth) >= strtotime($dateS) && strtotime($birth) <= strtotime($dateF)) {
      echo "<title>Seu signo de dev</title>";
      echo "<p>Seu signo é ".$signo->signoNome."</p>";
      echo "<p>Seu futuro: ".$signo->descricao."</p>";
    }

  }
?>