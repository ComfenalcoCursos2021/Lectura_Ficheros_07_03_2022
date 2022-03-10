<?php
  header("Content-Type: application/json");
  $jsonString = (string) '{"nombre":"Miguel Angel Castro Escamilla","edad":24,"altura":1.63,"profesor":true,"pasatiempos":["Cocino","Programo"],"infomacion":{"Dirrecion":"Calle","Numero":11},"Animal":[{"Nombre":"Coco","Especie":"Canino"},{"Nombre":"Neko","Especie":"Gato","Raza":true},{"Nombre":"pedro","Especie":"Raton"}]}';
  $decodificar = json_decode($jsonString);
  //var_dump($decodificar->Animal[3]->Nombre); // default
  //var_dump($decodificar["Animal"][2]["Nombre"]); //true
  $codificar = json_encode($decodificar,JSON_PRETTY_PRINT);
  


  $file = fopen("datos.json", "w+");
  fwrite($file, $codificar);
  fclose($file);
?>