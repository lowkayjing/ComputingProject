<html>
<head><title></title>	

<link rel="stylesheet" type="text/css" href="css/add.css">
	 	
</head>


<body>
<header>
<div class="navbar">
  <img class='logo' src ='img/bid4ulogo.png'/>
  <nav>
  <ul>
    <li><a href="home.php">Home</a></li>
      <li><a href="about.php">About</a></li>
    <li><a href="display_items.php">Buy</a></li>
    <li><a href="add_item.php">Sell</a></li>
	<li><a href="logout.php" >Logout </a></li>
  </ul>
</nav>
</div>
</header>

<?php 
session_start();
if(!isset($_SESSION["username"]))
{

}
else
{
echo "<br>";
echo "<form class='add_item_form' action='add_item.php' method='POST'  enctype='multipart/form-data'>";

if(isset($_GET["item"]))
{

if($_GET["item"]=="duplicate")
{
	echo "<h4>Already entered this item</h4>";
	echo "<br>";
	echo "<h4>Please try again</h4>";
 
}

else if($_GET["item"]=="successful")
{
echo "<h4>Successfully added an item!</h4>";
} 

}
 
else
{
echo "<h4>Please add an item</h4>";
}
?>

	<table>
      <tr>
          <td><label for='item_name' class='label'>Item Name:</label></td>
          <td> <input class='text'  type='text' name='item_name' required/></td>
      </tr>

       <br>

      <tr>
          <td><label for='item_description'  class='label'>Item Description:</label></td>
          <td><input class='text'  type='text' name='item_description' required></td>
      </tr>

      <br>

	  <tr>
           <td><label for='endtime'  class='label'> Ending Bid Time: </label></td>
           <td> <input class='text'  type='text' name='endtime' required></td>        
	  
       <br>

	  <tr>
            <td><label for='item_pic'  class='label'> Item Picture: </label></td>
            <td><input class='text'  type='file' value='item_pic' name='item_pic' id="item_pic" required></td>
    </tr>

    <tr>
            <td><label for='item_livestream'  class='label'> Livestream Hyperlink(Optional): </label></td>
            <td><input class='text'  type='text' name='item_livestream' id="item_livestream" ></td>
    </tr>
    </table>
    <br>
    <br>
    <input class='submit' type='submit' name="insert" id="insert" value='Add Item'/>

</form>
<?php
}
?>
</body>
</html>
<?php

if(isset($_POST["insert"]))
{

if(!empty($_POST["item_name"]) && !empty($_POST["item_description"]) && !empty($_POST["endtime"]) && !empty($_FILES["item_pic"]["name"]) && !empty($_POST["item_livestream"]))
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

  
$iname= $_POST["item_name"];
$idesc = $_POST["item_description"];
$iipic = $_FILES["item_pic"]["name"]; 
$endtime = $_POST["endtime"];
$ilivestream = $_POST["item_livestream"];


$statement = "SELECT * FROM item WHERE item_name=?";
$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $iname);
$stmt->execute();
$result = $stmt->get_result();
/*grab from table all see if there is an item of same name*/
if($result->num_rows>=1)
{
$value = "duplicate";
$conn->close();
header("Location:add_item.php?item=$value");
}

else
{  
  if(!empty($_FILES["item_pic"]["name"])) 
  { 
    // Get file info 
    $fileName = basename($_FILES["item_pic"]["name"]); 
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
     
    // Allow certain file formats 
    $allowTypes = array('jpg','png','jpeg','jfif','gif'); 
    if(in_array($fileType, $allowTypes))
    { 
        $image = $_FILES['item_pic']['tmp_name']; 
        $imgContent = addslashes(file_get_contents($image)); 
     
        // Insert image content into database 
        $insert = $conn->query("INSERT into item (item_name, item_desc, item_pic ,endtime, item_livestream) VALUES ('$iname', '$idesc', '$imgContent', '$endtime' , '$ilivestream')"); 
         
        if($insert)
        { 
            $status = 'success'; 
            $statusMsg = "Item uploaded successfully."; 
        }
        else
        { 
            $statusMsg = "Item upload failed, please try again."; 
        }  
    }
    else
    { 
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
    } 
  }/*insert into table if item name not duplicate */
  else
  { 
    $statusMsg = 'Please select an image file to upload.'; 
  } 
 echo $statusMsg;
}

}
else
{
header("Location:add_item.php");
}/*verify user not directly accessing */
}

 

?>

