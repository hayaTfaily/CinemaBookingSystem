<?php 
require('../config/db.php');


$selectedDay = $_POST['selectedDay'];
$movieId = $_POST['movieId'];

$query = "SELECT hour FROM screenHours WHERE movieId = $movieId AND day = '$selectedDay'";


$result = mysqli_query($con, $query);


if (!$result) {
  
    echo "Error: " . mysqli_error($con);
} else {
   
    if (mysqli_num_rows($result) > 0) {
      
        $availableHours = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $availableHours[] = $row['hour'];
        }

       
        echo json_encode($availableHours);
    } else {
      
        echo "No available hours for the selected day and movie.";
    }
}


mysqli_close($con);
?>
