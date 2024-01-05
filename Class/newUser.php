<?php 

class newUser{

// atributos
private $name = "";
private $password= "";



// metodo para cadastrar no banco de dados
public function newUser(){
    $pdoConection = new conect();
    $nameNew = $_POST['userNew'];
    $passwordNew = $_POST['passwordNew'];
    $sql = $pdoConection->pdoConect()->prepare("INSERT INTO `newUser` VALUES (null,?,?)");
    $sql->execute(array($nameNew, $passwordNew));
    $this->name = $nameNew;
    $this->name = $passwordNew;
    echo '<script>alert("Parabens cadastrado com sucesso")</script>';    
}





}


?>