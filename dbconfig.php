<?php 
  
  $username= "root";
  $password="";
  $server ="localhost";
  $db ="api";

  $conn = mysqli_connect($server,$username,$password,$db);

  if($conn){
      echo "connection sucess";

  }else{
          echo "connection denied";
  }

?>