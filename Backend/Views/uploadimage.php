<?php  
 $connect = mysqli_connect("localhost", "root", "azizsahnoun5", "test");  
 if(isset($_POST["image"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO teams(image) VALUES ('$file')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  