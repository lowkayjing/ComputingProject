<html>
<head><title></title>

	 <link rel="stylesheet" type="text/css" href="style.css">
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
$password = $_POST["password"];
$hashed = password_hash($password, PASSWORD_DEFAULT);


$statement = "SELECT * FROM buyer WHERE username=?";
$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows>=1)
{
$value = "duplicate";
header("Location: add_buyer.php?buyer=$value");
}

else
{ 
$statement = "INSERT INTO buyer(username, password) VALUES(?, ?)";
$stmt = $conn->prepare($statement);
$stmt->bind_param("ss", $username, $hashed);
$stmt->execute();

echo  " account created successful";
header("Location: display_items.php");
 
} /*verify if there is a duplicate user */

$conn->close();
} 

else
{
header("Location: add_buyer.php");
} /*verify user not directly accessing this page */

?>
</body>
</html>

