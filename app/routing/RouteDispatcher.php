<?php
namespace App;

use AltoRouter;
class RouteDispatcher
{
    protected $match;
    protected $controller;
    protected $method;

    public function __construct(AltoRouter $router)
    {
        $this->match = $router->match();

        if($this->match) {
//            require_once __DIR__ . '/../controllers/BaseController.php';
//            require_once __DIR__ . '/../controllers/IndexController.php';
            list($controller, $method) = explode('@', $this->match['target']);
            $this->controller = $controller;
            $this->method = $method;

            if(is_callable(array(new $controller, $method))) {
                call_user_func_array(array(new $this->controller, $this->method), array($this->match['params']));
            }else {
                echo 'The method {$method} is not defined in {$controller}';
            }
        } else {
            header($_SERVER['SERVER_PROTOCOL'].'404 not found');
            view('errors/404');
        }
    }
}