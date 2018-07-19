<!DOCTYPE html>
<html>
<head>
<title>Personal Banking: SWS</title>
<meta charset="utf-8">
<meta name="description" content="Home Page">
<meta name="keyword" content="Banking, E-Transaction, Digital, SWS">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="per_bank.css">
</head>
<body>
<header align="center">
<div id="login_module">
	<nav>
		<?php
			session_start();
			if(isset($_SESSION['username'])){
				echo "<a href='logout.php'>(Logout) ".$_SESSION['username']."</a>";
			}else{
				echo "<a href='login.php'>Login</a>";
			}
		 ?>
	</nav>
</div>
<center><h1 id="title">SWS Bank</h1><center>
<nav id="main_menu">
	<a href="home.php" class="main_menu_item">Home </a>
	<a href="per_bank.php" class="main_menu_item">Personal Banking </a>
	<a href="about.php" class="main_menu_item">About Us </a>
	<a href="contact.php" class="main_menu_item">Contact Us </a>
</nav>
</header>
<!-- content -->
<div id="content" align="center">
<div id="make-transaction">
<h2>Make Transaction</h2>
<form action="trans.php" method="post">
	<label>Receiver ID:</label>
	<input type="number" value="<?= $_SESSION['acid'] ?>" name="sen-id" readonly>
	<input type="number" placeholder="Receiver ID" name="rec-id">
	<label>Amount</label>
	<input type="number" placeholder="Amount" name="amount">
	<input type="submit" value="Do transaction">
</form>
</div>
<div id="ac-profile" align="left">
	<div id="ac-head">Account Information: </div>
	<div id="ac-no">Account No: <?= $_SESSION['acid']; ?> </div>
	<div id="ac-type">Account Type: Savings Account</div>
	<div id="ac-amount">Account Balance: <?= $_SESSION['balance']; ?></div>
</div>
<h2>Recent transactions</h2>
<div id="transaction-list" align="left">
	<?php
	// for($i = 0; $i < 10; $i++){
	// 	echo " <div class='transaction-list-item'> ";
	// 	echo " <div class='transaction-list-item-head'>ID10001</div> ";
	// 	echo "	<div class='transaction-list-item-other-id'>Other's id: PR10001</div> ";
	// 	echo "	<div class='transaction-list-item-amount'>Rs. 10000</div> ";
	// 	echo "  <div class='transaction-list-item-status' style='background-color: red;'>Sent</div> ";
	// 	echo "	</div> ";
	// }
	$query = "SELECT * FROM transactions WHERE rid = '". $_SESSION['acid'] ."' OR sid = '". $_SESSION['acid']. "' ORDER BY time DESC" ;
	include 'db_user.php';
	$conn = OpenCon();
	$result = mysqli_query($conn, $query);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
				if($row["sid"] == $_SESSION['acid']){
						echo " <div class='transaction-list-item'> ";
						echo " <div class='transaction-list-item-head'>Transaction ID: ".$row['tid']." &nbsp&nbsp&nbsp&nbsp Date: ".$row['date']." &nbsp&nbsp&nbsp&nbsp Time: ".$row['time']."</div> ";
						echo "	<div class='transaction-list-item-other-id'>Other's id: ".$row['rid']."</div> ";
						echo "	<div class='transaction-list-item-amount'>Rs. ".$row['amount']."</div> ";
						echo "  <div class='transaction-list-item-status' style='background-color: red;'>Sent</div> ";
						echo "	</div> ";
				}else{
						echo " <div class='transaction-list-item'> ";
						echo " <div class='transaction-list-item-head'>Transaction ID: ".$row['tid']." &nbsp&nbsp&nbsp&nbsp Date: ".$row['date']." &nbsp&nbsp&nbsp&nbsp Time: ".$row['time']."</div> ";
						echo "	<div class='transaction-list-item-other-id'>Other's id: ".$row['sid']."</div> ";
						echo "	<div class='transaction-list-item-amount'>Rs. ".$row['amount']."</div> ";
						echo "  <div class='transaction-list-item-status' style='background-color: green;'>Received</div> ";
						echo "	</div> ";
				}
		}
	}else{
		echo "<script>alert('No transactional data found!')</script>";
	}

	CloseCon($conn);
	?>
</div>
</div>
<!-- content-end -->
<footer>
<hr>
<span>
	<nav id="foot-menu">|
		<a class="foot-menu-item">Privacy</a>|
		<a class="foot-menu-item">Cookies</a>|
		<a class="foot-menu-item">Advertise</a>|
		<a class="foot-menu-item">Support</a>|
	</nav>
</span>
</footer>
</body>
</html>
