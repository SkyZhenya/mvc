<?php


ini_set('display_errors',1);
error_reporting(E_ALL);

define('SITE_PATH',realpath(dirname(__FILE__)).'/');
/*Require necessary files.*/
require_once(SITE_PATH.'vendor/Request.php');
require_once(SITE_PATH.'vendor/Router.php');

$route = new Router();
$route->findRoute();



//include 'vendor/Router.php';
//$route = new Route();
//$route->add('/');
//$route->add('/about');
//$route->add('/contact');
//
//echo '<pre>';
//print_r($route);

//$url = explode('/', $_GET['url']);
//print_r($url);
//
//
//require 'controllers/' .$url[0].'.php';
//$controller = new $url[0];  // new Index ???
//
//if (isset($url[1]))
//{
//    $controller->{$url[1]}();
//}
//
