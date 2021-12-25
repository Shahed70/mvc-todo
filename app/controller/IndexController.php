<?php

require './app/model/Query.php';

class IndexController
{
    public $uri;

    public function __construct()
    {        
        $this->uri = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');        
    }
    public static function showView()
    {
        
        $instance = new IndexController;
        if ($instance->uri === '') {
            $query = new Query();
            $todos = $query->getTodo();
            require './app/views/index.view.php';

        } elseif ($instance->uri === '/about') {
            require './app/views/about.view.php';

        } elseif ($instance->uri === '/contact') {
            require './app/views/contact.view.php';

        }elseif ($instance->uri === '/names'){

            $query = new Query();
            $query->insert($_POST);

            // die(var_dump($title, $status));
            // require './app/views/contact.view.php';
        }
    }
}
