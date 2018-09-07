<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Visitor</title>
<h1>Visitor Register</h1>
<h2><a href = "view.php">View Visitor</a></h2>
</head>

<body>
<form action="check.php" method="post">
    <p>
        <label for="ic_no">IC No.:</label>
        <input type="number" name="ic_no" id="ic_no" required="required">
    </p>
    <p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required="required">
    </p>
	<p>
        <label for="check_in">Check In</label>
        <input type="datetime-local" name="check_in" id="check_in" required="required">
    </p>
    <p>
        <label for="remark">Remark:</label>
		<input type="text" name="remark" id="remark" size="35" required="required" >
    </p>
	
    <input type="submit" value="Submit">
</form>
</body>
</html>