<?php 
require('../config/db.php');
$query="select * from ticket;";
$result=mysqli_query($con,$query);
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
    <link rel="stylesheet" href="assets/css/addticket.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.2/owl.carousel.min.js"></script>

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
				<a href="dashbord.php">
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
            <div class="fortitle">
                <h1>Add Ticket</h1>
            </div>
            <div class="main-content">
        <div class="leftright">
            <div class="right">
                <div class="titlesearch">
                    <div>
                        <h2>Tickets</h2>
                    </div>
                    <div class="searchbox">
                        <input type="text" name="search" id="search" placeholder="Search...">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
              <div class="tablediv">
                <table class="table" id="stable">
                    <thead>
                    <tr>
                        <th class="appId">AppId</th>
                        <th>Name</th>
                        <th>Movie</th>
                        <th>Nb people</th>
                        <th>Day</th>
                        <th>Hour</th>
                       
                    </tr>
					</thead>
					<?php
					    while($row=mysqli_fetch_assoc($result))
						{
							echo '
							<tr>
								<td>'.$row["userName"].'</td>
								<td>'.$row["movieId"].'</td>
								<td>'.$row["nbPeople"].'</td>
								<td>'.$row["day"].'</td>
								<td>'.$row["hour"].'</td>
							</tr>
							';
						}
										
					?>
                 
                  
                    
                </table>

              </div>

            </div>
            <div class="left">
                <div class="title">
                    <h2>Add Ticket</h2>
                </div>

                <form id="form">
                    <div class="txt" id="formovie">
                       <label for="pname">Movie name</label>
                       <select name="mname" id="mname" >
						<option value="">Select Movie Name</option>
						<?php 
						$query2="select * from movie;";
						$result2=mysqli_query($con,$query2);
						while($row=mysqli_fetch_assoc($result2))
						{
							echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
						}

						?>
					   </select>
                    </div>
                    <div class="txt" id="forname">
                       <label for="userName">Name of watcher</label>
                       <input type="text" name="userName" id="userName" >
                    </div>
                    <div class="txt" id="forNbPeople">
                       <label for="nbppl">Number of watchers</label>
                       <input type="number" name="nbppl" id="nbppl">
                    </div>
                     <div class="txt" id="fordate">
                        <label for="nappdate">Date</label>
                        <input type="date" name="date" id="date">
                     </div>
                     <div class="txt" id="fortime">
                        <label for="tapp">Time</label>
                        <input type="time" name="time" id="time">
                     </div>
					 <div class="btn">
                        <input type="submit" value="Add" name="submit" id="add" class="add">
                     </div>
                </form>

            </div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script>
		//to the search box

var filterInput = document.getElementById('search');
var dataTable = document.getElementById('stable');
var rows = dataTable.getElementsByTagName('tr');

filterInput.addEventListener('input', function() {
var filterValue = filterInput.value.toLowerCase();
for (var i = 1; i < rows.length; i++) {
	var row = rows[i];
	var cells = row.getElementsByTagName('td');
	var shouldShow = false;
	for (var j = 0; j < cells.length; j++) {
	var cellText = cells[j].textContent.toLowerCase();
	if (cellText.includes(filterValue)) {
		shouldShow = true;
		break;
	}
	}
	row.style.display = shouldShow ? 'table-row' : 'none';
}
});

//to send request 
document.getElementById('form').addEventListener('submit',(e)=>{
                e.preventDefault();
                var formData = new FormData(document.getElementById("form"));
             $.ajax({
              method:"POST",
              url:"./queryFunction/addTicketAdmin.php",
              processData: false,
               contentType: false, 
               cache: false,
               enctype: 'multipart/form-data',
              data:formData,
              success:function(){
					Swal.fire({
						title: "Ticket Sent!",
						icon: "success",
						text: `Ticket on ${document.getElementById('date').value} at ${document.getElementById('time').value} has been added successfully.`,
						confirmButtonText: "OK"
					}).then(() => {
						location.reload();
					});
				
              }
			})
			})

</script>
	

	<script src="assets/js/dashboard.js"></script>
</body>
</html>