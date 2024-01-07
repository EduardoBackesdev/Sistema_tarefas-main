<?php

require './Class/conection.php';
require './Class/user.php';
require './Class/newUser.php';
require './Class/addTask.php';
require './Class/task.php';

// instancias de objetos
$conect = new conect();
$user = new user();
$newUser = new newUser();
$addTask = new addTask();

// logar usuario no sistema
    if(isset($_POST['action'])){
        $user->login();
    };

// cadastrar usuario no banco de dados
    if(isset($_POST['actionNew'])){
        $newUser->newUser();        
    }

// adicionar task ao banco de dados
    if(isset($_POST['addTask'])){
        $addTask->addTaskOne();
    }

// selecionar task no banco e printar na tela
    
    

?>