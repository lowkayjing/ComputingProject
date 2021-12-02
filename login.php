<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="google-signin-client_id" content="56071966215-ao2n2ocn1h3uumqolfp4f6264asj37fo.apps.googleusercontent.com">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <link rel="stylesheet" type="text/css" href="CSS/loginsignup.css">
    </head>
    <body>
    <div class="blur"></div>
    <div class="formContent blur">
    <h2>Login Form</h2>
    <form action="check_login.php" method="POST">
    <label>Username</label>
    <input type="text" name="username" placeholder="Enter Username" required>
    <label>Password</label>
    <input type="password" name="password" placeholder="Enter Password" required>
    <input type="submit" name="submit" value="Login">
    <div class="remember">
    <div class="login"><div class="Oroption">OR</div></div>
    <div>Login with Google</div>
    <div class="links">
        <div class="g-signin2" data-onsuccess="onSignIn"></div>
    </div>
    <div class="signup"> Don't have account? <a href="add_buyer.php">Sign up</a> </div>
   
    </div>
    </form>
     <a href="mainlogin.php"><button> Back </button></a>
    </div>
      <script>
         function onSignIn(googleUser) {
           // get user profile information
           console.log(googleUser.getBasicProfile())
         }
      </script>

  <script src="" async defer></script>
    </body>
</html>