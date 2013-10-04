<?php


class Route {
    private $controller = '';
    private $action = '';

    public function __construct() {
        $_url = $_GET['_url'];
        $splits = explode('/', $_url);

        $this->controller = !empty($splits[0]) ? $splits[0].'Controller' : 'indexController';
        $this->action = !empty($splits[1]) ? $splits[1].'Action' : 'indexAction';
    }

    public function route() {
        $path = H.'app/controllers/'.$this->controller.'.php';
        if (file_exists($path)) {

            if (method_exists($this->controller, $this->action)) {
                $c = new $this->controller;
                $c->{$this->action}();
            } else {
                //
            }

        } else {
            //
        }

        return''; // отсоси, phpstorm
    }
}