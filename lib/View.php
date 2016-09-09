<?php

namespace lib;

use \config\Config;

class View {

    public function render($data, $explode = true) {
        extract(Config::getConfig());

        $page = array_shift($data);

        if ($explode) {
            if(!empty($data)) {
                extract($data);
            }
        }

        require_once "tpl/index.php";
    }

}
