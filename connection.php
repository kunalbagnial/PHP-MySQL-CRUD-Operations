<?php
   $host = "localhost";
   $username = "root";
   $password = "";
   $dbname = "test1";
   // connection
   $conn = mysqli_connect($host,$username,$password,$dbname);
   //check
   if($conn){
       echo "";
   }else{
       die("Connection Failed :". mysqli_connect_error());
   }
?>