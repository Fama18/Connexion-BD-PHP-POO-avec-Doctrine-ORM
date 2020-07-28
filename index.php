<?php
require_once "config/autoload.php";
use src\controller\PhysiqueController;
$clientphysiquedao = new PhysiqueController();
$clientphysiquedao->add();
?>
