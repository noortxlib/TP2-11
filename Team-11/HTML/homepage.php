<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/homePage.css">
    <title>STEP CORRECT</title>
</head>

<body>
    <?php
    include_once "header.php";
    ?>

	<main>
		<section class="hero-section">
			<h2>Step Up Your Style</h2>
			<p>Find the perfect pair of shoes to match your style.</p>
        <a href="../HTML/search.php" class="btn">SEARCH NOW</a>
    </div>
  </div>

		</section>

		<section class="featured-section">
			<h2>Featured Products</h2>

			<div class="product">
				<img src="../Images/Male Black Nike court vision low better trainers.jpg"alt="">
				<h3>Men Black Nike court vision low better trainers</h3>
				<p class="price">£119.99</p>
				<a href="../HTML/productPageMen.php?category=11" class="button"> Men's Lows</a>
			</div>

			<div class="product">
				<img src="../Images/chunkysandals.jpg" alt="">
				<h3>Women Black Chunky Sandals</h3>
				<p class="price">£29.99</p>
				<a href="../HTML/womens.php?category=5" class="button"> Women's Sandals</a>
			</div>

			<div class="product">
				<img src="../Images/Kids Black Schuh loopy leather school shoe.jpg" alt="">
				<h3>Unisex Kids Black Schuh loopy leather school shoe </h3>
				<p class="price">£39.99</p>
				<a href="../HTML/productPagekids.php?category=14" class="button"> Kids's Smart Shoes</a>
			</div>
		</section>
	</main>

</body>
</html>
    
<?php
include('footer.php');
?>
