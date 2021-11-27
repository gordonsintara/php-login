<?php

if(isset($_POST['submit'])){
    //get form data
    $uid = $_POST['uid'];
    $pwd = $_POST['pws'];
    $pwdrepeat = $_POST['pwdrepeaat'];
    $email = $_POST['email'];


    //sign up class
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";

    $signup = new SignupContr($uid,$pwd,$pwdrepeat,$email);

}