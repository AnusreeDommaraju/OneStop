<?php 
    include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------------------------bootstrap icon link------------------------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!------------------------bootstrap css link------------------------------->
	<link rel="stylesheet" href="stylesheet.css">
    <title>OneStop - home page</title>
</head>

<body>
    <section class="popular-brands">
    	<h2>POPULAR BRANDS</h2>
        <?php 
		if (isset($message)) {
			foreach ($message as $message) {
				echo '
					<div class="message">
						<span>'.$message.'</span>
						<i class="bi bi-x-circle" onclick="this.parentElement.remove()"></i>
					</div>
				';
			}
		}
	?>
        <div class="popular-brands-content">
        	<?php 
        		$select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
        		if (mysqli_num_rows($select_products)>0) {
        			while($fetch_products = mysqli_fetch_assoc($select_products)){

        	?>
        	<form method="post" class="card">
        		<img src="image/<?php echo $fetch_products['image']; ?>">
				<div class="product-info">
                    <div class="name"><?php echo $fetch_products['name']; ?></div>
					<div class="cost">$<?php echo $fetch_products['price']; ?>/-</div>
                </div>
        		<input type="hidden" name="product_id" value="<?php echo $fetch_products['id']; ?>">
        		<input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
        		<input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
        		<input type="hidden" name="product_quantity" value="1" min="0">
        		<input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
        		<div class="icon">
        			<button type="submit" name="add_to_wishlist" class="bi bi-heart"></button>
					<a href="view_page.php?pid=<?php echo $fetch_products['id']; ?>" class="bi bi-eye-fill"></a>
        			<button type="submit" name="add_to_cart" class="bi bi-cart"></button>
        		</div>
        	</form>

        	<?php 
        			}
        		}else{
        			echo '<p class="empty">no products added yet!</p>';
        		}
        	?>
        </div>
    </section>
</body>

</html>