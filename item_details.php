<html>
<head><title></title>

	 <link rel="stylesheet" type="text/css" href="display.css">
	
</head>

	 
 
	
<body>

<header>
<div class="navbar">
  <img class='logo' src ='bid4ulogo.png'/>
  <nav>
  <ul>
    <li><a href="">Home</a></li>
    <li><a href="display_items.php">Buy</a></li>
    <li><a href="add_item.php">Sell</a></li>
	<li><a href="logout.php" >Logout </a></li>
  </ul>
</nav>
</div>
</header>
<?php
 
session_start();



if(!isset($_GET["item_id"]) || !isset($_SESSION["username"]))
{
header("Location:display_items.php"); 
}


else
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


$statement = "SELECT * FROM item WHERE item_id =?";
$iid = $_GET["item_id"];

$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $iid);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc(); /*select the data of the specific item from the ITEM table*/


$iid = $row["item_id"];
$iname= $row["item_name"];
$i_desc = $row["item_desc"];
$iiprice = $row["init_bid"];
$end = $row["endtime"];
$bid_num = $row["bid_num"];
$icprice = $row["current_bid"];
$ilivestream = $row["item_livestream"];
 ?>


<div class='item'>	
<div class='item_row'>Item Id: <?php echo $iid ?></div>
<div class='item_row'>Item Name: <?php echo $iname ?></div>
<img class='item_img' src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row["item_pic"]); ?>">
<div class='item_row'>Item Description: <?php echo $i_desc ?></div>
<div class='item_row'>End Time: <?php echo $end ?></div>
<div class='item_row'>Number Of Bids:<?php echo $bid_num ?></div>
<div class='item_row'>Current Bid: <?php echo $icprice ?></div>
<form action='bid.php' method='POST'>
<input type='hidden' value="<?php echo $iid; ?>" name='item_id'/>
<input type='hidden' value="<?php echo $username; ?>" name='username'>
<select name='bid'>
<?php 
for($i=0; $i < 10; $i++)
{
 $j = $i*10;
echo "<option value='$j'>$$j</option>";
}
echo "</select>";	
echo "<input type='submit' value='Bid'>";
echo "</form>";
echo "</div>"; 
 
$conn->close(); /*display the item details */ 
 
}/*prevent direct access by user */

	
	?>
</body>
</html>