<?php

class Signup extends Dbh{

    protected function check_user($username){
        $stmt = $this->connect()->prepare( 'SELECT username FROM signup Where username=? ;');

        if(!$stmt-> execute($username)){
            $stmt=null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $resultcheck;
        if ($stmt->rowCount()>0) {
            $resultcheck=false;

        }else{
            $resultcheck=true;  
        } return $resultcheck; 
    } 


}