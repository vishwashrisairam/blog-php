<?php

 $conn = new mysqli("localhost", "root", "", "blog");
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
  session_start();
  
  $id=$_REQUEST["id"];
  
 
  $sql="DELETE FROM user WHERE userid='$id'";
  
  if(mysqli_query($conn,$sql)){
	  echo "Successfully removed the comment";	
    header("location:{$_SERVER["HTTP_REFERER"]}");  
  }else{
	  echo "Failed";
	  
  }
  
  
  
  ?>