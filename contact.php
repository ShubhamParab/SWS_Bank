<!DOCTYPE html>
<html>
<head>
<title>Contact Us: SWS</title>
<meta charset="utf-8">
<meta name="description" content="Home Page">
<meta name="keyword" content="Banking, E-Transaction, Digital, SWS">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="contact.css">
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
<div id="content" align="left">
	<div id="contact">
		<h3>Contact Here: </h3>
		<h4>Main Branch: Byculla</h4>
		<h4>Timing: 08:00 to 22:00</h4>
		<p class="address">32, 2, MHSS Road, Byculla (E)</p>
	</div>
<div id="loc-list">
<center><h2>Location List: </h2></center>
<div class="loc-list-item">
	<h3>Loction: Byculla</h3>
	<h4>Timing: 08:00 to 22:00</h4>
	<p class="address">32, 2, MHSS Road, Byculla (E)</p>
</div>
<div class="loc-list-item">
	<h3>Loction: Byculla</h3>
	<h4>Timing: 08:00 to 22:00</h4>
	<p class="address">32, 2, MHSS Road, Byculla (E)</p>
</div>
<div class="loc-list-item">
	<h3>Loction: Byculla</h3>
	<h4>Timing: 08:00 to 22:00</h4>
	<p class="address">32, 2, MHSS Road, Byculla (E)</p>
</div>
</div>
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
