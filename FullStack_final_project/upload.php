<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      
    <link rel ="stylesheet" href="assets/css/style.css">  
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
<?php 
      include_once 'header.php';
      ?> 
      <br> <br> <br> <h1> Upload Product</h1>
      <form action="uploaddata.php" method= "POST"  enctype="multipart/form-data">
        
        <div>
          
        </div>  
       <input type="file" name="file">
             <p class="error"> <br> There was a problem  with the selected file type </p>
         <br> Name:
       <br><input type="text" name="name" placeholder="Name">      
          <br><br> Product Description <br>
       <input type="text" name="description" placeholder="Description">      
          <br><br> Product Quantity <br>
        <input type="text" name="quantity" placeholder="Quantity">      
          <br><br> File Name <br>
          <input type= "text" name="filename" placeholder= "File-Name">
          <br><br> Product Price <br>
          <input type= "text" name="price" placeholder= "Price">
          <br><br> 
      <input type= "submit" name="submit">
      <br>
      </form>
      
      <?php 
      
//      include_once 'uploaddata.php';
    
      
      ?>
      
      <?php 
      include_once 'footer.php';
      ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>