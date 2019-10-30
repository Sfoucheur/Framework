<?php

class Dispatcher
{

    private $request;

    public function dispatch()
    {
        $this->request = new Request();
        Router::parse($this->request->url, $this->request);
        try{
            $controller = $this->loadController();
        }catch(controllerNotFoundException $e){
            $e->errorInfo();
        }
        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    public function loadController()
    {
        $name = $this->request->controller . "Controller";
        $file = ROOT . 'Controllers/' . $name . '.php';
        if (!file_exists($file)) {
            throw new controllerNotFoundException;
        }
        require_once($file);
        $controller = new $name();
        return $controller;
    }

}
?>