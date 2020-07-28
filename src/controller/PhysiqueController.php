<?php
namespace src\controller;
use libs\system\Controller;

class PhysiqueController extends Controller {

    public function add() {
       return $this->view->load("clientPhysique/add");
    }
    public function getAll() {

        $clientPhysique = array("2263 6525 5655", "2633 6512 6952");
        return $this->view->load("clientPhysique/getAll", $clientPhysique);
    }
}
?>
