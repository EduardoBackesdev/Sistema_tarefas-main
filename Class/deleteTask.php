<?php

class delete{

// metodo para excluir tarefa
public function deleteOne(){
    $pdoConect = new conect();
    $nameTask = $_POST['nameTask'];
    $sql= $pdoConect->pdoConect()->prepare("DELETE FROM `tarefa` WHERE nameTask=?");
    $sql->execute(array($nameTask));
}










}

?>