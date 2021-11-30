<html>
<head><title></title>

	 <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	
<?php

if(!empty($_POST["username"]) && !empty($_POST["password"]))
{
    $servername = "localhost";
    $username ="kaihong";
    $password = "kaihong20011212";
    $database = "bid4u_system_db";

    $conn = new mysqli( $servername, $username, $password, $database);
    
    if($conn->connect_error)
    {
        die("Connection failed!".$conn->connect_error);
    }
 
$username = $_POST["username"];
$statement = "SELECT * FROM buyer WHERE username=?";
$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$hash = $row["password"]; 

if(password_verify($_POST["password"], $hash))
{
	echo "Successful login";
	session_start();
	$_SESSION["username"] = $_POST["username"];
	$conn->close();
	header("Location: display_items.php");
}

else
{
 $conn->close();
 echo '<script type ="text/JavaScript">';
 echo 'alert("Wrong username or password!!")';
 echo '</script>'; 
 header("Location:login.php");
}/*verifies if user has entered correct password*/
}

else
{
header("Location:login.php");
} /*verify user not directly accessing this page */

?>



</body>
</html>


