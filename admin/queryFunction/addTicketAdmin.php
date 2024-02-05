<?php 
require("../../config/db.php");
$time=$_POST['time'];
$day=$_POST['date'];
$nbpeople=$_POST['nbppl'];
$movieId=$_POST['mname'];
$userName=$_POST['userName'];
if($_POST['time'] && $_POST['date'] && $_POST['nbppl'] )
{
    $query="insert into ticket(userId,userName,nbPeople,movieId,day,hour) values ('1','$userName','$nbpeople','$movieId','$day','$time')";

}
$result=mysqli_query($con,$query);
?>