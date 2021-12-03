<html>
<head><title>Auction Sytem</title>


    <link rel="stylesheet" type="text/css" href="css/display.css">

</head>

<body>
<script src="JS/display.js"> </script>
<header>
    <div class="navbar">
        <img class='logo' src ='img/bid4ulogo.png'/>
        <nav>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="display_items.php">Products</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="logout.php">Logout </a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="table-bkground"> 
<div class="table">
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
                $servername = '192.168.64.3';
                $username = 'kate';
                $password = 'Jing@0220';
                $database = 'bid4u_system_db';
                $port = 3306;

                $conn = mysqli_connect($servername, $username, $password, $database, $port);

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
    <footer class="footer-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                <div class="heading_main text_align_center white_fonts margin-bottom_30">
                
                    </div>
                </div>
            </div>
        </div>

            
        
    </div>
    <footer class="footer-box">
    </div>
    </div>
    </div>
    </div>
</footer>
<!--Begin : Page FOOTER -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Contact Us</h3>
    <p> Address <br/>
    <small>1, Jalan Taylors,<br/>
    47500 Subang Jaya, Selangor.<br/>
    </small></p>
    <p>Phone<br><small>03-5629 5000<br>Monday - Friday<br>8:00 am - 6:00 pm</small></p>
    <p>Email<br><small>Bid4u@outlook.com</small></p>
    <br>
    <p class="crp">Copyright 2021 © Bid4u.Com</p>
            </div>
        </div>
    </div>
</div>
<!--End : Page FOOTER -->

</body>
</html>
