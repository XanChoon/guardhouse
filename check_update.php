<?php

// php code to Update data from mysql database Table

if(isset($_POST['update'])){    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "user";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   //$id = $_POST['id'];
   //$password = $_POST['password'];
   //$age = $_POST['age'];
   $no = $_POST['no'];
   $check_out = $_POST['check_out'];

   // mysql query to Update data
   $query = "UPDATE `visitor_info` SET `check_out`='".$check_out."' WHERE `no` = $no";
  
   $result = mysqli_query($connect, $query);
   
   if(mysqli_num_rows($query)>0){
		echo "<script type='text/javascript'>alert('data updated successfull!')</script>";
		include ("view.php");   
   }else{
       echo "<script type='text/javascript'>alert('Your input invalid!!!')</script>";
	   include ("view.php");  
   }mysqli_close($connect);
}
?>