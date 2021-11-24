<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
  </head>

<body style="font-family: Segoe UI light;">
    <!-- <div class="container">
        <div class="jumbotron">
            <center>
                <h2>A simple Inventory and Billing System with PDF Dwonwload.</h2><br>
                <a class="btn btn-primary btn-lg" type="button" href="invoice.php">Proceed</a>
            </center>
        </div>

        
    </div> -->


    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Log In</div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                            <form action="#" id="loginform" class="form-horizontal" role="form" method="POST">
                                    
                                <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Username">                                        
                                    </div>
                                
                                <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                    

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls">
                                    <button type="submit" class="btn btn-large btn-success" title="Log In" name="login" value="Admin Login">Login</button>
                                    </div>
                                </div>
  
                             </form>     
                    </div>                     
                </div>  
        </div>
        
    </div>
</body>

<?php  
 session_start();  
 include ('db_config.php');
 try  
 {  
      if(isset($_POST["login"]))  
      {  
                $query = "SELECT * FROM login WHERE username = :username AND password = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"];  
                     header("location:invoice.php");  
                }  
                else  
                {  
                    echo "<div class='container alert alert-danger alert-dismissible' role='alert'>
                    Invalid Username and Password
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                    </div>"; 
                }  
         
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?> 


</html>