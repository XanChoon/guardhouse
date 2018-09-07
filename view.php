<!DOCTYPE html>
<html>
<head>
<title>View Visitor</title>
<h1>Visitor History</h1>
<h2><a href = "index.php">Insert Form</a></h2>
<h2><a href = "updatevisitor.php">Update Visitor Check Out</a></h2>
<h2><a href = "deletevisitor.php">Delete Visitor</a></h2>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>

<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT no, ic_no, name, check_in, remark, check_out FROM visitor_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>No.</th><th>IC NO.</th><th>Name</th><th>Check In Time</th>
	<th>Remark</th><th>Check Out</th>
	</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["no"]. "</td><td>" . $row["ic_no"]. "</td><td>" . $row["name"]
		. "</td><td>" . $row["check_in"]. "</td><td>" . $row["remark"]. "</td><td>" . $row["check_out"];
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>