<?php 

require('../../config/db.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$movie = $_POST['movie'];

// Insert actor into actors table
$sql = "INSERT INTO actors (fname, lname) VALUES ('$fname', '$lname')";
$result2 = mysqli_query($con, $sql);

if ($result2) {
    $actorId = mysqli_insert_id($con);

    // Get movie ID
    $sql = "SELECT id FROM movie WHERE name = '$movie'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $movieId = $row['id'];

    // Insert actor ID and movie ID into cast table
    $sql = "INSERT INTO cast (actorId, movieId) VALUES ('$actorId', '$movieId')";
    $r = mysqli_query($con, $sql);

    if ($r) {
        // Fetch actor and movie names for response
        $sql = "SELECT fname, lname FROM actors WHERE id = '$actorId'";
        $actorResult = mysqli_query($con, $sql);
        $actorRow = mysqli_fetch_assoc($actorResult);
        $actorName = $actorRow['fname'] . ' ' . $actorRow['lname'];

        $sql = "SELECT name FROM movie WHERE id = '$movieId'";
        $movieResult = mysqli_query($con, $sql);
        $movieRow = mysqli_fetch_assoc($movieResult);
        $movieName = $movieRow['name'];

        // Prepare response array
        $response = array(
            'fname' => $actorRow['fname'],
            'lname' => $actorRow['lname'],
            'movie' => $movieName
        );

        // Encode response array to JSON format
        $jsonResponse = json_encode($response);

        // Echo JSON response
        echo $jsonResponse;
    } else {
        // Handle database error
        echo 'error';
    }
} else {
    // Handle database error
    echo 'error';
}

?>