<html>
<head><title>Auction System</title>
    <link rel="stylesheet" type="text/css" href="css/contact.css">
   
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
                <li><a href="logout.php">Logout </a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="table-bkground"> 
<div class="table">
        <h3>If you have any questions, comments or want to contact us, please use the form.</h3>
        <!-- line modal -->
        <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Send Your Message</h3>
                    </div>
                    <div class="modal-body">
                        <!-- content goes here -->
                        <form method="POST" name="UserMessage" onsubmit=" return  validmessage();">

                        <label for='Name' class='label'> Your Name: </label>
                        <br>
                        <input class='form-control' type='text' name='name' placeholder='Enter your name'required/>
                        <br>

                        <label for='exampleInputEmail1' class='label'> Email address: </label>
                        <br>
                        <input class='form-control' type='email' name='email' placeholder='Enter your Email'required/>
                        <br>

                        <label for='Meggase' class='label'> Text: </label>
                        <br>
                        <textarea rows="3" cols="68" type='text' name='message' placeholder='Enter your Comment(s)'></textarea>
                        <br>
                        <br>
                        
                        <input class='submit' type='submit' value='Submit'/>

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
