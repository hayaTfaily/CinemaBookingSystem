<?php
 require('../config/db.php');
 $query="select * from screenhours";
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

		<!-- MAIN -->
		<main>
            <div class="fortitle">
                <h1>Add Screen Hours</h1>
            </div>
			
			<div class="main-content">
        <div class="leftright">
            <div class="right">
                <div class="titlesearch">
                    <div>
                        <h2>Screen Hours</h2>
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
                        <th>Movie Name</th>
                        <th>Day</th>
                        <th>Hour</th>
                        <th>Nb Seats</th>   
                    </tr>
					</thead>
					<?php 
					while($row=mysqli_fetch_assoc($result))
					{
						echo '
						<tr>
                        <th class="appId">'.$row["id"].'</th>
                        <th>'.$row['movieId'].'</th>
                        <th>'.$row['day'].'</th>
                        <th>'.$row['hour'].'</th>
                        <th>'.$row['seats'].'</th>   
                    </tr>
						';
					}
					?>
                  
                    
                </table>

              </div>

            </div>
            <div class="left">
                <div class="title">
                    <h2>Add Screen Hours</h2>
                </div>

                <form id="form">
                     <div class="txt" id="fordate">
                        <label for="nappdate">Date</label>
                        <input type="date" name="date" id="date" style="width: 285px;">
                     </div>
                     <div class="txtgrid" id="fortime">
						<div>At 10:00</div>
						<select name="10:00" id="10:00" >
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
					   <div>At 13:00</div>
						<select name="13:00" id="13:00" >
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
					   <div>At 16:00</div>
						<select name="16:00" id="16:00" >
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
					   <div>At 19:00</div>
						<select name="19:00" id="19:00" >
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
					   <div>At 22:00</div>
						<select name="22:00" id="22:00" >
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
		document.getElementById('form').addEventListener('submit',(e)=>{
                e.preventDefault();
                var formData = new FormData(document.getElementById("form"));
             $.ajax({
              method:"POST",
              url:"./queryFunction/addScreenHoursAdmin.php",
              processData: false,
               contentType: false, 
               cache: false,
               enctype: 'multipart/form-data',
              data:formData,
              success:function(){
					Swal.fire({
						title: "Movies Sent!",
						icon: "success",
						text: "Movies added succefully",
						confirmButtonText: "OK"
					}).then(() => {
						// location.reload();
					});
				
              }
			})
			})
	</script>
	

	<script src="assets/js/dashboard.js"></script>
</body>
</html>