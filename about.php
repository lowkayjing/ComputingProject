<html>
<head><title></title>


    <link rel="stylesheet" type="text/css" href="css/display.css">
    <style>
        body {
            font-family: Agency FB;
        }
        .font{
            font-family: Agency FB;
            font-size:20px;
        }
        .modal-header
        {
            padding:9px 15px;
            border-bottom:1px solid #eee;
            background-color: #A9A9A9;
        }
        .modal-footer
        {
            background-color: #A9A9A9;
        }
        .modal-body
        {
            background-color: #324669;
            color: white;
        }
    </style>
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
<div class="container">
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 style="text-align: center" class="modal-title"><b>Online Auction System</b></h2>
                </div>
                <div class="modal-body">

                    <h3><i class="glyphicon glyphicon-thumbs-up"></i>The purpose of this project is to establish an "Online Auction System", a store for buyers and stores to be contacted almost anywhere.<br><br><i class="glyphicon glyphicon-thumbs-up"></i>Users do not need to register to view the functions of this website, but users who can bid and sell must register.<br><br>
                        <i class="glyphicon glyphicon-thumbs-up"></i>The auction has a name, a description, possibly a photo uploaded by the user (of the related item), and an end time: when the auction interval ends, the user cannot bid, but if there is no item for which the offer is offered, it may be suspended.<br><br> <i class="glyphicon glyphicon-thumbs-up"></i>In addition, the administrator can accept or reject auctions proposed by users, view information about users and items, and create, modify, and delete auction categories (for mobile phones, and computers).</h3>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
