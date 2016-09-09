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

use \lib\dbClass;

$test = new dbClass;
