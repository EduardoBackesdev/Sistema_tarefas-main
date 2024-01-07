<?php

class addTask{

    private $nameTask ='';
    private $task = '';

// metodo para adicionar task ao banco de dados
    public function addTaskOne(){ 
        $pdoConect = new conect();
        $nameTask = $_POST ['nameTask'];
        $contentTask = $_POST['contentTask'];
        $sql= $pdoConect->pdoConect()->prepare("INSERT INTO `tarefa` VALUE(null,?,?)");
        $sql->execute(array($nameTask, $contentTask));
        $this->nameTask = $nameTask;
        $this->task = $contentTask;
    }
        

















}

?>