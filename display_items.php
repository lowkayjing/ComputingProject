<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/display.css">
 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>

<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="JS/display.js"> </script>

<?php 

session_start();

if(!isset($_SESSION["username"]))
{
	header("Location:login.php");
}

else
{
?>	
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
	<li><a href="#"> Hello <?php echo $_SESSION["username"]?> </a></li>  
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

 $statement = "SELECT item_id, item_name, item_desc, item_pic, current_bid , item_livestream FROM item WHERE item_visible = 'TRUE' ";
$result = $conn->query($statement);

$statement1 = "SELECT item_id, item_name, item_desc, item_pic, current_bid , item_livestream FROM item WHERE item_visible = 'FALSE' ";
$result1 = $conn->query($statement1);
if($result->num_rows > 0)
{ 
  
    while($row = $result->fetch_assoc())
    { 
            $iid = $row["item_id"];
           $iname= $row["item_name"];
		   $idesc = $row["item_desc"];
           $ipic = $row["item_pic"];
          $icurrentp = $row["current_bid"];
          $ilivestream = $row["item_livestream"];
          $streaminglink = "livestream.php?item_id=";
          $livestream = $streaminglink.$iid;  
          $link = "item_details.php?item_id=";
         $item_details = $link.$iid;
         
 ?>
<div class="container">
<div class="col-xs-12 col-md-6">
	<!-- First product box start here-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row["item_pic"]); ?>" class="img-responsive"> 
						<span class="tag2 hot">
							HOT
						</span> 
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">
							<a href="">
                            <?php echo $row["item_id"] ?>/<?php echo $row["item_name"] ?>
							</a>                            

						</h5>
						<p class="price-container">
							<span> $<?php echo $row["current_bid"] ?> </span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<p><?php echo $row["item_desc"]; ?></p>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
                            <a href="<?php echo $item_details ?>" class="btn btn-info">More info</a>
							<a href="<?php echo $livestream ?>" class="btn btn-info">Livestream</a>
						</div>
						<!-- <div class="col-md-12">
							<div class="rating">Rating:
								<label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
								<label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
 <!-- end product -->
 
 </div>
</div>
 
</div>	
    <?php
    }


$statement = "SELECT * FROM bid WHERE item_id=?";
$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $item_id);
$stmt->execute();
$result = $stmt->get_result();
while($row = $result->fetch_assoc())
{

if($_SESSION["username"] ==  $row["username"])
{
$statement = "SELECT * FROM item WHERE item_id = '$iid'";
$result = $conn->query($statement);
$row = $result->fetch_assoc();
$endtime = $row["endtime"];

date_default_timezone_set("Asia/Kuala_Lumpur");
$currentDateTime = date('Y-m-d H:i:s');
$strcurrenttime = strtotime($currentDateTime);
$strsettime = strtotime($endtime);
if($strcurrenttime > $strsettime)
{
$sql = "UPDATE item SET item_visible ='FALSE' WHERE item_id = '$iid'";
$results = mysqli_query($conn, $sql);
}
}
}
}
else{ 
    ?> 
    <p class="status error">Item not found...</p> 
    <?php
 }
$conn->close();  
}

?>

    


        
</div>
</div>
<p class="crp">Copyright 2021 © Bid4u.Com</p>
</body>
</html>