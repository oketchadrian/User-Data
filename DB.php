<?php
    $fullname = $_POST ['fullname'];
    $PhoneNumber = $_POST ['Phone Number'];
    $Email = $_POST ['Email'];
    $Country = $_POST ['Country'];

    //DB connection  
   $con = new mysqli('localhost', 'root', '', 'person');
   if($con->connect_error){
      die('Not sent :'. $con->connect_error);
   }
   else{
      $stmt = $con->prepare("INSERT INTO Data(fullname, PhoneNumber, Email, Country), VALUES(?, ?, ?, ?)");
      $stmt->bind_param("siss", $fullname, $PhoneNumber, $Email, $Country);
      $stmt->execute();
      echo "Submitted succesfully";
      $stmt->close();
      $stmt->close();

   }
?>
    