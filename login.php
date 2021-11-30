<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Auction System</title>
        <meta name="description" content="">
        <meta name="google-signin-client_id" content="56071966215-ao2n2ocn1h3uumqolfp4f6264asj37fo.apps.googleusercontent.com">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>

    <body>
      <div class="table-bkground"> </div>
      <div class="table">
          <img src='img/bid4ulogo_edited.png' id='logo' class='center'>
          <br>
          <form action='check_login.php' class='login_form' method='POST'>
          <br>
          <label for='username' class='label'> Username: </label>
          <br>
          <input class='text' type='text' name='username' placeholder='Username'>
          <br>
          <label for='password' class='label'>Password: </label>
          <br>
          <input  class='password' type='password' name='password' placeholder='Password'>
          <br>
          <br>
          <input class='submit' type='submit' value='SIGN IN'/>
          <p> or </p>
          <div class="g-signin2" data-onsuccess="onSignIn"></div>
          <p class="signup">
            Don't have an account ?
            <a href="add_buyer.php">Sign Up.</a>
          </p>
          </form>
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