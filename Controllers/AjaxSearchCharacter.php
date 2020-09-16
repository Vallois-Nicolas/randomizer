<?php
require '../Models/Database.php';
require '../Models/Characters.php';
$searchCharacter = new Characters();
$dataSearch = json_decode(file_get_contents('php://input'));
$resultSearch = $searchCharacter->searchCharacterByUniverse($dataSearch->charName, $dataSearch->universe);
echo json_encode($resultSearch);