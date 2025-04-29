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
    
    <!------------------------default css link------------------------------->
    <link rel="stylesheet" href="stylesheet.css">
    <title>OneStop - home page</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="line2"></div>
	<div class="hours-container">
		<h1>Car Wash and Packaging Services</h1>
		<p>Open 7 days a week from 5:00 a.m. to 11:00 p.m.</p>
	</div>
    <div class="line2"></div>
	<!------------------------Service container------------------------------->
    <div class="services-container">
		<div class="service-item">
			<h3>Basic Wash-$8.00</h3>
			<p>Double Pass Foam Bath <br>
            High Velocity Wash<br>
            Spot Free Rinse</p>
		</div>
		<div class="service-item">
			<h3>Deluxe Wash-$9.00</h3>
			<p>Underbody and Wheel Blast <br>
            Double Pass Foam Bath<br>
            High Velocity Wash<br>
            Spot Free Rinse<br>
            High Velocity Dryer</p>
		</div>
		<div class="service-item">
			<h3>Premium Wash-$10.00</h3>
			<p>Underbody and Wheel Blast<br>
            Double Pass Foam Bath<br>
            High Velocity Wash<br>
            Clear Coat Protectant<br>
            Spot Free Rinse<br>
            High Velocity Dryer</p>
		</div>
        <div class="service-item">
			<h3>Ultimate Wash-$11.00</h3>
			<p>Underbody and Wheel Blast<br>
            Double Pass Foam Bath<br>
            High Velocity Wash<br>
            Triple Foam Wash<br>
            Clear Coat Protectant<br>
            Spot Free Rinse<br>
            High Velocity Dryer</p>
		</div>
    </div>
    <div class="line3"></div>
	<?php include 'footer.php'; ?>
</body>

</html>