<!DOCTYPE html>

<html>
<head>
    <title>Auction System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>

        table
        {

            border-spacing: 20px;

            margin:4% auto auto 20%;

            border-radius:20px;


        }


        body
        {
            background-color: lightgray;

            font-family: Agency FB;

        }


        .size
        {
            width: 250px;
            height: 30px;
            padding: 2px
        }

        .Error
        {
            color: red;
        }

        div.temp
        {
            margin:4% auto auto 20%;
        }
        td
        {

            font-size:35px;
            border-width:10px;


        }
        input, select, textarea {
            font-size: 75%;
            font-family: Agency FB;
            text-align:center;

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
            <li><a href="about.php"><b>About</b></a></li>
            <li><a href="contact.php"><b>Contact Us</b></a></li>
            <li class="active" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>User Login</b><span class="caret"></span></a>
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
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title"><b>Sign in to continue</b></h1>
            <div class="account-wall">
                <form class="form-signin" action="" method="POST" name="UserLogin" onsubmit="return ValidUser();">
                    <input type="text" class="form-control" name="uname" placeholder="Enter User Name">
                    <input type="password" class="form-control" name="Pass" placeholder="Password">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    <label class="checkbox pull-left"> &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp
                        <input type="checkbox" value="remember-me">Remember me
                    </label>
                </form>
            </div>

        </div>
    </div>
</div>

</div>




</body>
</html>
