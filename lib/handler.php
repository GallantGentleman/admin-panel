<?php

namespace lib;

class Handler {
    public function __construct() {
        if (isset($_SESSION['code'])) {
            $m = '';
            if (isset($_GET['code']) && !empty($_GET['code'])) {
                switch ($_GET['code']) {
                    case 'error':
                        $m = "Вы заполнили не все поля !";
                        break;

                    case 'success':
                        $m = "Запись успешно добавлена .";
                        break;
                    case 'db_problem':
                        $m = "Проблемы с базой данных";
                        break;
                }

                $this->message($m);
            }

            unset($_SESSION['code']);
        }
    }

    private function message($m) {
        if (!empty($m))
            echo "<script type='text/javascript'>alert('" . $m . "');</script>";
    }
}
