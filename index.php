<?php 
    include 'connection.php';
    session_start();
    $user_id = $_SESSION['user_id'];
    if (!isset($user_id)) {
        header('location:login.php');
    }
    if(isset($_POST['logout'])){
        session_destroy();
        header("location: login.php");
    }
    //adding product in wishlist
    if (isset($_POST['add_to_wishlist'])) {
    	$product_id = $_POST['product_id'];
    	$product_name = $_POST['product_name'];
    	$product_price = $_POST['product_price'];
    	$product_image = $_POST['product_image'];

    	$wishlist_number = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE name = '$product_name' AND user_id ='$user_id'") or die('query failed');
    	$cart_num = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id ='$user_id'") or die('query failed');
    	if (mysqli_num_rows($wishlist_number)>0) {
    		$message[]='product already exist in wishlist';
    	}else if (mysqli_num_rows($cart_num)>0) {
    		$message[]='product already exist in cart';
    	}else{
    		mysqli_query($conn, "INSERT INTO `wishlist`(`user_id`,`pid`,`name`,`price`,`image`) VALUES('$user_id','$product_id','$product_name','$product_price','$product_image')");
    		$message[]='product successfuly added in your wishlist';
    	}
    }

     //adding product in cart
    if (isset($_POST['add_to_cart'])) {
    	$product_id = $_POST['product_id'];
    	$product_name = $_POST['product_name'];
    	$product_price = $_POST['product_price'];
    	$product_image = $_POST['product_image'];
    	$product_quantity = $_POST['product_quantity'];

    	$cart_num = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id ='$user_id'") or die('query failed');
    	if (mysqli_num_rows($cart_num)>0) {
    		$message[]='product already exist in cart';
    	}else{
    		mysqli_query($conn, "INSERT INTO `cart`(`user_id`,`pid`,`name`,`price`,`quantity`,`image`) VALUES('$user_id','$product_id','$product_name','$product_price','$product_quantity','$product_image')");
    		$message[]='product successfuly added in your cart';
    	}
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------------------------bootstrap icon link------------------------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <!------------------------default css link------------------------------->
    <link rel="stylesheet" href="stylesheet.css">
    <title>OneStop - home page</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <!------------------------hero img container------------------------------->
    <div class="container-fluid">
            <div class="slider-item">
                <img src="img/img9.PNG" alt="...">
                <div class="slider-caption">
				    <h1>ONE STOP</h1>
                    <h2>Hunting & Fishing Store!!</h2>
                    <p>Your One Stop shop for food, fuel, fishing supplies, hunting equipments, casino, bait, tackle, ammo, and licensing needs</p>
                    <a href="shop.php" class="btn">shop now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="line"></div>
	<div class="hours-container">
		<h1>Our Services</h1>
		<p>Open 7 days a week from 5:00 a.m. to 11:00 p.m.</p>
	</div>
	<!------------------------Service container------------------------------->
    <div class="services-container">
		<div class="service-item">
			<img src="img/img7.png" alt="Food and Deli">
			<h3>Food and Deli</h3>
			<p>Our deli serves the finest subs in the Madison area. Our entire menu is prepared to order, so your sub is guaranteed to be fresh every time! Be sure to check out our online ordering for subs, wraps, and salads!</p>
			<a href="https://onestopsubordering.azurewebsites.net/" class="btn">Online Ordering</a>
		</div>
		<div class="service-item">
			<img src="img/img6.png" alt="Fishing and Hunting">
			<h3>Fishing and Hunting</h3>
			<p>Just minutes away from all your outdoor hunting and fishing opportunities, One Stop has a complete line of ammunition, hunting equipment, tackle, rods, reels, gear, and bait! We also sell Licenses.</p>
			<a href="shop.php" class="btn">Shop Now</a>
		</div>
		<div class="service-item">
			<img src="img/img2.png" alt="Gas and Car Wash">
			<h3>Gas and Car Wash</h3>
			<p>One Stop is dedicated to delivering quality fuel at the pump. Today's engines are engineered with fuel efficiency in mind and demand more out of the fuel products that are put into them. Our fuel keeps critical engine parts clean and running at peak performance.</p>
			<a href="carwash.php" class="btn">Packages & Prices</a>
		</div>
    </div>
	<div class="line2"></div>
	<div class="story">
    	<div class="row">
    		<div class="box">
    			<span>Our Story</span>
    			<p>Founded in 2010, One Stop Madison has been serving the Madison community with a variety of services, from fresh deli subs and quality fuel to outdoor gear for hunting and fishing. We’re committed to providing convenience and exceptional service 7 days a week. Visit us today for all your daily needs, from food to fuel and more! We have the best made-to-order subs and coldest beverages around! Stop in, call, or order online from our deli today!</p>
                <h1>Come check us out!!</h1>
				<a href="shop.php" class="btn">shop now</a>
    		</div>
    		<div class="box">
    			<img src="img/img1.png">
    		</div>
    	</div>
    </div>
    <div class="line3"></div>
	<?php include 'homeshop.php'; ?>
	<div class="line2"></div>
    <div class="newsletter">
		<h1 class="title">Join Our Newsletter</h1>
		<p>Get 15% off your next order. Be the first to learn about promotions, special events, new arrivals and more.</p>
		<div class="newsletter-form">
			<input type="text" id="emailInput" placeholder="your Email Address...">
			<button id="subscribeBtn">Subscribe Now</button>
		</div>
		<p id="successMessage" style="display: none; color: green;"></p>
	</div>
    <div class="line3"></div>
	<?php include 'footer.php'; ?>
	<script type="text/javascript" src="script.js"></script>
</body>

</html>