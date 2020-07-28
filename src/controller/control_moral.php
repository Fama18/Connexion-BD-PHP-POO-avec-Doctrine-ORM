<?php

require_once '../../bootstrap.php';

extract($_POST);

if(isset($btn22)) {

   $client_moral = new ClientMoral();

   $client_moral->setNomEmployeur($nomEmployeur);
   $client_moral->setAdresseEmployeur($AdresseEmployeur);
   $client_moral->setRaisonSocial($raisonSocial);
   $client_moral->setNumIdent($numIdent);

   $entityManager->persist($client_moral);
   $entityManager->flush();
 }