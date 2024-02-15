<?php 
require('../../config/db.php');
$day = $_POST['date'];


$fixedTimes = ['10:00', '13:00', '16:00', '19:00', '22:00'];
foreach ($fixedTimes as $time) {
    $movieId = $_POST[$time];

   
    $sql = "INSERT INTO screenhours (movieId, hour, day, seats) VALUES ('$movieId', '$time', '$day', '255')";
    mysqli_query($con,$sql);
}

echo "Screen hours added successfully";
?>