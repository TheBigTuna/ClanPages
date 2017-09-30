<!DOCTYPE html>
<html>
<?php
	include "partials/head.php"
 	include "db_operations.php"
?>

<body>
	<br/><br/>
	<h1 class="text-center"><a href="/">Start</a></h1>

	<?php include "partials/foot.php" ?>

	<?php
		// Quote and escape form submitted values
		$name = db_quote($_POST['username']);
		$email = db_quote($_POST['email']);

		// Insert the values into the database
		$result = db_query("INSERT INTO `users` (`name`,`email`) VALUES (" . $name . "," . $email . ")");
		if($result === false) {
			$error = db_error();
    		// Send the error to an administrator, log to a file, etc.
		} else {
		    // We successfully inserted a row into the database
		}

		// Select queries
		$rows = db_select("SELECT `name`,`email` FROM `users` WHERE id=5");
		if($rows === false) {
		    $error = db_error();
		    // Handle error - inform administrator, log to file, show error page, etc.
		}


	?>

</body>
</html>
