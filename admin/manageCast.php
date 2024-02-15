<?php
require('../config/db.php');

$sql = "SELECT * FROM actors";
$result = $con->query($sql);

$sql2 = "SELECT fname,lname,name FROM cast,movie,actors WHERE cast.movieId = movie.id and cast.actorId = actors.id";
$result2 = $con->query($sql2);

$sql3 = "SELECT * FROM movie";
$result3 = $con->query($sql3);

$movies = [];
while ($row = mysqli_fetch_assoc($result3)) {
    $movies[] = $row['name'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Movies </title>
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/addMovies.css">
    <link rel="stylesheet" href="assets/css/cast.css">
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
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
		</nav>
        <main>
        <div class="tables">
            <div class="actors-table">
            <div class="head">
                <h3> Actors </h3>
                <i class='bx bx-search' ></i>
			    <i class='bx bx-filter' ></i>
				</div>
                <table>
					<thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Photo</th>
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
                                    <td><?= $row['fname'];?></td>
                                    <td><?= $row['lname']; ?></td>
                                    <td><img src="../uploads/<?= $row['photo']; ?>"></td>
                                </tr>
                            <?php }
                        ?>
						</tbody>
                </table>
            </div>

            <div class="cast-table">
            <div class="head">
                <h3> Movies' Cast </h3>
                <i class='bx bx-search' ></i>
			    <i class='bx bx-filter' ></i>
				</div>
                <table>
					<thead>
                        <tr>
                            <th>Movie</th>
                            <th>Actor</th>
                        </tr>
					</thead>
                    <tbody>
                        <?php
                        // Reset the result pointer
                        mysqli_data_seek($result2, 0);

                        // Iterate over the query results and generate table rows
                        while ($row = mysqli_fetch_assoc($result2)) {
							?>
                                <tr>
                                    <td><?= $row['name'];?></td>
                                    <td><?= $row['fname'] . ' ' . $row['lname']; ?></td>
                                </tr>
                            <?php }
                        ?>
						</tbody>
                </table>
            </div>
        </div>

        <div class="forms">
            <div class="add-actor">
                <form id="addActorForm">
                <h2>Add Actor</h2>
                <div class="input-row">
                    <div class="input-container">
                    <label>First Name</label>
                    <input type="text" name="fname">
                    </div>
                    <div class="input-container">
                    <label>Last Name</label>
                    <input type="text" name="lname">
                    </div>
                </div>
                <div class="input-row">
                    <div class="input-container">
                    <label>Picture</label>
                    <input type="file" name="picture">
                    </div>
                    <div class="input-container">
                    <label>Movie</label>
                    <select class="select-movie" name="movie">
                    <?php foreach ($movies as $movie) { ?>
                        <option value="<?= $movie ?>"><?= $movie ?></option>
                    <?php } ?>
                    </select>
                    </div>
                </div>
                    <input type="submit" name="submit">
                </form>
            </div>
        </div>
		</main>
    </section>

    <script>

    $(document).ready(function() {
    $('#addActorForm').submit(function(e) {
        e.preventDefault();
        
        var formData = new FormData(this);
        console.log(formData);
        $.ajax({
            url: './queryFunction/add_actor.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false, 
            cache: false,
            enctype: 'multipart/form-data',
            success: function(response) {
                
                $('#addActorForm')[0].reset(); 
                location.reload();

                console.log(success);
            },
            error: function(xhr, status, error) {
                // Handle errors
                console.error('Error:', error);
                alert('Failed to add actor');
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });
});

    </script>
    <script src="assets/js/dashboard.js"></script>
</body>
</html>