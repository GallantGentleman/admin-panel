<?php
session_start();

require_once "lib/ActionListener.php";
require_once "lib/AddFundClass.php";
require_once "lib/ViewFundsClass.php";
require_once "lib/View.php";
require_once "lib/dbClass.php";
require_once "lib/handler.php";
require_once "lib/fundAccount.php";
require_once "config/config.php";

use \lib\ViewFundsClass;
use \lib\AddFundClass;
use \lib\ActionListener;
use \lib\Handler;
use \lib\fundAccount;
use \config\Config;

$g = (!empty($_GET['a'])) ? $_GET['a'] : 'add' ;

$object;

switch ($g) {
    case 'add':
        $object = new AddFundClass();
        break;
    case 'list':
        $object = new ViewFundsClass();
        break;
    case 'account':
        $object = new fundAccount();
        break;
    default:
        $object = new AddFundClass();
        break;
}

$handler = new Handler();

ActionListener::actionDetect($object);
