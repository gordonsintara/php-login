<?php

class SignupContr extends Signup{
    private $uid;
    private $email;
    private $pwd;
    private $pwdRepeat;

    public function __construct($uid, $pwd, $pwdRepeat, $email){
        $this->uid = $uid;
        $this->email = $email;
        $this->pwd   = $pwd;
        $this->pwdRepeat = $pwdRepeat;
    }

    public function signupUser(){
        if($this->emptyInput()== false){
            header('location: ../index.php?error=emptyinput');
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }

    private function emptyInput(){
        $result = null;
        if(empty($this->uid) || empty($this->email) || empty($this->pwd) || empty($this->pwdRepeat)){
            $result = false;
        }
        else{
            $result = true;
        }
    }
    
}