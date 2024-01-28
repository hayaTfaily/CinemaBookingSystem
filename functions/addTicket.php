<?php 
//hon fi l movieId wl useer mn l sesssion
require("../config/db.php");
$time=$_POST['time'];
$day=$_POST['day'];
$nbpeople=$_POST['nbpeople'];
if($_POST['time'] && $_POST['day'] && $_POST['nbpeople'] )
{
    $query="insert into ticket(userId,nbPeople,movieId,day,hour) values ('1','$nbpeople','1','$day','$time')";

}
$result=mysqli_query($con,$query);
?>