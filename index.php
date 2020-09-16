<?php

if (isset($_GET['page']) && $_GET['page'] == 'home') {
    require "Controllers/HomeController.php";
} else if(isset($_GET['page']) && $_GET['page'] == 'addCharacter') {
    require "Controllers/AddCharacterController.php";
} else if(isset($_GET['page']) && $_GET['page'] == 'addUniverse') {
    require "Controllers/AddUniverseController.php";
} else {
    header('Location: /home');
}