<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      
     <link rel="stylesheet" href="assets/css/style.css" >  
  </head>
  <body>
      
      
      <?php include_once 'header.php'; ?>
       
      <br><br>
          <h1 class="alone align-middle">  Propducts </h1>
          <br><br>
      
      <section>
         <div class ="container"> 
      <?php
      
       include_once 'database.php';
      
         
           
      
       $sql = "SELECT * FROM  gallery ORDER BY orderGallery DESC ";
       $stmt = mysqli_stmt_init($c);
       if (!mysqli_stmt_prepare($stmt, $sql)) {
           echo "sql failed";
       } else {
           mysqli_stmt_execute($stmt);
           $result = mysqli_stmt_get_result($stmt);
           while($row = mysqli_fetch_assoc($result)) {
               echo '<div class = "card "> 
              <div>  
                    <a href ="gallery.php">
                    
                        <div class="box" style ="background-image:url(images/gallery/'.$row["imgFullNameGallery"].')"> </div>
                        <div class="contents2">
                        <h1> '.$row["prodTitle"].' </h1>
                        <p>'.$row["prodDescription"].'</p>
                        <button> '.$row["price"].'</button>
                        </div>
                    </a>
                </div>
          </div>';
           }
       }
           ?>
          
        
          
<!--
          <div class = "card"> 
              <div>  
                    <a href ="gallery.php">
                        <div class="box"> </div>
                        <h2>Prod</h2>
                        <button> Price</button>
                    </a>
                </div>
          </div>
-->

             
             </div>
      </section>
     
      <sectionn>
      
      
     
      
      <?php 
      include_once 'footer.php';
      ?>
      </sectionn>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>