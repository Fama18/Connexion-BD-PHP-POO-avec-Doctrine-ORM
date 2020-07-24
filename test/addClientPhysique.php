<?php
     require_once "../bootstrap.php";

     $clientPhysique = new ClientPhysique();
     //$clientPhysique->setIdClientPhysique(1);
     $clientPhysique->setNumCni("2263 6525 5655");

     $entityManager->persist($clientPhysique);
     $entityManager->flush();

     echo $clientPhysique->getIdClientPhysique();
?>
