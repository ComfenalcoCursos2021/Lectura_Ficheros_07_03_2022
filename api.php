<?php
  header("Content-Type: application/json");
  
  $data = (object) [];
  $data->nombre = (string) "Miguel Angel Castro Escamilla";
  $data->edad = (int) 24;
  $data->altura = (float) 1.63;
  $data->profesor = (bool) true;
  $data->pasatiempos = (array) [
    (string) "Cocino",
    (string) "Programo"
  ];
  $data->infomacion = (array) [
    (object) [
      "Nombre" => (string) "Coco", 
      "Especie" => (string) "Canino"
    ],
    (object) [
      "Nombre" => (string) "Neko", 
      "Especie" => (string) "Gato",
      "Raza" => (bool) true
    ],
    (object) [
      "Nombre" => (string) "pedro", 
      "Especie" => (string) "Raton"
    ],
  ];

  $codificar = json_encode($data, JSON_PRETTY_PRINT);


  $file = fopen("datos.json", "w+");
  fwrite($file, $codificar);
  fclose($file);
?>