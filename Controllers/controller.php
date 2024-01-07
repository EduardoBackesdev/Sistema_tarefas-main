<?php

require './Class/conection.php';
require './Class/user.php';
require './Class/newUser.php';
require './Class/addTask.php';
require './Class/task.php';
require './Class/deleteTask.php';

// instancias de objetos
$conect = new conect();
$user = new user();
$newUser = new newUser();
$addTask = new addTask();
$deleteTask = new delete();

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

// deletar task do banco e da tela
    if(isset($_POST['addTask'])){
        $deleteTask->deleteOne();
    }
    
    

?>