<?php
    $con = mysqli_connect('localhost', 'root');


    session_start();
    mysqli_select_db($con, 'virtualdr');
    $name = $_POST['firstname'];
    $page = $_POST['lastname'];
    $uni = $_SESSION['username'];
    $msg = $_POST['subject'];

    // $uni = "sud@sud.com";
    $querr="insert into contact_user(username, firstname, lastname, subject) values('$uni' , '$name', '$page' , '$msg')";
    mysqli_query($con, $querr);
    header('location:index.html');

?>