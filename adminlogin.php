<!DOCTYPE html>
<html lang="en">
<head>
    <title>Auction System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>

        body {


            font-family: Agency FB;
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
            <li class="active" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Admin Login</b><span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="userlogin.php"><b>User Login</b></a></li>
                    <li><a href="adminlogin.php"><b>Admin Login</b></a></li>
                </ul>
            </li>
            <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> <b>Sign Up</b></a></li>

        </ul>
    </div>
</nav>

<div class="container" style="margin-top:40px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Sign in to continue</strong>
                </div>
                <div class="panel-body">
                    <form role="form" action="#" method="POST" name="AdminLogin" onsubmit=" return validadmin();">
                        <fieldset>
                            <div class="row">
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group">
                                        <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-user"></i>
                        </span>
                                            <input class="form-control" placeholder="Username" name="uName" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-lock"></i>
                        </span>
                                            <input class="form-control" placeholder="Password" name="Pass" type="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>


</body>
</html>
