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
    if (isset($_POST['submit-btn'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $number = mysqli_real_escape_string($conn, $_POST['number']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);

        $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name= '$name' AND email='$email' AND $number = '$number' AND message= '$message'") or die('query failed');
        if (mysqli_num_rows($select_message)>0) {
            echo 'message already send';
        }else{
            mysqli_query($conn, "INSERT INTO `message`(`user_id`,`name`,`email`,`number`,`message`) VALUES('$user_id','$name','$email','$number','$message')") or die('query failed');
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
    <link rel="stylesheet" href="stylesheet.css">
    <title>OneStop - contact us page</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="banner">
        <div class="detail">
            <h1>Contact Us !</h1>
            <p>Get in Touch – We’re Here to Help, Anytime!</p>
            <a href="index.php">home</a><span>/ contact</span>
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
			<a href="#" class="btn">Online Ordering</a>
		</div>
		<div class="service-item">
			<img src="img/img6.png" alt="Fishing and Hunting">
			<h3>Fishing and Hunting</h3>
			<a href="#" class="btn">Shop Now</a>
		</div>
		<div class="service-item">
			<img src="img/img2.png" alt="Gas and Car Wash">
			<h3>Gas and Car Wash</h3>
			<a href="#" class="btn">Packages & Prices</a>
		</div>
    </div>
    <div class="line2"></div>
    <div class="form-container">
        <h1 class="title">Leave Us a Message</h1>
        <form method="post">
            <div class="input-field">
                <label>your name</label><br>
                <input type="text" name="name">
            </div>
            <div class="input-field">
                <label>your email</label><br>
                <input type="text" name="email">
            </div>
            <div class="input-field">
                <label>number</label><br>
                <input type="number" name="number">
            </div>
            <div class="input-field">
                <label>your message</label><br>
                <textarea name="message"></textarea>
            </div>
            <button type="submit" name="submit-btn">Send Message</button>
        </form>
    </div>
    <div class="line"></div>
    <div class="line2"></div>
    <div class="address">
        <h1 class="title">Our Contact</h1>
        <div class="row">
            <div class="box">
                <i class="bi bi-map-fill"></i>
                <div>
                    <h4>address</h4>
                    <p>1104 NW 2nd St JCT 81 & 34 Madison, SD 57042</p>
                </div>
            </div>
            <div class="box">
                <i class="bi bi-telephone-fill"></i>
                <div>
                    <h4>phone number</h4>
                    <p>(605) 256-9711</p>
                </div>
            </div>
            <div class="box">
                <i class="bi bi-envelope-fill"></i>
                <div>
                    <h4>email</h4>
                    <p>onestopmadison@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
    <div class="line3"></div>
    <?php include 'footer.php'; ?>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>