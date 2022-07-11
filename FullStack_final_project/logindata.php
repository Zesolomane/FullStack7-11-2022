<?php
 require_once 'functions.php';
 require_once 'database.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $email = $_POST["email"];
        $password = $_POST["password"];
        $repeatpassword = $_POST["repeatpassword"];



// error handelrs 
// call back functions to check for errors within the unput

if(emptyinputlogin($email, $password, $repeatpassword) !== false)  {
    header("location: login.php?error=emptyinput");
    exit();
    }
          
   loginUser($c, $email, $password);
    } else {
    header("location:login.php");
    exit();
}
?> 