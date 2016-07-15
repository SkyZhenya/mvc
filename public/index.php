<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 15.07.16
 * Time: 22:29
 */
ini_set('display_errors',1);
error_reporting(E_ALL);

require '../vendor/myframe/Router.php';

echo 'asdfasdf'."<br>";

$router = new Router();
$router->loadClass();