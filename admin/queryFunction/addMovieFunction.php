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
$link = $_POST['link'];

$uploadDir = '../../uploads/';
$uploadedFileName = $_FILES['poster']['name'];
$uploadedFilePath = $uploadDir . $uploadedFileName;

if (move_uploaded_file($_FILES['poster']['tmp_name'], $uploadedFilePath)) {
    // Store image data and file path in the database
    // ... (your database insert code here)
    $success = true;
} else {
    $success = false;
}

echo json_encode(['success' => $success]);
// Move uploaded file to target directory

    $query = "INSERT INTO movie (name, photo,imbd, duration, startDay, endDay, story, categorie, agetowatch, link) 
              VALUES ('$title', '$uploadedFileName','$imbd','$duration', '$startday', '$endday', '$story', '$categorie', '$age', '$link')";
    $result = mysqli_query($con, $query);

    if ($result) {
        // If insertion successful, return the newly added movie row
        echo "<tr>
        <td>$title</td>
        <td><img src='../../uploads/$uploadedFileName'></td>
        <td>$imbd</td>
        <td>$duration</td>
        <td>$startday</td>
        <td>$endday</td>
        <td>" . substr($story, 0, 15) . "</td>
        <td>$categorie</td>
        <td>$age</td>
        <td>" . substr($link, 0, 15) . "</td>
    </tr>";
}
// Close database connection
mysqli_close($con);
?>

