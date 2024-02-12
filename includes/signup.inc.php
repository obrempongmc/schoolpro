<?php
if(isset($_POST['sign_up_button'])){

    // Grabbing data
$username =$_POST["username"];
$password1=$_POST["password1"];
$password2 =$_POST["password2"];

// instantiate signupcontrol
include "../classes/signup.classes.php";
include "../classes/signup.contr.classes.php";
 
 $singup= new signup_contr($username,$password1,$password2);
}
