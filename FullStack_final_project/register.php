  
    <?php
// include the neccessary files
 require_once 'functions.php';
 require_once 'database.php';

    $email = "";
    $password = "";
    $repeatpassword ="";
    $username = "";

     
    // check the server request method
    
      if ($_SERVER["REQUEST_METHOD"]  == "POST") {
        
        
            // value is used to define error
         
            $email = $_POST["email"];
            $password = $_POST["password"];
            $repeatpassword = $_POST["repeatpassword"];
            $username = $_POST["username"];
          
      
      
          
            // emptyinput is used to call back on the  function emptyinput
            // how ever empty inpuut is used to check on errors 
            // if there are no issues with the input the out put will return 
            // true
            if(emptyinput($email, $password, $repeatpassword, $username) !== false)  {
                header("location: signup.php?error=emptyinput");
                exit();
            }
          
            if(test_email($email) !== false)  {
            header("location: signup.php?error=invalidemail");    
            exit();
            }   
            if (test_input($password, $repeatpassword )!== false) {
                header("location: signup.php?error=password?");
                exit();
            }
//            if( test_pwdrepeat($password ,$repeatpassword)!== false) {
//            header("location: index.php?error=passwordnotthesame");
//            exit();
//              }
            if(userExists($c, $email) !== false) {
                header("location: signup.php?error=emailtaken");
                exit();
            }
        
          createUser($c, $email, $username,$password);
    

      }




//    $conn = mysqli_connect('localhost', 'root', 'root', 'userdata');
//   // $q = "INSERT INTO userdata ('username', 'password') VALUES('$email', '$password')" ;
//    $q = "INSERT INTO `userdata`(`username`, `password`)VALUES ('$email','$password')" ;
//    
//    // mysqli_query reads data from the server  or writes to the server
//    // first input is to connect to the server second input reads or write
//    mysqli_query($conn,$q);
//
//    // mysql_close(); disconnects from the server
//        mysqli_close($conn);
//    
//   // echo $email ." ",$password;    
//    echo "Hello World";
    ?>

