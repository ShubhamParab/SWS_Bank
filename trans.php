<?php
  include 'db_user.php';

  $conn = OpenCon();

  $sid = $_POST['sen-id'];
  $rid = $_POST['rec-id'];
  $amount = $_POST['amount'];

  $datetime = localtime(time(), true);
  $date = $datetime['tm_mday']."/".$datetime['tm_mon']."/".$datetime['tm_year'];
  $time = $datetime['tm_hour'].":".$datetime['tm_min'].":".$datetime['tm_sec'];

  $sql = "INSERT INTO transactions(tid, sid, rid, amount, date, time) VALUES('".rand(1000, 10000)."', '".$sid."', '".$rid."', '".$amount."', '".$date."', '".$time."')";

  if(mysqli_query($conn, $sql)){
    echo "<script>alert('Transaction successfully!')</script>";
  }else{
    echo "<script>alert('Transaction Failed!')</script>";
  }

  // balancing the accounts
  $sql = "UPDATE user SET balance = balance - ".$amount." WHERE acid = ".$sid.";";
  if(mysqli_query($conn, $sql)){
    echo "<script>alert('Amount debited from your a/c.!')</script>";
  }else{
    echo "<script>alert('Amount debit failed!')</script>";
  }
  $sql = "UPDATE user SET balance = balance + ".$amount." WHERE acid = ".$rid.";";
  if(mysqli_query($conn, $sql)){
    echo "<script>alert('Amount credited to ".$rid."!')</script>";
  }else{
    echo "<script>alert('Amount credit Failed!')</script>";
  }

  $query = "SELECT * FROM user WHERE acid = '". $sid ."'" ;
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
    header("Location: per_bank.php");
    exit();
  } else {
    echo "<h1>Account NOT FOUND!</h1><br><h2>Signing In Failed</h2>";
    //Fail
  }

  CloseCon($conn);
?>
