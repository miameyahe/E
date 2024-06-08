<?php
    $con = mysqli_connect('localhost', 'root');


    session_start();
    mysqli_select_db($con, 'virtualdr');
    $name = $_POST['itemname'];
    $page = $_POST['pagename'];
    $uni = $_SESSION['username'];
    // $uni = "sud@sud.com";
    $querr="insert into user_cart(username, item_name) values('$uni' , '$name')";
    mysqli_query($con, $querr);
    header('location:medicine.html');

?>