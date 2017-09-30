<?php
  // Load configuration as an array. Use the actual location of your configuration file
  $config = parse_ini_file('config.ini');

  $conn = mysqli_connect($config['server_location'], $config['user'], $config['password'], $config['db_name']);

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
