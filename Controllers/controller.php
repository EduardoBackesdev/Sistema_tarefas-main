<?php

require './Class/conection.php';
require './Class/user.php';
require './Class/newUser.php';

// instancias de objetos
$conect = new conect();
$user = new user();
$newUser = new newUser();

// logar usuario no sistema
    if(isset($_POST['action'])){
        $user->login();
    };

// cadastrar usuario no banco de dados
    if(isset($_POST['actionNew'])){
        $newUser->newUser();        
    }

?>