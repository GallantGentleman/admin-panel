<?php

namespace lib;

use \lib\View;
use \lib\dbClass;
use PDO;

class AddFundClass {

    private $db;
    private $view;

    private $keys = array();
    private $rows = array();

    private $emptyInputs = false;

    private $link = "http://fundexpert.net/?code=";

    public $saveForm = array();

    function __construct() {
        $this->db = new dbClass();
        $this->view = new View();
    }

    // Check $_GET['form'] status and invoke function addFund() else show index page
    public function view($page = 'addfund') {
        if(isset($_GET['form']) && $_GET['form'] == 'update') {
            if (isset($_POST['addfund']['submit'])) {
                $this->addFund();
            }
        } else {
            $this->view->render(['page' => $page]);
        }
    }


    // Break $_POST['addfund'] and save it as arrays ( $key, $value )
    private function generateArray() {
        foreach ($_POST['addfund'] as $key => $value) {
            if($key != 'submit') {
                $this->keys[] = $key;
                $this->rows[] = $value;
            }
        }
    }


    // Check values of array ( $rows ) and increment emptyInputs if it empty
    private function checkInputs($inputs) {
        for($i = 0; $i < count($inputs); $i++) {
            if (empty($inputs[$i])) {
                $this->emptyInputs = true;
            }
        }
    }


    // Add data in db
    private function addFund() {
        $this->generateArray();

        $this->checkInputs($this->rows);

        if(!$this->emptyInputs) {
            if($this->db->dataQuery($this->keys, $this->rows)) {
                $this->relocate("success");
            } else {
                $this->relocate("db_problem");
            }
        } else {
            $this->relocate("error");
        }

    }

    // Relocate u to addres that show success/error message
    private function relocate($link) {
        $_SESSION['code'] = true;
        $this->link .= $link;
        header("Location: " . $this->link);
    }

}
