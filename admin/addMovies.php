<?php
require('../config/db.php');

$sql = "SELECT * FROM movie";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Movies </title>
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/addMovies.css">
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!-- Include jQuery -->
</head>
<body>
   <?php
   include('./includes/sidebar.php');
   ?>

    <!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->
        <main>
            <div class="tables">
				<div class="table-movies">
					<div class="head">
						<h3> Movies </h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Title</th>
								<th>IMDb</th>
                                <th>Duration</th>
                                <th>StartDay</th>
                                <th>EndDay</th>
                                <th>Story</th>
								<th>Category</th>
								<th>Age Range</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
                        <?php
                        // Reset the result pointer
                        mysqli_data_seek($result, 0);

                        // Iterate over the query results and generate table rows
                        while ($row = mysqli_fetch_assoc($result)) {
							?>
                                <tr>
                                    <td><?= $row['name'];?></td>
                                    <td><?= $row['imbd']; ?></td>
                                    <td><?= $row['duration']; ?></td>
                                    <td><?= $row['startDay']; ?></td>
                                    <td><?= $row['endDay']; ?></td>
                                    <td><?= $row['story']; ?></td>
									<td><?= $row['categorie']; ?></td>
                                    <td><?= $row['agetowatch']; ?></td>
									<td><button>Edit</button>
                                    <button class="del-btn">Delete</button>
									</td>
                                </tr>
                            <?php }
                        ?>
						</tbody>
					</table>
				</div>
			<div class="add-movie">
				<form id="addMovieForm" enctype="multipart/form-data">
				<h2>Add Movie</h2>
				<div class="input-row">
					<div class="input-container">
					<label>Movie's Name</label>
					<input type="text" name="title">
					</div>
					<div class="input-container">
					<label>Poster</label>
					<input name="poster" required="" placeholder="Upload Image" type="file" accept="image/*" class="input">
					</div>
				</div>
				<div class="input-row">
				    <div class="input-container">
					<label>IMBD</label>
					<input type="text" name="imbd">
				    </div>
					<div class="input-container">
					<label>Duration</label>
					<input type="number" name="duration">
					</div>
					<div class="input-container">
					<label>Story</label>
					<input type="textarea" name="story">
					</div>
				</div>
				<div class="input-row">
				    <div class="input-container">
					<label>Category</label>
					<input type="text" name="categorie">
					</div>
					<div class="input-container">
					<label>Age To Watch</label>
					<input type="number" name="agetowatch">
					</div>
				</div>
				<div class="input-row">
				    <div class="input-container">
					<label>StartDay</label>
					<input type="date" name="startday">
					</div>
					<div class="input-container">
					<label>End Day</label>
					<input type="date" name="endday">
					</div>
				</div>
					<input type="submit" name="submit">
				</form>
			</div>
			</div>
		</main>
		<!-- MAIN -->
    </section>
	<script>
    $(document).ready(function () {
        $('#addMovieForm').submit(function (event) {
            event.preventDefault(); // Prevent default form submission
            var formData = $(this).serialize(); // Serialize form data
            $.ajax({
                type: 'POST',
                url: './queryFunction/addMovieFunction.php',
                data: formData,
                success: function (response) {
                    // Append new movie to the table
                    $('.table-movies table tbody').append(response);
                    $('#addMovieForm')[0].reset(); // Reset form
                },
                error: function (xhr, status, error) {
                    // Handle error
                    console.error(xhr.responseText);
                    // Display an error message to the user
                    // For example:
                    alert('An error occurred while adding the movie. Please try again later.');
                }
            });
        });
    });

	$(document).ready(function () {
		$(".del-btn").click(function (e) {
        e.preventDefault(); 
        deleteAction($(this).closest("tr").find("td:eq(0)").text());
    });
	});

	function deleteAction(r) {
    Swal.fire({
        title: 'Are you sure?',
        text: 'You won\'t be able to revert this!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: './queryFunction/delete_movie.php',
                type: 'get',
                data: { id: r },
                success: function (data) {
                    location.reload();
                },
                error: function (jXHR, textStatus, errorThrown) {
                    alert(errorThrown);
                }
            });
        }
    });
}

    </script>
    <script src="assets/js/dashboard.js"></script>
</body>
</html>