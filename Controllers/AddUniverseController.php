<?php
require 'Models/Database.php';
require 'Models/Universe.php';

if(isset($_POST['submitNewUni'])) {

    $Universe = new Universe();

    $uniName = htmlspecialchars($_POST['uniName']);

    if($Universe->addUniverse($uniName)) {
        $message = "L'univers a été ajouté avec succès !";
    }

}

require 'Views/AddUniverse.php';