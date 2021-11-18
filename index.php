<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auction System</title>
    <link rel="icon" type="image/jpg" href="imgs/bid4ulogo.png"/>
    <link rel="stylesheet" href="">
    <script src=""></script>
    <style>
        body {
            font-family: Agency FB;
            background-image: url("../imgs/backgroundbid4u.jpg");
        }
    </style>

</head>
<body>
<div>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="">Bid4u.Com</a>
                <img src="imgs/bid4ulogo.png" alt="bid4u" />
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php"><b>Home</b></a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href=""><b>Products</b><span class="caret"></span></a>
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
                <li><a href="about.php"><b>About</b></a></li>
                <li><a href="contact.php"><b>Contact Us</b></a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href=""><b>Login</b><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="userlogin.php"><b>User Login</b></a></li>
                        <li><a href="adminlogin.php"><b>Admin Login</b></a></li>
                    </ul>
                </li>
                <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> <b>Sign Up</b></a></li>
            </ul>
        </div>
    </nav>
</div>
</body>
</html>
