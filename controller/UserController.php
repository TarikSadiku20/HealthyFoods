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
        
        $password = password_hash($request['password'], PASSWORD_DEFAULT);

        $query = $this->db->pdo->prepare('INSERT INTO user (name, surname, email, password) VALUES (:name, :surname, :email, :password)');
        $query->bindParam(':name', $request['name']);
        $query->bindParam(':surname', $request['surname']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':password', $password);
        
        $query->execute();

        return header('Location: homepage.php');
    }

    public function destroy($id)
    {
        $query = $this->db->pdo->prepare('DELETE FROM user WHERE id = :id');
        $query->execute(['id' => $id]);

        return header('Location: Homepage.php');
    }







}




?>