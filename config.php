<?php 
    
    $dbcon = "mysql:host=localhost;dbname=schooldb";
    $user = "root";
    $password =" ";

    try{
    
    $pdo = new PDO( $dbcon, $user,  $password  );
    $pdo ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);



    }catch(PDOException $e){
        
                echo "connection failed: ". $e->getMessage();

    }
