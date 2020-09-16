<?php
require '../Models/Database.php';
require '../Models/Universe.php';
$searchUniverse = new Universe();
$dataSearch = json_decode(file_get_contents('php://input'));
$resultSearch = $searchUniverse->searchUniverse($dataSearch->uniName);
echo json_encode($resultSearch);