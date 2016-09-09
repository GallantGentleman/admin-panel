<?php

namespace lib;

class ActionListener {

    public static function actionDetect($obj) {
        if (is_object($obj)) {
            $obj->view();
        } else {
            $obj = new AddFundClass();
            $obj->view();
        }
    }

}
