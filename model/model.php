<?php

/**
 * Créé l'interface avec la base de données (PDO) - cette fonction n'est pas à modifier
 */
function connectDB() {
    $bdd = new PDO('mysql:host=127.0.0.1:3306;dbname=eval_php;charset=utf8','eval_admin', 'c0d3r1sfun');

    return $bdd;
}

/**
 * Cette fonction envoie au controller un tableau avec l'ensemble des évènements stockés en base de données
 */
function getEvents($bdd) {
    // à vous de l'écrire - allez voir ce qu'on a déjà fait en php
}