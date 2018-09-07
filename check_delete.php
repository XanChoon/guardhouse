<?php

// php code to Update data from mysql database Table

if(isset($_POST['delete']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "user";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   
   //$id = $_POST['id'];
   //$check_out = $_POST['check_out'];
   //$password = $_POST['password'];
   //$age = $_POST['age'];
    $no = $_POST['no'];
           
   // mysql query to Update data
   //$query = "UPDATE `login` SET `username`='".$username."',`password`='".$password."' WHERE `user_id` = $user_id"; 
    $query = "DELETE FROM visitor_info WHERE `no` = $no";
   
   $result = mysqli_query($connect, $query);
   
   if(mysqli_num_rows($query)>0){
		echo "<script type='text/javascript'>alert('data deleted successfull!')</script>";
		include ("view.php");   
   }else{
       echo "<script type='text/javascript'>alert('data deleted unsuccessfull! Your input invalid!!!')</script>";
		include ("view.php");
   }mysqli_close($connect);
}
?>