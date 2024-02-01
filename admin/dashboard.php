<?php

include('../config/db.php');

$today = date("Y-m-d");

// Query to fetch movies for today
$query = "SELECT m.name, sh.hour FROM movie m, screenhours sh WHERE m.id = sh.movieid AND sh.day = CURDATE()";

// Prepare and execute the statement
$stmt = mysqli_prepare($con, $query);

if ($stmt) {
    // No need for binding parameters as there are no placeholders in the query

    mysqli_stmt_execute($stmt);

    // Get the result set
    $result = mysqli_stmt_get_result($stmt);
}

$query2 = "SELECT u.username, m.name, t.nbPeople, t.hour FROM users u JOIN ticket t ON u.id = t.userId JOIN movie m ON t.movieId = m.id WHERE DATE(t.day) = CURDATE()";

$stmt2 = mysqli_prepare($con, $query2);

if ($stmt2) {
    // No need for binding parameters as there are no placeholders in the query

    mysqli_stmt_execute($stmt2);

    // Get the result set
    $result2 = mysqli_stmt_get_result($stmt2);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="assets/css/dashboard.css">

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="dashboard.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="manageTicket.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Add Ticket</span>
				</a>
			</li>
			<li>
				<a href="manageScreenHours.php">
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
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
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

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
                    <span class="currentDay" id="currentDay"></span>,<span class="currentDate" id="currentDate"></span>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>Movies</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Visitors</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>2543</h3>
						<p>Tickets</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3> Tickets </h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Username</th>
								<th>Movie</th>
                                <th>Time</th>
                                <th>Nb People</th>
							</tr>
						</thead>
						<tbody>
                        <?php
                        // Reset the result pointer
                        mysqli_data_seek($result2, 0);

                        // Iterate over the query results and generate table rows
                        while ($row = mysqli_fetch_assoc($result2)) {
                            echo "<tr>
                                    <td>{$row['username']}</td>
                                    <td>{$row['name']}</td>
                                    <td>{$row['hour']}</td>
                                    <td>{$row['nbPeople']}</td>
                                </tr>";
                        }
                        ?>
						</tbody>
					</table>
				</div>
                    <div class="order">
					<div class="head">
						<h3> Movies </h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Movie</th>
                                <th>Time</th>
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
                                    <td>{$row['hour']}</td>
                                </tr>";
                        }
                        ?>
                    </tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="assets/js/dashboard.js"></script>
</body>
</html>