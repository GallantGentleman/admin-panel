<?php

namespace lib;

use \lib\View;
use \lib\dbClass;
use PDO;

class ViewFundsClass {

    private $db;
    private $view;

    public function __construct() {
        $this->db = new dbClass();
        $this->view = new View();
    }

    public function view() {
        $data = $this->db->getDbTableList();

        $this->view->render(['page' => 'list', 'data' => $data]);
    }

}
