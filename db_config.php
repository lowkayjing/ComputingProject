<?php
   /* define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'billinginvoice');
    $db_con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    */
    
    //$db_con = new PDO('mysql:host=localhost;dbname=billinginvoice','root', '');
    $connect = new PDO('mysql:host=localhost;dbname=billinginvoice','root', '');
?>