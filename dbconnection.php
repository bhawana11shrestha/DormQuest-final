<?php
      $database="dormquest";
      $localhost="localhost";
      $user="root"; 
      $password="root";
      $conn=mysqli_connect($localhost,$user,$password,$database); 
      if(!$conn){
        die("connection failed:".mysqli_connect_error());
      }else{
       echo "";
      }
?>