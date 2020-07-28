<?php

 require_once '../../bootstrap.php';

 extract($_POST);

 if(isset($btn)) {

    $compte = new Compte();

    $compte->setNumAgence($numagence);
    $compte->setCleRib($cleRib);
    $compte->setNumCompte($NumCompte);

    $entityManager->persist($compte);
    $entityManager->flush();
  }