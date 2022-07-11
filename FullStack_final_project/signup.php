<!DOCTYPE html>
<html>
<?php 
include_once'header.php';    
?>
<head>
<title>
    
</title>    
</head>
    <style>
        .form{
            text-align:center;
            justify-content: Center;
        }
        input[type=submit] {
            background-color: black;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
        }
    </style>
<body class= "form">
<h1> <br> <br> <br> Sign Up</h1>
    <form method="post" action="register.php">
    
        Email :<br> <input type="text"  name="email" > 
    <br>
        Username: <br> <input type="test" name="username">
        <br>
        Password:<br> <input type="text" name="password" >
        <br>
        
        Password-validation: <br> <input type="text" name="repeatpassword" >
        <br>
        <input type="submit" name="submit">
    </form>

      ?>
      
      <?php 
      include_once 'footer.php';
      ?>
</body>

</html>