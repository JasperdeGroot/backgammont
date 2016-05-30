<?php

header('Content-Type: application/json');
//print_r($_GET);
$y = $_GET['speler']+0;
$vak = $_GET['vak'];
$x = 12;

echo json_encode(array("input" => $_GET, "x"=>$x, "y" => $y, "vak" => $vak));