<?php

  include 'db_user.php';

  $conn = OpenCon();
  echo "Database connected successfully<br>";

  $email = $_POST['signup-email'];
  $pass = $_POST['signup-password'];
  $username = $_POST['signup-username'];
  echo "<h1>Signing Up User: ".$username. " Password: " . $pass. "</h1>";
  $query = "INSERT INTO user(username, password, email, acid, balance) VALUES('".$username."', '".$pass."', '".$email."', '".rand(999, 9999)."', '5000')";
  $result = mysqli_query($conn, $query);
  if ($result) {
    //Pass
    echo "Entry successfully!";
  } else {
    //Fail
    echo "Entry unsuccessfully!";
  }

  CloseCon($conn);

?>
