<?php
$server_location="localhost";
$user="ndh175_admin";
$password="Silver12";
$db_name="ndh175_ou_life";

  $conn = mysqli_connect($server_location, $user, $password, $db_name);

  if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());
  }

  $hashed = hash('sha512', $_POST["password"]);

  $sql = "INSERT INTO students (student_name, student_dorm, student_standing, student_email, student_password)
    VALUES ('" . $_POST["name"] . "', '" . $_POST["dorm"] . "', '" . $_POST["standing"] . "', '" . $_POST["email"] . "', '" . $hashed . "')";

  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
?>
