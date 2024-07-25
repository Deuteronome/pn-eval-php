<?php

    class Model {
        
        private PDO $bdd;
        /**
         * Créé l'interface avec la base de données (PDO) - cette fonction n'est pas à modifier
        */
        public function __construct() {
            try {
                $this->bdd = new PDO('mysql:host=127.0.0.1:3306;dbname=eval_php;charset=utf8','eval_admin', 'c0d3r1sfun');
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        
        /**
        * Cette fonction envoie au controller un tableau avec l'ensemble des évènements stockés en base de données
        */

        public function getEvents() {
            $sqlQuery = "SELECT * FROM events";
            $statement = $this->bdd->prepare($sqlQuery);
            $statement->execute([]);
            $req = $statement -> fetchAll();
            return $req;
        }
    }