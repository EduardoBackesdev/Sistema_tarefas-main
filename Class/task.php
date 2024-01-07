<?php

class task{

// metodo para selecionar as tarefar e printar na tela
    public function select(){
        $conect = new conect();
        $sql = $conect->pdoConect()->prepare("SELECT * FROM `tarefa`");
        $sql->execute();
        $info = $sql->fetchAll();
        foreach($info as $key => $value){

            echo'
                <div class="task-one">
                    <p>'.$value['nameTask'].'</p>
                    <p>'.$value['contentTask'].'</p>
                        <div>
                            <button class="att">Att</button>
                            <button name="deleteTask">X</button>
                        </div>
                </div>';};
    }




















}

?>