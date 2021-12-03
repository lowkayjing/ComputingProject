<html>
<head><title></title>

 <link rel="stylesheet" type="text/css" href="CSS/display.css">

</head>
<body>
<header>
<div class="navbar">
    <img class='logo' src ='img/bid4ulogo.png'/>
    <nav>
        <ul>
             <li><a href="">Home</a></li>
             <li><a href="display_items.php">Products</a></li>
             <li><a href="cart.php">Cart</a></li>
             <li><a href="contact.php">Contact</a></li>
             <li><a href="about.php">About</a></li>
             <li><a href="logout.php" >Logout </a></li>
        </ul>
    </nav>
</div>
</header>
<?php
$servername = '192.168.64.3';
$username = 'kate';
$password = 'Jing@0220';
$database = 'bid4u_system_db';
$port = 3306;

$conn = mysqli_connect($servername, $username, $password, $database, $port);

if($conn->connect_error)
{
die("Connection failed!".$conn->connect_error);
}

 
if(!isset($_POST["item_id"]))
{
header("Location: display_items.php");
}


else
{

session_start();
$item_id = $_POST["item_id"];
$statement = "SELECT * FROM bid WHERE item_id=?";
$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $item_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if($_SESSION["username"] ==  $row["username"])
{
echo "You are already the highest bidder";
$statement = "SELECT * FROM item WHERE item_id = '$item_id'";
$result = $conn->query($statement);
$row = $result->fetch_assoc();
$endtime = $row["endtime"];

date_default_timezone_set("Asia/Kuala_Lumpur");
$currentDateTime = date('Y-m-d H:i:s');
$strcurrenttime = strtotime($currentDateTime);
$strsettime = strtotime($endtime);
if($strcurrenttime > $strsettime)
{
$sql = "UPDATE item SET item_visible ='FALSE' WHERE item_id = '$item_id'";
$results = mysqli_query($conn, $sql);
}
$winner="winner";
 header("Location:display_items.php?user=$winner");

} /*checks if user is already highest bidder*/

else
{
$statement = "SELECT * FROM item WHERE item_id=?";   // updates the number of bids
$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $item_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$bid = $_POST["bid"];
$username = $_SESSION["username"];
/*determine if user bid properly*/

if($bid>$row["current_bid"])
{
 	
$statement= "UPDATE item SET current_bid=? WHERE item_id=?";
$stmt = $conn->prepare($statement); 
$stmt->bind_param("dd", $bid, $item_id);
$stmt->execute();
/*updates the bid value*/

$statement= "UPDATE item SET bid_num=bid_num+1 WHERE item_id=?";
$stmt = $conn->prepare($statement);
$stmt->bind_param("d", $item_id);
$stmt->execute();  
/*updates the number of bids*/ 
 
$statement = "INSERT INTO bid(username, item_id, bid_price) VALUES(?, ?, ?)";
$stmt = $conn->prepare($statement);

$stmt->bind_param("sid", $username, $item_id, $bid);
$stmt->execute();

$statement = "DELETE FROM bid WHERE bid_price<? AND item_id=?";
$stmt = $conn->prepare($statement);
$stmt->bind_param("dd", $bid, $item_id);
$stmt->execute();

echo "Congratulations, the current bid value is $".$bid. "and you currently is the highest bidder";
$stmt->close();

}/*inserts a new bid into the BID table and deletes older ones*/
	
else
{
echo "Your bid must be greater than the current bid price.";
} /* check to see if you bid greater than current bid */
} /* check to see if you are already the greatest bidder */

 
$conn->close();
}/* prevent direct access by user */


?>
</body>
</html>