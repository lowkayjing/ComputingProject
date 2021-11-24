<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
         session_start();

         if(!isset($_SESSION["username"]))
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
            $row = $result->fetch_assoc();  /*select the data of the specific item from the ITEM table*/
            $item_id = $row["item_id"];
            $ilivestream = $row["item_livestream"];
            
            ?>
            <iframe width="1520" height="553" src="<?php echo $ilivestream ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <?php 
        }
        ?>
             
        <script src="" async defer></script>
    </body>
</html>