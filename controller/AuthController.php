<?php

require './core/Database.php';


class AuthController{

  protected $db;


  public function __construct()
    {
        $this->db = new Database;
    }

    public function login($request)
    {
        $query = $this->db->pdo->prepare('SELECT id,name,surname, email, password,is_admin FROM user WHERE email = :email');
        $query->bindParam(':email', $request['email']);
        $query->execute();

        $user = $query->fetch();
        echo $user['name'];

        if(count($user) > 0 && password_verify($request['password'], $user['password']) ){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            echo $_SESSION['name'];
            

            
             
        }

        return header("Location: ./Homepage.php");
    }



}



?>