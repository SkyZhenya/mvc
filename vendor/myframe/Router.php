<?php



class Router
{
    public function loadClass()
    {
        $route = parse_url($_SERVER['REQUEST_URI']);
        print_r($route);

        $routing = [
          "/" => ['controller' => 'Main', 'action' => 'index'],
            "/article" => ['controller' => 'Main', 'action' => 'article']
        ];
        
        if(isset($routing[$route]))
        {
            $controller = 'module\\Application\\src\\Controller\\'.$routing[$route]['controller']. 'Controller';
            $obj_controller = new $controller;
            $obj_controller->$routing[$route]['action']();
        }
        else
        {
            echo "It is wrong way!!!! ";
        }
    }

}