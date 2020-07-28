<?php

 require_once '../../bootstrap.php';

 extract($_POST);

 if(isset($btn)) {

    $compte = new Compte();

    $clientPhysique = $entityManager->find("ClientPhysique", $idClientPhysique);

    $compte->setNumAgence($numagence);
    $compte->setCleRib($cleRib);
    $compte->setNumCompte($NumCompte);
    $compte->setClientPhysique($clientPhysique);

    $entityManager->persist($compte);
    $entityManager->flush();
  }