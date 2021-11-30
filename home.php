<html>
<head><title></title>


    <link rel="stylesheet" type="text/css" href="css/display.css">

</head>

<body>
<script src="JS/display.js"> </script>
<header>
    <div class="navbar">
        <img class='logo' src ='img/bid4ulogo.png'/>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="display_items.php">Buy</a></li>
                <li><a href="add_item.php">Sell</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="logout.php" >Logout </a></li>
            </ul>
        </nav>
    </div>
</header>
<?php
if (isset($_GET['message'])) {
    print '<script type="text/javascript">alert("' . $_GET['message'] . '");</script>';
}

if (isset($_GET['loginmessage'])) {
    print '<script type="text/javascript">alert("' . $_GET['loginmessage'] . '");</script>';
}


if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    echo "<script> alert('name'); </script>";
}

?>

<div class="bodysection templete clear">

    <div class="mainsection templete clear">

        <form action="" method="POST">

            <table>
                <?php
                $servername = "localhost";
                $username ="kaihong";
                $password = "kaihong20011212";
                $database = "bid4u_system_db";

                $conn = new mysqli( $servername, $username, $password, $database);
                if($conn->connect_error)
                {
                    die("Connection failed!".$conn->connect_error);
                }

                $query="select * from product where ProductStatus='No'";
                $Result=mysqli_query($conn,$query);
                $break=0;

                ?>

            </table>
    </div>
</div>

    <div class="sidebar clear">

        <div class="Semisidebar clear">


            <h2>Sold Product Here</h2>

            <?php


            $query="select * from product where ProductStatus='Yes'";
            $Result=mysqli_query($conn,$query);
            $break=0;

            ?>


        </div>


    </div>


    </form>

</body>
</html>
