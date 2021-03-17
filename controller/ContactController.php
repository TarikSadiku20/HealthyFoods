<?php

include './core/Database.php';




class ContactController{




    protected $db;


    public function __construct()
    {
        $this->db = new Database;
    }


    public function store($request)
    {
       

        $query = $this->db->pdo->prepare('INSERT INTO contact (firstname, lastname, phone, email, ideas, tellus) VALUES (:firstname, :lastname, :phone, :email, :ideas, :tellus)');
        $query->bindParam(':firstname', $request['firstname']);
        $query->bindParam(':lastname', $request['lastname']);
        $query->bindParam(':phone', $request['phone']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':ideas', $request['ideas']);
        $query->bindParam(':tellus', $request['tellus']);
        
        
        $query->execute();

        return header('Location: homepage.php');
    }
    public function all()
    {
        $query = $this->db->pdo->query('SELECT * FROM contact');

        return $query->fetchAll();
    }
    public function destroy($id)
    {
        $query = $this->db->pdo->prepare('DELETE FROM contact WHERE id = :id');
        $query->execute(['id' => $id]);

        return header('Location: Homepage.php');
    }


}




?>