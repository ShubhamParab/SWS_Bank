<!DOCTYPE html>
<html>
<head>
<title>Home: SWS</title>
<meta charset="utf-8">
<meta name="description" content="Home Page">
<meta name="keyword" content="Banking, E-Transaction, Digital, SWS">
<link rel="stylesheet" href="main.css">
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
<aside id="news">
	<h2 style="color: red;"><u>News</u></h2>
	<details open class="news-item">
		<summary class="news-item-head">CBI lens on top legal firm in PNB scam</summary>
		<p class="news-item-desc">In the ongoing Rs 13,600 crore PNB scam probe, CBI is exploring the option of naming a top legal firm either as a conspirator, or registering a fresh case — for possession of stolen property — after investigating officers found official documents belonging to the bank on its premises.

CBI officials said that during a search at the legal firm’s premises in February, they found documents which ought to have been in the possession of the bank. These documents were handed over by PNB magnitude.</p>
	</details>
	<details class="news-item">
		<summary class="news-item-head">Rupee starts week 10 paisa up at 64.86 against dollar</summary>
		<p class="news-item-desc">The rupee started the week 10 paise up at 64.86 against the dollar after banks and exporters increasingly steered clear of the American currency.

The local currency on Friday had settled at 64.96.

Meanwhile, the stock market had a flat opening following global cues. The BSE Sensex opened up 26.64 points, or 0.08 per cent, at 33,653.61. The NSE Nifty ruled steady, up 2.10 points, or 0.02 per cent, at 10,333.70.

Foreign portfolio investors (FPIs) poured in Rs 535.90 cr ..</p>
	</details>
	<details class="news-item">
		<summary class="news-item-head">SBI to invest Rs 80 bn in hydropower project of Nepal </summary>
		<p class="news-item-desc">The State Bank of India (SBINSE 0.12 %) will be investing a total of Rs 80 billion in the Arun III hydropower project of Nepal, which has 900 megawatts (MW) electricity production capacities.

The SJVN, which has been awarded with the construction of the mega power project of Nepal, has made an informal agreement with the SBI to acquire the investment as a loan and soon will make the formal agreement, sources informed ANI.

"The Director Committee Meeting </p>
	</details>
</aside>
<section id="articles">
	<h2>Articles</h2>
	<details open class="article-item">
		<summary class="article-item-head"> Best Technology Bank of the Year – Large bank category Winner </summary>
		<p class="article-item-desc">This is the most coveted and prestigious award from IBA. Award winner in this category set benchmark in the banking industry for others to follow. We have summed up all major activities being done at GITC to showcase our technical prowess.

The Bank has been offering innovative and cutting-edge products services to its customers with the objective of enabling banking transactions at any time and from anywhere. The Bank’s IT strategy, with digitization and excellence to the core, has evolved in tune with the current consumer trends of social collaboration, mobility, cloud-based platforms, big data analytics, AI,ML, and RPA.

The Bank has adopted the widely-used and practical planning methodology, VMOSA- Vision, Mission, Objectives, Strategies and Action Plan. This has been the guiding force behind setting technological priorities / roadmap etc.

Some successful recent launches- Smart Watch, Roopantar, Mingle( Social Media Banking), Enterprise Mobility Management, AI,ML & RPA based processes are testimony to the fact that the Bank has been in the forefront to embrace Technology to meet the ever increasing customer needs.</p>
	</details>
	<details class="article-item">
		<summary class="article-item-head">Most innovative project using IT </summary>
		<p class="article-item-desc">This is special category irrespective of bank size. The objective of the award in this category is to identify most innovative initiative such as new product, service, application, channel, user interface to improve customer experience, a new process to reduce cost/TAT, a new strategy basing on analytics, big data, AI. It can be for the benefit of customers, employees etc.

We have submitted our project ‘Automated Real-Time Customer Emotion Feedback (ARTCEF).This project is aimed at taking customer feedback of our service using camera which is placed on the front end counter. This first-of-its-kind solution is built using emerging technologies including Artificial Intelligence, Machine Learning and Cognitive. It track the customer’s facial emotion and convert it into tangible output in the form of report. This report can be used for improving the customer service.</p>
	</details>
	<details class="article-item">
		<summary class="article-item-head"> Best Financial Inclusion Initiatives </summary>
		<p class="article-item-desc">This is special category with the objective to extend banking and other financial services to all sections of the society and to achieve inclusiveness. State Bank of India has re-examined and implemented the various strategies to create a vibrant Financial Inclusion Model with appropriate technology platform to optimize delivery of basic financial services to the unbanked and under banked people of India along with spread of Financial Literacy.

Accordingly the Bank has chosen the Kiosk Banking based on Banking Correspondent Model as its spearhead for Financial Inclusion initiative in order to have services delivered at nook and corner of the country at a low cost, affordable both to the customers and sustainable for the service providers.</p>
	</details>
	<details class="article-item">
		<summary class="article-item-head">Best Use of Digital and Channels Technology </summary>
		<p class="article-item-desc">This is the prestigious award for the bank. SBI, the only Indian Bank to find a place in the esteemed club of top 50 banks in the world, is a strong proponent of leveraging information technology to improve efficiency and deliver convenience to its customers. Bank has been offering innovative and cutting-edge products to its customers, with the objective of enabling banking transactions at any time and from anywhere. Bank’s technology strategy has evolved in tune with the current consumer trends of social collaboration, mobility, cloud-based platforms and big data analytics.

As part of digital transformation, SBI has taken strategic steps in implementing latest technology in all the areas of our service offerings to our customers in the last year and we have compartmentalized our service offerings under AI and ML based offerings. As a strategy we had a vision in the year. Most of the services being offered through multiple e-channels.</p>
	</details>
</section>
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
