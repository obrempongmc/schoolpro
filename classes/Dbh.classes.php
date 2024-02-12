<?php

class Dbh{
    protected function connect(){
 

    try{
       
    $user = "root";
    $password =" ";
    $dbh= new PDO("mysql:host=localhost;dbname=schooldb",$user,$password) ;
    
   return $dbh;

    }catch(PDOException $e){
        
                echo "connection failed: ". $e->getMessage()."<br/>" ;
                die();

    }

    } 
}
    