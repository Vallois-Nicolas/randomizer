<?php
require "../Models/Database.php";
require "../Models/Characters.php";
$randomChar = new Characters();
$randomCharResult = $randomChar->getOneRandomCharacter();
echo json_encode($randomCharResult);