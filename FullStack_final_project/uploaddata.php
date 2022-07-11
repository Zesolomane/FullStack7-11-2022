

<?php 
include_once 'database.php';

if(isset($_POST['submit'])) {
   
    $newFileName = $_POST['filename'];
    
    if(empty($newFileName)) {
        $newFileName = "gallery";
    }
    else {
    // replace any spacs with a dash for new file data
        $newFileName = strtolower(str_replace(" ", "-",$newFileName));
    }
    
    $imageName = $_POST['name'];
    $imageDescription = $_POST['description'];
    $imageQuantity = $_POST['quantity'];
    $imageFileName = $_POST['filename'];
    $imgPrice = $_POST['price'];
    
    
    $file = $_FILES['file'];
    $fileName = $_FILES["file"]["name"];    
    $fileType = $_FILES["file"]["type"];
    $fileTmpName = $_FILES["file"]['tmp_name'];
    $fileError = $_FILES['file']['error'];
    $fileSize = $_FILES['file']['size'];

    
    
 
    
     $fileExt = explode(".", $fileName);
    // after the explode you will be left with ex: Donda.png -> Donda png
    // make the file end lowercase for the check
    $fileActualExt = strtolower(end($fileExt));
    // now we check for file type 
    $allowed = array("jpg", "jpeg", "png");

     // in array checks if both contain the same value
        if(in_array($fileActualExt, $allowed)) {
            if($fileError === 0) {
                if($fileSize < 5000000) {
                    $imageFullName = $newFileName . "." . uniqid("", true) ."." .$fileActualExt;
                      
                    $fileDestination = "images/gallery/" .$imageFullName;
                    $sql = "SELECT * FROM gallery;";
                    
                    // error handle
                      if(empty($imageName) ||empty($imageDescription) || empty($imageQuantity) || empty($file) ||empty($imageFileName) ||empty($imgPrice)) {
        header("location:upload.php?error=emptyfields");
        exit();
                      }   else  {
                          // expermental part
                          $Sql = "SELECT * FROM gallery;";
                          $stmt = mysqli_stmt_init($c);
                          
                          if (!mysqli_stmt_prepare($stmt, $sql)) {
                              
                              echo "error1";
                          } else {
                              mysqli_stmt_execute($stmt);
                              $result = mysqli_stmt_get_result($stmt);
                              $rowCount = mysqli_num_rows($result);
                              $setImageOrder = $rowCount + +1;
                              
                              $sql = "INSERT INTO gallery (`prodTitle`, `prodDescription`, `imgFullNameGallery`, `orderGallery`, `price`) VALUES (?,?,?,?,?);";
                              
                              
                          if (!mysqli_stmt_prepare($stmt, $sql)) {
                              echo "error2";
                          } else {
                              mysqli_stmt_bind_param($stmt, "sssss",$imageName, $imageDescription, $imageFullName, $setImageOrder, $imgPrice);
                              mysqli_stmt_execute($stmt);
                              
                              move_uploaded_file($fileTmpName, $fileDestination);
                              header("location:gallery.php");
                          }
                              
                          }
                          
                          // expermnental part
    
                } 
//                    else {
//                     header("location:upload.php?error=sQL issues");
//                   
//                    exit();
//                }
            }
        }  else {
             header("location:upload.php?error=tooLarge");
         
            exit();
        }
    


    
} else {
        header("location:upload.php?error=WrongfileErr");
         
            exit();    
        }

}
    

        
?>












