<!DOCTYPE html>
<html>

<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="./style.css">
</head>

<body>
	<form action="login.php" method="post">
		<h2>LOGIN</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>User Name</label>
		<input type="text" name="uname" placeholder="User Name"><br>

		<label>Password</label>
		<input type="password" name="password" placeholder="Password"><br>

		<button type="submit" class="submit">Login</button>
	</form>
	<a href="register.php">Account aanmaken</a>
</body>

</html>

<!-- open in browser -->
<!-- http://localhost/School-Projecten/Ondernemend%20Gedrag/Gastenboek%20Project/ -->