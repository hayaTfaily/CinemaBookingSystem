<?php
require('../../config/db.php');


// Retrieve form data
$title = $_POST['title'];
$imbd = $_POST['imbd'];
$duration = $_POST['duration'];
$startday = $_POST['startday'];
$endday = $_POST['endday'];
$story = $_POST['story'];
$categorie = $_POST['categorie'];
$age = $_POST['agetowatch'];

// Perform database insertion
$query = "INSERT INTO movie (name, imbd, duration, startDay, endDay, story, categorie, agetowatch) VALUES ('$title', '$imbd', '$duration', '$startday', '$endday', '$story', '$categorie', '$age')";
$result = mysqli_query($con, $query);

if ($result) {
    // If insertion successful, return the newly added movie row
    echo "<tr>
            <td>$title</td>
            <td>$imbd</td>
            <td>$duration</td>
            <td>$startday</td>
            <td>$endday</td>
            <td>$story</td>
            <td>$categorie</td>
            <td>$age</td>
        </tr>";
} else {
    // If insertion fails, return an error message
    echo "Error: " . mysqli_error($con);
}

// Close database connection
mysqli_close($con);

?>
