<?php

namespace lib;

use \lib\View;
use \lib\dbClass;
use PDO;

class fundAccount {

    private $db;
    private $view;

    private $keys = array();
    private $rows = array();

    private $emptyInputs = 0;

    private $link = "http://localhost/pets/pif/admin/?code=";

    function __construct() {
        $this->db = new dbClass();
        $this->view = new View();
    }

    public function view($page = 'account') {
        if(isset($_GET['form']) && $_GET['form'] == 'update') {
            if (isset($_POST['edit']['submit'])) {
                $this->editFund();
            }
        } else {
            $this->view->render(['page' => $page]);
        }
    }

    private function generateArray() {
        foreach ($_POST['edit'] as $key => $value) {
            if($key != 'submit') {
                $this->keys[] = $key;
                $this->rows[] = $value;
            }
        }
    }

    private function checkInputs($inputs) {
        for($i = 0; $i < count($inputs); $i++) {
            if (empty($inputs[$i])) {
                $this->emptyInputs++;
            }
        }
    }

    private function editFund() {
        $this->generateArray();
        $this->checkInputs($this->rows);

        if($this->emptyInputs == 0) {
            $this->db->dataQuery($this->keys, $this->rows);

            $this->relocate("success");
        } else {
            $this->relocate("error");
        }

    }

    private function relocate($link) {
        $_SESSION['code'] = true;
        $this->link .= $link;
        header("Location: " . $this->link);
    }

}
