<html>
<head><title></title>

 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
<body>

<?php

echo "<img id='logo' src ='bid4ulogo.png'/>";
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
echo "<label for='username' class='label'> Username:</label>";
echo "<input class='text' type='text' name='username' placeholder='Username'>";
echo "<br>";

echo "<label for='password' class='label'>Password:</label>";
echo "<input class='password' type='password' name='password' placeholder='Password'>";
echo "<br>";
echo "<input class='submit' type='submit' value='Sign up'/>";	
echo "</form>";
echo "</div>";
?>
</body>
</html>


