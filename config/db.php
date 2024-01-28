<?php
    $server='localhost';
    $user='root';
    $pass='';
    $mydb='cinemadb';

    $con=mysqli_connect($server, $user, $pass, $mydb);

    if(!$con){
        die("Connection failed:" .mysqli_connect_error());
    }
?>