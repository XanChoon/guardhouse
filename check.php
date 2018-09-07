<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "user");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$ic_no = mysqli_real_escape_string($link, $_REQUEST['ic_no']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$check_in = mysqli_real_escape_string($link, $_REQUEST['check_in']);
$remark = mysqli_real_escape_string($link, $_REQUEST['remark']);
 
// Attempt insert query execution
$sql = "INSERT INTO visitor_info (ic_no, name, check_in, remark) VALUES ('$ic_no', '$name', '$check_in', '$remark')";
if(mysqli_query($link, $sql)){
	echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
    include ("view.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>