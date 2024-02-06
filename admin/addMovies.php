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
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="dashboard.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">My Store</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Analytics</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message</span>
				</a>
			</li>
			<li class="active">
				<a href="addMovies.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Movies</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

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
							</tr>
						</thead>
						<tbody>
                        <?php
                        // Reset the result pointer
                        mysqli_data_seek($result, 0);

                        // Iterate over the query results and generate table rows
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                    <td>{$row['name']}</td>
                                    <td>{$row['imbd']}</td>
                                    <td>{$row['duration']}</td>
                                    <td>{$row['startDay']}</td>
                                    <td>{$row['endDay']}</td>
                                    <td>{$row['story']}</td>
                                </tr>";
                        }
                        ?>
						</tbody>
					</table>
				</div>
			<div class="add-movie">
				<form>
					<label>Movie's Name</label>
					<input type="text" name="title">
					<label>IMBD</label>
					<input type="text" name="imbd">
					<label>Duration</label>
					<input type="number" name="duration">
					<label>StartDay</label>
					<input type="date" name="startdate">
					<label>End Day</label>
					<input type="date" name="enddate">
					<input type="submit" name="submit">
				</form>
			</div>
			</div>
		</main>
		<!-- MAIN -->
    </section>
    <script src="assets/js/dashboard.js"></script>
</body>
</html>