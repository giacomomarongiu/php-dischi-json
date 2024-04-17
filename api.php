<?php

//Lego il contenuto di un file json e lo converto in stringa
$myJsonData = file_get_contents('dischi.json');

//Lo vedo
//var_dump($myJsonData);

//Trasformo la stringa in un array associativo di php
//$dischi = json_decode($myJsonData, true);

//La stampo
//var_dump($dischi) ;

//La riconverto in formato json
echo $myJsonData;

//Devo fare questo per farglielo capire
header('Content-Type: application/json');
