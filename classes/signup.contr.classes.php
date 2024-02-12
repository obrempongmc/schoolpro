<?php
class signup_contr{
    private $username;
    private $password1;
    private $password2;

    public function __construct($username,$password1,$password2){
        $this->$username=$username;
        $this->$password1=$password1;
        $this->$password2=$password2;
    }

    private function emptyInput(){
        $result;
        if(empty( $this->username)||empty( $this->password1)||empty($this->password2)){
            $result=false;
        }else{
            $result=true;
        }
        return $result;
    }

    private function invalidusername(){

        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->username)){
            $result=false;
        }
    else{
        $result=true;
    }
    return $result;
}
    private function checkpass(){
        $result;
        
        if($this->password1!==$this->password2){
            $result=false;

        }else{
            $result =true;

        }
        return $result;
    }
    private function check(){
        $result;
        
        if($this->checkuser($this->$username.$this->$password)){
            $result=false;

        }else{
            $result =true;

        }
        return $result;
    }
   
   
}