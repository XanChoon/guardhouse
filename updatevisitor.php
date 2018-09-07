<!DOCTYPE html>

<html>

    <head>
        <title>UPDATE DATA </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <form action="check_update.php" method="post">
			No <input type="number" name="no" required><br><br>
			Check Out <input type="datetime-local" name="check_out" required><br><br>
            <input type="submit" name="update" value="Update Data">
        </form>
    </body>
</html>