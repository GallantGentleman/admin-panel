<?php

namespace lib;

use PDO;
use \config\Config;

class DbClass {
    private $db;

    public function __construct() {
        $cfg = new Config();

        $settings = $cfg->getConfig();

        extract($settings);

        $this->db = new PDO("mysql:host=".$db_host.";dbname=".$db_name, $db_user, $db_password);
        $this->db->query("SET NAMES ".$db_charset);
    }

    public function dataQuery($keys, $rows) {
        $query = $this->generateData($keys, $rows);

        $mysql = $this->db->prepare($query);
        if($mysql->execute()) {
            return true;
        }
    }

    public function getDbTableList() {
        $result = [];

        $sql = $this->db->prepare('SELECT * FROM `funds`');
        $sql->execute();

        while ($row = $sql->fetch()) {
            $result[] = $row;
        }

        return $result;
    }

    private function generateData($keys, $rows) {
        $query = '';

        if (count($keys) == count($rows)) {
            $query = '';

            $key_query = '';
            $row_query = '';

            for ($i = 0; $i < count($keys); $i++) {
                $key_query .= "`" . $keys[$i] . "`";
                $row_query .= "'" . $rows[$i] . "'";

                if ($i + 1 != count($rows)) {
                    $key_query .= " ,";
                    $row_query .= " ,";
                }
            }

            $query = "INSERT INTO `funds`(".$key_query.") VALUES(".$row_query.")";
        }

        return $query;
    }

}
