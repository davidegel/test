<?php
include(dirname(__DIR__). '/angularjs/opt_autoload/opt_autoload.php');

use classes\DB\DB as Database;
use classes\User;

$database = new Database;
$db = $database->getConnection();

$user = new User($db);
$user->getUser();