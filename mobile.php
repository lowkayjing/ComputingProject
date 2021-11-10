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
      <li class="active" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Mobile</b><span class="caret"></span></a>
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

</body>
</html>
