<?php
require 'DB.php';
class Query
{
    public $conn;

    public function __construct()
    {
        $pdo = new DB();
        $this->conn = $pdo->make();
    }
    public function getTodo()
    {
        $allTodos = $this->conn->prepare("SELECT * FROM todolist");
        $allTodos->execute();
        return $allTodos->fetchAll(PDO::FETCH_OBJ);
    }

    public function getTodoById($id)

    {
        $id = explode('=', $id)[1];
        $todo = $this->conn->prepare("SELECT * FROM todolist WHERE id = ? ");
        $todo->execute([$id]);
        return $todo->fetch(PDO::FETCH_OBJ);
    }

    public function insert($post)
    {

        $statement = $this->conn->prepare('INSERT INTO todolist (title, completed) VALUES(:title, :status)');

        $result = $statement->execute([
            'title' => $post['title'],
            'status' => $post['status']
        ]);

        if ($result) {
            header('location:/');
        } else {
            echo 'Something went wrong';
        }
    }

    public function update($post)
    {
        $statement = $this->conn->prepare('UPDATE  todolist SET title=:title, completed = :status Where id =:todoid');
        $result = $statement->execute([
            'title' => $post['title'],
            'status' => $post['status'],
            'todoid' => $post['id']
        ]);

        if ($result) {
            header('location:/');
        } else {
            echo 'Something went wrong';
        }
    }
}
