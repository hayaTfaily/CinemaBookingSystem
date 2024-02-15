<?php 
session_start();
//hon fi l movieId wl useer mn l sesssion
require("../config/db.php");
$time=$_POST['time'];
$userid=$_SESSION['userid'];
$username=$_SESSION['username'];
$day=$_POST['day'];
$nbpeople=$_POST['nbpeople'];
if($_POST['time'] && $_POST['day'] && $_POST['nbpeople'] )
{
    $query="insert into ticket(userId,userName,nbPeople,movieId,day,hour) values ('$userid','$username','$nbpeople','1','$day','$time')";

}
$result=mysqli_query($con,$query);
?>