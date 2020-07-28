<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../bootstrap.php';

class Insert_info_Compte extends bootstrap{


 public function Ajout_compte(Compte $Compte){
        $req = Insert("INSERT INTO Compte(numagence, cleRib, NumCompte,clientPhysique,TypeComptes) VALUES (?,?,?,?,?)",
       array(
        $Compte->getNumAgence(),
        $Compte->getCleRib(),
        $Compte->getNumCompte(),
        $Compte->getClientPhysique(),
        $Compte->getTypeComptes()

        ));

        if($req){
            echo "<div class='alert alert-success'>Informations compte enregistré avec succés </div>";
        }else{
            echo "<div class='alert alert-danger'>Echec d'enregistrement du compte</div>";
        }
    }


    }