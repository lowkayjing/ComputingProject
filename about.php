<!DOCTYPE html>
<html lang="en">
<head>
    <title>Auction System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Bid4u.Com</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="home.php"><b>Home</b></a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Products</b><span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="mobile.php"><b>Mobile</b></a></li>
                    <li><a href="computer.php"><b>Computer</b></a></li>
                </ul>

            </li>

            <form class="navbar-form navbar-left" action="search.php" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Search" size="40">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </ul>


        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#myModal" data-toggle="modal" data-target="#myModal"><b>About</b></a></li>
            <li><a href="contact.php"><b>Contact Us</b></a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Login</b><span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="userlogin.php"><b>User Login</b></a></li>
                    <li><a href="adminlogin.php"><b>Admin Login</b></a></li>
                </ul>
            </li>
            <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> <b>Sign Up</b></a></li>

        </ul>
    </div>
</nav>
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