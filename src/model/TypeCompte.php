<?php

            //require_once '../config/autoload.php';
            require_once '../../bootstrap.php';
            //$typeC = 'SELECT * FROM typecompte';
            $test = $entityManager->getRepository("TypeCompte");
            $test2 = $test->findAll();
            //$typeC->execute();
           // $q = $entityManager->createQuery('select * from TypeCompte')->iterate();
            //$query = $entityManager->createQuery('SELECT t FROM TypeCompte t');
            //$users = $query->getResult();
            //$iterableResult = $q->iterate();
            /*foreach ($q as $row) {
              echo $row;
    // do something
}*/
//var_dump ($users);
//die();
?>
            <select id="typeCompte" name="id" value="" onchange="testCompte()">
            <option value="">--Sélectionner un type de compte--</option>
        <?php
            //while($result = $users->fetch(PDO::FETCH_ASSOC)) {
              foreach($test2 as $test3) {?>
          <option value="<?php echo $test3->getId();?>"><?php echo $test3->getLibelle();?></option>
          <?php
              }
        ?>
         </select>
