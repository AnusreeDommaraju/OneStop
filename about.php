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
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------------------------bootstrap icon link------------------------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="stylesheet.css">
    <title>OneStop - home page</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="banner">
        <div class="detail">
            <h1>About us</h1>
            <p> Serving You with Quality, Convenience, and Care Since 2010! </p>
            <a href="index.php">home</a><span>/ about us</span>
        </div>
    </div>
    <div class="line"></div>
    <!-----------------------about us------------------------>
    <div class="line2"></div>
    <div class="about-us">
        <div class="row">
            <div class="box">
                <div class="title">
                    <h1>ABOUT OUR STORE</h1>
                    <span>15 years of Community Service experience!!</span>
                </div>
                <p>One Stop Madison has proudly been serving the Madison community since 2010.
                We offer a wide range of services, including freshly made deli subs, quality fuel,
                outdoor gear for hunting and fishing, and more. Whether you're looking for a hearty meal,
                premium gas, or outdoor equipment, we've got you covered. We are open 7 days a week 
                from 5:00 a.m. to 11:00 p.m., ensuring that we meet your daily needs.
                Visit us for the best subs, fishing and hunting supplies, fuel, and car wash services
                — all in one convenient stop!</p>
            </div>
            <div class="container-fluid">
                <div class="slider-item">
                    <img src="img/img1.PNG">
                </div>
            </div>
        </div>
    </div>
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