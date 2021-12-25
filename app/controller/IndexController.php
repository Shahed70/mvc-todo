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
        $query = new Query();
        $instance = new IndexController;
        if ($instance->uri === '') {
           
            $todos = $query->getTodo();
            require './app/views/index.view.php';

        } elseif ($instance->uri === '/about') {
            require './app/views/about.view.php';

        } elseif ($instance->uri === '/contact') {
            require './app/views/contact.view.php';

        }elseif ($instance->uri === '/addTodo'){
            $query->insert($_POST);

        }elseif ($instance->uri === '/edit'){
         $todo = $query->getTodoById(parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY));
        require './app/views/edit.view.php';

        }elseif ($instance->uri === '/update'){
            $query->update($_POST);
          echo 'update';
          
   
           }

    }
}
