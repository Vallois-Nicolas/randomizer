<?php
require 'Models/Database.php';
require 'Models/Characters.php';
require 'Models/Universe.php';

$Universe = new Universe();

$allUniverses = $Universe->getAllUniverses();

if(isset($_POST['submitNewChar'])) {

    $Character = new Characters();

    $charName = htmlspecialchars($_POST['charName']);
    $charPath = htmlspecialchars($_POST['charPath']);
    $universe = htmlspecialchars($_POST['universe']);

    if($Character->addCharacter($charName, $charPath, $universe)) {
        $message = "Le personnage a été ajouté avec succès !";
    }

}

require 'Views/AddCharacter.php';