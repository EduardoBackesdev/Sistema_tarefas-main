<?php

class user{

// atributos
private $name = '';
private $password = '';

// metodo para logar
public function login(){
    $conection = new conect();
    $user = $_POST['user'];
    $password = $_POST['password'];
    $sql= $conection->pdoConect()->prepare("SELECT * FROM `user` WHERE name=? AND password=?");
    $sql->execute(array($user, $password));
    $this->name = $user;
    $this->password = $password;
    if($sql->rowCount() == 1){
        header("location: /app.php");
    }else{
        echo '<script>alert("Verifique seu usuario ou senha e tente novamente")</script>';
    };
    
}




}





?>