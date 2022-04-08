
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bedankpagina</title>
    <link rel="stylesheet" href="assets/css/bedankt.css">
</head>
<body>
<div id="container">
        <div id="header">
            <a href="index.html"><img src="wireframes/logo2.png" id="logo"></a>
        </div>
        <div id="item">
        <?php
            if ( isset( $_POST['submit'] )) {
                echo " formulier is verstuurd<br>";
                $voornaam = $_POST['voornaam'];
                $tussenvoegsel = $_POST['tussenvoegsel'];
                $achternaam = $_POST['achternaam'];
                $email = $_POST['email'];
                echo "Beste ".$voornaam.", Bedankt voor uw aankoop.<br>";
            }
        ?>
        <img src="./assets/img/checkmark.png" class="checkmark">
        </div>
        <div id="footer">
            <div id="footertext">
                © 10/01/2022 Rowan Lodewijks
            </div>
        </div>
    </div>
</body>
</html>