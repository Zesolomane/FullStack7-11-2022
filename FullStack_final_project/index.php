<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
    
    <style> 
       
        .carousel-item{
          height:32rem;
            
        }
    .button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
        
}
        .center {
            text-align: center;
            justify-content: center;
        }
    </style>
  <body>
   <?php  include_once'header.php';
      include_once'footer.php';
      ?>
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="assets/img/green-placeholder.jpg" class="d-block w-100" alt="cool screen"  style="width: 100%">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="assets/img/monitor%20template.jpg" class="d-block w-100" alt="monitors are cool"   style="width: 100%">
    </div>
    <div class="carousel-item">
      <img src="assets/img/monitor2.jpg" class="d-block w-100" alt="..."   style="width: 100%">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      
      <section class="center"> 
      <br> <br>
      <h1> Popular Products can be found in the gallery</h1>
          <button class ="button "> <a href="gallery.php">Gallery</a> </button>

          <br> <br>
      </section>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>