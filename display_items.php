<html>
<head><title></title> 
 

 <link rel="stylesheet" type="text/css" href="css/display.css">
 
</head>

<body>
<script src="JS/display.js"> </script>
<header>
<div class="navbar">
  <img class='logo' src ='img/bid4ulogo.png'/>
  <nav>
  <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="about.php">About</a></li>
    <li><a href="display_items.php">Buy</a></li>
    <li><a href="add_item.php">Sell</a></li>
      <li><a href="contact.php">Contact</a></li>
	<li><a href="logout.php" >Logout </a></li>
  </ul>
</nav>
</div>
</header>
<?php 

session_start();

if(!isset($_SESSION["username"]))
{
	header("Location:login.php");
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

	
$statement = "SELECT item_id, item_name, item_pic, current_bid , item_livestream FROM item";
$result = $conn->query($statement);

 if($result->num_rows > 0){ 
  
        while($row = $result->fetch_assoc()){ 
                $iid = $row["item_id"];
               $iname= $row["item_name"];
               $ipic = $row["item_pic"];
              $icurrentp = $row["current_bid"];
              $ilivestream = $row["item_livestream"];
              $streaminglink = "livestream.php?item_id=";
              $livestream = $streaminglink.$iid;  
              $link = "item_details.php?item_id=";
             $item_details = $link.$iid;
             ?> 
            <div class="item">
            <div class="item_row">Item Name: <?php echo $row["item_name"] ?> </div>
            <img class="item_img" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row["item_pic"]); ?>"/>
            <div class="item_row"> Current Bid: <?php echo $row["current_bid"] ?> </div>
             <?php if(!empty ($row["item_livestream"]))
                   {  ?>
            <div class="item_row" ><a class="link" href="<?php echo $livestream ?> "> Live Streaming </a></div>
             <?php } ?>
            <div class="item_row" ><a class="link" href="<?php echo $item_details ?> ">Item Details</a></div>
            </div>
        <?php } ?>  
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?> 

<!-- }/*display all the items on screen*/ -->
<?php
$conn->close();
}/*prevent direct access by user*/
?>
<!--Begin : Page FOOTER -->
<div class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="crp">Copyright 2021 © Bid4u.Com</p>
            </div>
        </div>
    </div>
</div>
<!--End : Page FOOTER -->

</body>
</html>