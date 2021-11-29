<?php

if(isset($_POST['submit'])){
    //get form data
    $uid = $_POST['uid'];
    $pwd = $_POST['pws'];
    $pwdRepeat = $_POST['pwdrepeaat'];
    $email = $_POST['email'];


    //sign up class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";

    $signup = new SignupContr($uid,$pwd,$pwdrepeat,$email);


    $signup->signupUser();

    header("location: ../index.php?error=none");
}