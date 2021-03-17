<?php

include './core/Database.php';

class UserController{
 
    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function all()
    {
        $query = $this->db->pdo->query('SELECT * FROM user');

        return $query->fetchAll();
    }

    public function store($request)
    {
        isset($request['is_admin']) ? $isAdmin = 1 : $isAdmin = 0;
        $password = password_hash($request['password'], PASSWORD_DEFAULT);

        $query = $this->db->pdo->prepare('INSERT INTO user (name, surname, email, password) VALUES (:name, :surname, :email, :password)');
        $query->bindParam(':name', $request['name']);
        $query->bindParam(':surname', $request['surname']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':password', $password);
        
        $query->execute();

        return header('Location: homepage.php');
    }







}




?>