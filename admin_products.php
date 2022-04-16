<?php
include "db_conn.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eindopdracht</title>
    <link rel="stylesheet" href="assets/css/admin.css">
</head>

<body>
    <div id="container">
        <div id="header">
            <img src="wireframes/logo2.png" id="logo">
            <div class="nav">
                <ul class="nav_links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="bestel.php">Bestel</a></li>
                    <li><a href="#">Admin</a></li>
                </ul>
            </div>
            <a class="login" href="home.php"><button>Log In</button></a>
        </div>
        <div class="main">
            <div class="ruimte2">
            </div>
            <div class="header2">
                <ul class="nav_links2">
                    <li><a href="admin_users.php">users</a></li>
                    <li><a href="#">products</a></li>
                    <li><a href="logout.php">logout</a></li>
                </ul>
            </div>
            <div class="content">

                <?php
                $i = 1;
                $qry = "select * from product";
                $run = $conn->query($qry);
                if ($run->num_rows > 0) {
                    while ($row = $run->fetch_assoc()) {
                        // $id = $row['user_id'];
                ?>

                        <div class="colom">
                            <?php
                            echo $i++;
                            echo $row['name'];
                            // echo $row['description'];
                            echo $row['price'];
                            ?>
                            <a class="editbutton" href="edit.php?id=<?php echo $row['product_id']; ?>">Edit</a>
                            <a class="deletebutton" href="product_delete.php?id=<?php echo $row['product_id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                        </div>

                <?php
                    }
                }
                ?>

            </div>
            <div class="bottom">
                <div class="pager">
                    pager
                </div>
                <a class="new" href="product_insert.php"><button>New</button></a>
            </div>
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
    </div>
</body>

</html>