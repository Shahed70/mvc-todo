<?php

class DB
{
    protected $dsn = 'mysql:host=localhost;dbname=mvc-todo';
    protected $username = 'root';
    protected $password = '';
    public $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO($this->dsn, $this->username, $this->password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        } catch (PDOException $e) {
            $error_message = "Database Error: ";
            $error_message .= $e->getMessage();
            echo $error_message;
            exit();
        }
    }

    public function make() {
        return $this->pdo;
    }
}
