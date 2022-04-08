<?php
include "db_conn.php"
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>

<body>
    <form method="POST" action="">
        <input type="test" placeholder="name" name="name" /><br>
        <input type="test" placeholder="description" name="description" /><br>
        <input type="test" placeholder="category_id" name="category_id" /><br>
        <input type="test" placeholder="price" name="price" /><br>
        <input type="test" placeholder="color" name="color" /><br>
        <input type="test" placeholder="weight" name="weight" /><br>
        <input type="test" placeholder="active" name="active" /><br>
        <input type="submit" name="submit"/>
    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    echo " formulier is verstuurd<br>";
    $name = $_POST['name'];
    $description = $_POST['description'];
    echo " $name<br>";

    $sql = "INSERT INTO product (name, description)
VALUES ('$name', '$description')";
print ($sql);
    if ($conn->query($sql) === TRUE) {
        header("Location: admin_users.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>