<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title><?= $title ?></title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/styleFormContact.css">
	<!-- <link rel="stylesheet" type="text/css" href="css\fontawesome-free-5.11.1-web\fontawesome-free-5.11.1-web\css\all.css"> -->
	<!-- change for validation html "\" to "/" -->
	<link rel="stylesheet" type="text/css" href="css/fontawesome-free-5.11.1-web/fontawesome-free-5.11.1-web/css/all.css">
	<!-- Include bxSlider CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
	<link rel="icon" href="images/products/football-boots.png">
</head>
<body>

<div id="wrapper">
     <!-- HEADER -->
	<header id="header">
		<div class="top-header-fixed">
			<div id="mobile_cart_container">

			<button id="menu-toggle" class="hide btn-menu" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"  aria-expanded="false" aria-label="Toggle navigation" >
			    <i class="fas fa-bars mr"></i><span class="">Menu</span> 
			</button>

			<div id="mobile_cart">
				<a href="#"><i class="fas fa-lock mr"></i>Login</a>
				 <a href="#">
				     <i class="fas fa-shopping-cart"></i>
				     <span class="view_cart">View Cart</span>
				     <span class="count_item">0 items</span>
			     </a>
			</div>
			</div>
			<nav id="mobile_main_menu">
				<ul id="menu" class="show">
					<li><a href="#"><i class="fas fa-lock mr"></i>Login</a></li>
					<li><a href="index.php"><i class="far fa-circle mr"></i>Home</a></li>
					<li><a href="#"><i class="far fa-circle mr"></i>About SW</a></li>
					<li><a href="contact.php"><i class="far fa-circle mr"></i>Contact Us</a></li>
					<li><a href="#"><i class="far fa-circle mr"></i>View products</a></li>
				</ul>
			</nav>
		</div>	

	<!-- here logo_search_container -->
		<?php include "templates/searchForm.html.php"; ?>
		
	<nav id="mobile-sub-menu">
		<ul>
			<?php 
			 require_once("categories.php");
			 foreach ($category_rows as $key => $row):
				$categoryId = $row['CategoryID']; 
				$categoryName = $row['CategoryName'];
			?>
			<!-- rawurlencode for replace space in url to + ,it was error validation html url beacuse have two word with space its not right for url -->
			<li><a href="products.php?category=<?= rawurlencode($categoryName) ?>"><?=$categoryName?><i class="fas fa-angle-right"></i></a></li>
			<?php endforeach; ?>
		
			<!-- <li><a href="products.php?category=shoes">Shoes<i class="fas fa-angle-right"></i></a></li>
			<li class="active"><a href="products.php?category=helmets">Helmets<i class="fas fa-angle-right"></i></a></li>
			<li><a href="products.php?category=pants">Pants<i class="fas fa-angle-right"></i></a></li>
			<li><a href="products.php?category=tops">Tops<i class="fas fa-angle-right"></i></a></li>
			<li><a href="products.php?category=balls">Balls<i class="fas fa-angle-right"></i></a></li>
			<li><a href="products.php?category=equipment">Equipment<i class="fas fa-angle-right"></i></a></li>
			<li><a href="products.php?category=training gear">Training gear<i class="fas fa-angle-right"></i></a></li> -->
		</ul>
	</nav>    
	</header>
