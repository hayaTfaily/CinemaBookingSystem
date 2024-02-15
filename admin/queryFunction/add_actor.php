<?php

require('../../config/db.php');

$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $movie = mysqli_real_escape_string($con, $_POST['movie']);

    // Check if all required fields are provided
    if (!empty($fname) && !empty($lname) && !empty($movie) && isset($_FILES['picture'])) {
        // Handle file upload
        $uploadDir = '../../uploads/';
        $uploadedFileName = $_FILES['picture']['name'];
        $uploadedFilePath = $uploadDir . basename($uploadedFileName);
        
        if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploadedFilePath)) {
            // Insert actor into actors table
            $sql = "INSERT INTO actors (fname, lname, photo) VALUES ('$fname', '$lname', '$uploadedFileName')";
            $result = mysqli_query($con, $sql);

            if ($result) {
                $actorId = mysqli_insert_id($con);

                // Get movie ID
                $sql = "SELECT id FROM movie WHERE name = '$movie'";
                $result = mysqli_query($con, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $movieId = $row['id'];

                    // Insert actor ID and movie ID into cast table
                    $sql = "INSERT INTO cast (actorId, movieId) VALUES ('$actorId', '$movieId')";
                    $result = mysqli_query($con, $sql);

                    if ($result) {
                        $response['success'] = true;
                        $response['message'] = 'Actor added successfully.';
                    } else {
                        $response['success'] = false;
                        $response['message'] = 'Failed to add actor to cast.';
                    }
                } else {
                    $response['success'] = false;
                    $response['message'] = 'Movie not found.';
                }
            } else {
                $response['success'] = false;
                $response['message'] = 'Failed to add actor to database.';
            }
        } else {
            $response['success'] = false;
            $response['message'] = 'Failed to upload picture.';
        }
    } else {
        $response['success'] = false;
        $response['message'] = 'Missing required fields.';
    }
} else {
    $response['success'] = false;
    $response['message'] = 'Invalid request method.';
}

// Send JSON response
header('Content-Type: application/json');
echo json_encode($response);

mysqli_close($con);
?>
