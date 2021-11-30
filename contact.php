<html>
<head><title></title>
    <link rel="stylesheet" type="text/css" href="css/add.css">

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
