<?php

include 'Route.php';

class Router
{

    function route()
    {

    }

    function addRoute()
    {

    }

   function findRoute()
    {
        $request = new Request();
        $controller = $request->getController() . 'Controller';
        $action = $request->getMethod();
        $parameters = $request->getArgs();
        $controllerFile = SITE_PATH . 'controllers/' . $controller . '.php';
        if (is_readable($controllerFile))
        {
            require_once $controllerFile;

            $controller = new $controller;
            $action = (is_callable(array($controller, $action))) ? $action : 'index';

            if (!empty($parameters))
            {
                call_user_func_array(array($controller, $action), $parameters);
            }
            else
            {
                call_user_func(array($controller, $action));
            }
            return;
        }
        throw new Exception('404 - ' . $request->getController() . ' not found');
    }

    function buildUrl()
    {

    }
}