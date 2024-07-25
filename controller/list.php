<?php
session_start();
require_once('../model/model.php');
$bdd = new Model();

//Récupération du nom d'utilisateur
$user = htmlspecialchars($_POST['user']);
if ($user === '') {
    header('location: ../view/homeView.php');
} else {
    //récupération de la liste des évènements dans la base de données
    $eventList = $bdd->getEvents();
    require_once('../view/listView.php');
}
