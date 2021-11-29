<html>
<head><meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Auction System</title>
        <meta name="description" content="">
        <meta name="google-signin-client_id" content="56071966215-ao2n2ocn1h3uumqolfp4f6264asj37fo.apps.googleusercontent.com">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
<div class="table-bkground"> </div>
      <div class="table">
          <br>
<?php

echo "<img id='logo' src ='img/bid4ulogo_edited.png'/>";
echo "<br>";
echo "<form class='add_buyer_form' action='check_buyer.php' method='POST'>";

if(isset($_GET["buyer"]))
{

if($_GET["buyer"]=="successful")
{
	echo '<script type ="text/JavaScript">';
	echo 'alert("Successfully Added User!")';
	echo '</script>';
}

else if($_GET["buyer"]=="duplicate")
{
	echo '<script type ="text/JavaScript">';
	echo 'alert("User Already Exists. Please Enter Another Username And Password")';
	echo '</script>'; 
}



}
 
else
{
echo "<h4>Please Add Username and Password</h4>";
}
echo "<label for='username' class='label'> Username: </label>";
echo "<br>";
echo "<input class='text' type='text' name='username' placeholder='Username'>";
echo "<br>";

echo "<label for='password' class='label'>Password: </label>";
echo "<br>";
echo "<input class='password' type='password' name='password' placeholder='Password'>";
echo "<br>";
echo "<input class='submit' type='submit' value='REGISTER'/>";
echo "<br>";	
echo "<input type='button' value='BACK' onclick='history.back()'/>";
echo "</form>";
echo "</div>";
?>
</body>
</html>


