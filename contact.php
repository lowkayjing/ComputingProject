<!DOCTYPE html>
<html>

<head>

    <title>Auction System</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        div.Parallel {
            display:inline-block;
        }

        p {
            text-align:center;
        }


        table
        {


            border-radius:20px;


        }

        h2
        {

            margin:0% auto auto 15%;


        }


        body {

            font-family: Agency FB;

        }
        input {
            width: 150%;
            height:100%;
        }

        .modal-header
        {
            padding:9px 15px;
            border-bottom:1px solid #eee;
            background-color: #A9A9A9;
        }
        .modal-footer
        {
            background-color: #A9A9A9;
        }
        .modal-body
        {
            background-color: lightgray;
        }
    </style>

</head>
<div class="container-fluid">



    <body>



    <nav class="navbar navbar-inverse" data-offset-top="197">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Bid4u.Com</a>
            </div>
            <ul class="nav navbar-nav" style="none">
                <li><a href="index.php"><b>Home</b></a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Products</b><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="mobile.php"><b>Mobile</b></a></li>
                        <li><a href="computer.php"><b>Computer</b></a></li>
                    </ul>

                </li>



                <form class="navbar-form navbar-left" action="search.php" method="POST">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search" size="40">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="about.php"><b>About</b></a></li>
                <li class="active"><a href="contact.php"><b>Contact Us</b></a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Login</b><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="userlogin.php"><b>User Login</b></a></li>
                        <li><a href="adminlogin.php"><b>Admin Login</b></a></li>
                    </ul>
                </li>
                <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> <b>Sign Up</b></a></li>

            </ul>
        </div>


    </nav>


    <div class="container-fluid" style="height:1000px">

        <h3>If you have any questions, comments or want to contact us, please use the form.</h3>
        <br><br>

        <br><br>



        <!-- line modal -->
        <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3  style="text-align: center;" class="modal-title" id="lineModalLabel">Send Your Message</h3>
                    </div>
                    <div class="modal-body">

                        <!-- content goes here -->
                        <form method="POST" name="UserMessage" onsubmit=" return  validmessage();">
                            <div class="form-group">
                                <label for="Name">Your Name</label>
                                <input type="text" class="form-control" id="Name" name="name" placeholder="Enter Your Name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter Your Email">
                            </div>
                            <div class="form-group">
                                <label for="Meggase">Text</label><br>
                                <textarea rows="3" cols="68" name="message" placeholder="Enter Your Comment"></textarea><br />
                            </div>

                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>

    </body>
</html>
