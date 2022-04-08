<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestelpagina</title>
    <link rel="stylesheet" href="./assets/css/bestel.css">
</head>

<body>
    <div id="header">
        <img src="wireframes/logo2.png" id="logo">
        <div class="nav">
            <ul class="nav_links">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Bestel</a></li>
                <li><a href="admin_users.php">Admin</a></li>
            </ul>
        </div>
        <a class="login" href="home.php"><button>Log In</button></a>
    </div>
    <div class="item">
        <form method="POST" action="bedankt.php">
            <div class="deel1">
                <h2>Bestel</h2>
                Voornaam, tussenvoegsel, achternaam:<br>
                Straat:<br>
                Huisnummer:<br>
                Postcode:<br>
                Woonplaats:<br>
                Telefoonnummer:<br>
                E-mailadres:<br>
                Rekeningnummer:
            </div>
            <div class="deel2">
                <form method="POST" action="bedankt.php">
                    <input type="text" name="voornaam" required>, <input type="text" name="tussenvoegsel">, <input type="text" name="achternaam" required><br>
                    <input type="text" required><br>
                    <input type="text" required><br>
                    <input type="text" required><br>
                    <input type="text" required><br>
                    <input type="text"><br>
                    <input type="text" name="email" required><br>
                    <input type="text" required><br><br>
                    <input type="submit" class="submit" name="submit"><br>
                </form>
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