<!DOCTYPE html>
<html>
<head>
<title>About: SWS</title>
<meta charset="utf-8">
<meta name="description" content="Home Page">
<meta name="keyword" content="Banking, E-Transaction, Digital, SWS">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="about.css">
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
<center><div id="content" align="center">
	<h1> About Us </h1>
	<p>State Bank of India (SBI) is an Indian multinational, public sector banking and financial services company. It is a government-owned corporation with its headquarters in Mumbai, Maharashtra. On April 1, 2017, the State Bank of India, which was India's largest bank, merged with five of its associate banks (State Bank of Bikaner & Jaipur, State Bank of Hyderabad, State Bank of Mysore, State Bank of Patiala and State Bank of Travancore), and with the Bharatiya Mahila Bank. This was the first ever large scale consolidation in the Indian banking industry. With the merger, SBI became one of the 50 largest banks in the world (balance sheet size of ₹33 trillion, 278,000 employees, 420 million customers, and more than 24,000 branches and 59,000 ATMs). SBI's market share was projected to increase to 22 percent from 17 per cent.[5] It has 198 offices in 37 countries; 301 correspondents in 72 countries.[6] The company is ranked 232nd on the Fortune Global 500 list of the world's biggest corporations as of 2016.[7]
	<figure>
		<img src="place.jpg" style="width: 300px; height: 400px;"></img>
		<figcaption>HQ</figcaption>
	</figure>
The bank descends from the Bank of Calcutta, founded in 1806, via the Imperial Bank of India, making it the oldest commercial bank in the Indian subcontinent. The Bank of Madras merged into the other two "presidency banks" in British India, the Bank of Calcutta and the Bank of Bombay, to form the Imperial Bank of India, which in turn became the State Bank of India in 1955.[8] The Government of India took control of the Imperial Bank of India in 1955, with Reserve Bank of India (India's central bank) taking a 60% stake, renaming it the State Bank of India. In 2008, the government took over the stake held by the Reserve Bank of India.</p>
</div></center>
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
