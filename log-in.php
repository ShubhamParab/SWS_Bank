<?php

  include 'db_user.php';

  $conn = OpenCon();
  echo "Database connected successfully<br>";

  $email = $_POST['login-email'];
  $pass = $_POST['login-password'];
  echo 'Email: '.$email.' Password: '.$pass.'<br>';
  echo 'Signing In...<br>';

  $query = "SELECT * FROM user WHERE email = '". $email ."' AND password = '". $pass ."'" ;
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    //Pass
    session_start();
    while($row = mysqli_fetch_assoc($result)){
      $_SESSION['username'] = $row['username'];
      $_SESSION['password'] = $row['password'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['acid'] = $row['acid'];
      $_SESSION['balance'] = $row['balance'];
    }
    header("Location: home.php");
    exit();
  } else {
    echo "<h1>Account NOT FOUND!</h1><br><h2>Signing In Failed</h2>";
    //Fail
  }

  CloseCon($conn);

?>
