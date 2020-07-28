<?php

require_once '../../bootstrap.php';

extract($_POST);

if(isset($btn2)) {

   $client_physique = new ClientPhysique();

   $client_physique->setNumCni($numCni);
   $client_physique->setNom($nom);
   $client_physique->setPrenom($prenom);
   $client_physique->setCivilite($civilite);
   $client_physique->setDateDeNaissance($DateDeNaissance);
   $client_physique->setAdresse($adresse);
   $client_physique->setEmail($email);
   $client_physique->setTelephone($telephone);

   $entityManager->persist($client_physique);
   $entityManager->flush();

 }
