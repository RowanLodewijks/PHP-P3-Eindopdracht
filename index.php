<?php
// if(!isset($_SESSION['user']))
// {
    // header('Location: home.php');
    // exit;
// }
// ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eindopdracht</title>
    <link rel="stylesheet" href="./assets/css/style1.css">
</head>
<body>
    <div id="header">
        <img src="wireframes/logo2.png" id="logo">
        <div class="nav">
            <ul class="nav_links">
                <li><a href="#">Home</a></li>
                <li><a href="bestel.php">Bestel</a></li>
                <li><a href="admin_users.php">Admin</a></li>
            </ul>
        </div>
        <a class="login" href="home.php"><button>Log In</button></a>
    </div>
    <div id="sidebar">
        <h2 class="h2">Prijs:</h2>
        <input type="range" min="1" max="300"><br>
        <h2 class="h2">Merk</h2>
        <input type="radio">
        <label for="wel">Logitech</label>
        <input type="radio">
        <label for="niet">Steelseries</label><br>
        <input type="radio">
        <label for="wel">Razer</label>
        <input type="radio">
        <label for="wel">Ander</label><br>
        <h2 class="h2">soort keyboard</h2>
        <input type="radio">
        <label for="wel">Mechanical</label>
        <input type="radio">
        <label for="niet">Niet mechanical</label><br><br>
        <h2 class="h2">Zoeken<br></h2>
        <input type="text" class="searchbar">
    </div>
    <div id="item">
    <div class="row">
				<div class="items"><a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">Apex
						Pro<br>$199,99</a></div class="items">
				<div class="items"><a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">Apex
						Pro<br>$199,99</a></div class="items">
				<div class="items"><a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">Apex
						Pro<br>$199,99</a></div class="items">
			</div>
			<div class="row">
				<div class="items">
					<a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">
						<figcaption>Apex Pro<br>$199,99</figcaption>
					</a>
				</div class="items">
				<div class="items">
					<a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">
						<figcaption>Apex Pro<br>$199,99</figcaption>
					</a>
				</div class="items">
				<div class="items">
					<a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">
						<figcaption>Apex Pro<br>$199,99</figcaption>
					</a>
				</div class="items">
			</div>
			<div class="row">
				<div class="items">
					<a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">
						<figcaption>Apex Pro<br>$199,99</figcaption>
					</a>
				</div class="items">
				<div class="items">
					<a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">
						<figcaption>Apex Pro<br>$199,99</figcaption>
					</a>
				</div class="items">
				<div class="items">
					<a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">
						<figcaption>Apex Pro<br>$199,99</figcaption>
					</a>
				</div class="items">
			</div>
			<div class="row">
				<div class="items">
					<a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">
						<figcaption>Apex Pro<br>$199,99</figcaption>
					</a>
				</div class="items">
				<div class="items">
					<a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">
						<figcaption>Apex Pro<br>$199,99</figcaption>
					</a>
				</div class="items">
				<div class="items">
					<a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">
						<figcaption>Apex Pro<br>$199,99</figcaption>
					</a>
				</div class="items">
			</div>
			<div class="row">
				<div class="items">
					<a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">
						<figcaption>Apex Pro<br>$199,99</figcaption>
					</a>
				</div class="items">
				<div class="items">
					<a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">
						<figcaption>Apex Pro<br>$199,99</figcaption>
					</a>
				</div class="items">
				<div class="items">
					<a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">
						<figcaption>Apex Pro<br>$199,99</figcaption>
					</a>
				</div class="items">
			</div>
			<div class="row">
				<div class="items">
					<a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">
						<figcaption>Apex Pro<br>$199,99</figcaption>
					</a>
				</div class="items">
				<div class="items">
					<a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">
						<figcaption>Apex Pro<br>$199,99</figcaption>
					</a>
				</div class="items">
				<div class="items">
					<a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">
						<figcaption>Apex Pro<br>$199,99</figcaption>
					</a>
				</div class="items">
			</div>
			<div class="row">
				<div class="items">
					<a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">
						<figcaption>Apex Pro<br>$199,99</figcaption>
					</a>
				</div class="items">
				<div class="items">
					<a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">
						<figcaption>Apex Pro<br>$199,99</figcaption>
					</a>
				</div class="items">
				<div class="items">
					<a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">
						<figcaption>Apex Pro<br>$199,99</figcaption>
					</a>
				</div class="items">
			</div>
			<div class="row">
				<div class="items">
					<a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">
						<figcaption>Apex Pro<br>$199,99</figcaption>
					</a>
				</div class="items">
				<div class="items">
					<a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">
						<figcaption>Apex Pro<br>$199,99</figcaption>
					</a>
				</div class="items">
				<div class="items">
					<a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">
						<figcaption>Apex Pro<br>$199,99</figcaption>
					</a>
				</div class="items">
			</div>
			<div class="row">
				<div class="items">
					<a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">
						<figcaption>Apex Pro<br>$199,99</figcaption>
					</a>
				</div class="items">
				<div class="items">
					<a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">
						<figcaption>Apex Pro<br>$199,99</figcaption>
					</a>
				</div class="items">
				<div class="items">
					<a href="product.html"><img src="./assets/img/apexpro.jpg" class="keyboard">
						<figcaption>Apex Pro<br>$199,99</figcaption>
					</a>
				</div class="items">
			</div>
        </div>
    <div class="footer">
        <div class="one">
            <h3>Credits</h3><br>
            © 10/01/2022<br>
            Rowan Lodewijks<br>
            © 10/01/2022<br>
            Rowan Lodewijks
        </div>
        <div class="one">
            <h3>Website</h3><br>
            Managed Website<br>
            Manage Reputaition<br>
            Power Tools<br>
            Marketing Service
        </div>
        <div class="one">
            <h3>Features</h3><br>
            Managed Website<br>
            Manage Reputaition<br>
            Power Tools<br>
            Marketing Service
        </div>
        <div class="one">
            <h3>Quick Links</h3><br>
            Managed Website<br>
            Manage Reputaition<br>
            Power Tools<br>
            Marketing Service
        </div>
    </div>
</body>
</html>