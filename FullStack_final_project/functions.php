<?php
function emptyinput($email, $password, $repeatpassword, $username) {
     $result;
    // $x is the result
    if(empty($email) || empty($password) || empty($repeatpassword) || empty($username))
    {
        $result = true; 
    } else {
        $result = false;
    }
     return $result;
}


function test_email($email) {
    $result;
   if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $result=true;
   } 
    else {
       
       $result = false; 
    }
    return $result;
}

function test_input($password, $repeatpassword ) {
   if($password !== $repeatpassword) {
       $result=true;
   } else {
       $result = false;
   }
    return $result;
}
function userExists($c, $email) {
    $sql = "SELECT * FROM userdata WHERE email = ?;";
    $stmt = mysqli_stmt_init($c);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:index.php?error=stmterror");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt);
    
    $resultData = mysqli_stmt_get_result($stmt);
    
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
    function createUser($c, $email, $username, $password) {
        
        $sql = "INSERT INTO userdata (email, username, password) VALUES (?, ?, ?)";
        $stmt = mysqli_stmt_init($c);
        if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:index.php?error=stmterror");
        exit();
        }
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
       
        
        mysqli_stmt_bind_param($stmt,"sss",$email, $username,$hashedPassword);
        mysqli_stmt_execute($stmt); 
        mysqli_stmt_close($stmt);
        header("location:index.php?error=noproblem");
        exit(); 
    }


// the code below if for the login data


function emptyinputlogin($email, $password, $repeatpassword) {
     $result;
    // $x is the result
    if(empty($email) || empty($password)){
        $result = true; 
    } else {
        $result = false;
    }
     return $result;
}

function loginUser($c, $email, $password) {
    // us is substitute for user exists
    $us = userExists($c, $email);
    if($us === false) {
        header("location:login.php?error=falselogin");
        exit();
    }
    // call the column password
    $pwdHashed = $us["password"];
    
    $verifypassword = password_verify($password, $pwdHashed);
    
    if($verifypassword === false) {
        header("location:login.php?error=wrongpassword");
        exit();
            
    } else if ($verifypassword === true) {
        session_start(); // start a session for user to loggin in 
         // start the session under the uid unique data for each user
        $_SESSION["uid"] = $us["uid"];
        // grab the username 
        $_SESSION["username"] = $us["username"];
         header("location:index.php?error=loggenin");
        exit();
    }
}





//function loginUser($email, $password) {
//    // check email
//    
//    
//    
//    $sql = "SELECT * FROM userdata WHERE email = '.$email.' AND password = '.$password' ";
//    
//    mysqli_stmt_init($sql);
//    mysqli_prepare($c, $sql);
//    if(mysqli_num_rows($result) ==1)    {
//        echo "you've successfully logged in ";
//            exit();
//    } else {
//        header("location:login.php?error=flaseinfo");
//    }
//    
//    
//    
//    // check password
//    
//    
//}
?>  