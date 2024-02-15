<?php 
$currentScript = basename($_SERVER['PHP_SELF']);

$currentPage = ($currentScript == 'dashboard.php') ? 'dashboard.php' :
               (($currentScript == 'addpatient.php') ? 'addpatient.php' :
               (($currentScript == 'settings.php') ? 'settings.php' : ''));
?>
<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li <?php echo ($currentPage == 'dashboard.php') ? 'class="active"' : ''; ?>>
				<a href="dashboard.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li <?php echo ($currentPage == 'manageScreenHours.php') ? 'class="active"' : ''; ?>>
				<a href="manageScreenHours.php">
                    <i class='bx bxs-group' ></i>
					<span class="text">ScreenHours</span>
				</a>
			</li>
			<li <?php echo ($currentPage == 'manageTicket.php') ? 'class="active"' : ''; ?>>
				<a href="manageTicket.php">
                <i class='bx bxs-group' ></i>
					<span class="text">Tickets</span>
				</a>
			</li>
			<li <?php echo ($currentPage == 'addMovies.php') ? 'class="active"' : ''; ?>>
				<a href="addMovies.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Movies</span>
				</a>
			</li>
            <li <?php echo ($currentPage == 'manageCast.php') ? 'class="active"' : ''; ?>>
				<a href="manageCast.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Casts</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>