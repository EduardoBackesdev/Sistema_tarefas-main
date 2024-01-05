<?php

class conect { 

   private $localhost = 'localhost';
   private $dbname = 'tarefa_app';
   private $userdb = 'root';
   private $password = '';
   private $pdo = '';

   public function __construct(){ 
     $this->pdo = new PDO('mysql:host='.$this->localhost.';dbname='.$this->dbname.'', ''.$this->userdb.'', ''.$this->password.'');
      
   }

   public function pdoConect(){
    return $this->pdo;
    
   }




};





?>




