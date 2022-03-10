<?php
  header("Content-Type: application/json");
  $config = (array) [
    "http" => (array) [
      'method' => "GET"
    ]
  ];
  $conversion = stream_context_create($config);
  $datos = file_get_contents("https://comfenalcocursos2021.github.io/Lectura_Ficheros_07_03_2022/datos.json",false, $conversion);
  $decodificar = json_decode($datos);

  var_dump($decodificar);
?>