<?php
require('./config/db.php');
$query="select * from movie";
$result=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/movies.css">
</head>
<body>
    <div class="top">
        <div class="navbar">
        <?php
            include("includes/navbar.php");
        ?>
        </div>
        <div class="title">
            <h1>Movies</h1>
        </div>
        <div class="forsearch">
            <div class="searchbox">
                <input type="text" placeholder="Search movie">
                <i class='bx bx-search'></i>
            </div>
            <div class="selectbox">
                <select name="" id="">
                    <option value="day1">Select the day</option>
                </select>
            </div>
        </div>
    </div>
    <div class="movies">
        <?php
        while($row=mysqli_fetch_assoc($result))
        {
            echo '
            <div class="movie">
            <div class="poster">
                <img src="images/'.$row["photo"].'" alt="">
            </div>
            <div class="info">
                <div class="moviename">
                    <div>
                    <label for="">'.$row['name'].'</label> <span>16+</span>
                    <br>
                    <span class="duration">'.$row["duration"].' mins</span> <span class="categorie">'.$row["categorie"].'</span>
                    </div>
                    <div>IMBD:'.$row["imbd"].'</div>
                </div>
                <div class="story">
                    <p>'.$row["story"].'</p>
                </div>
                <div class="time">
                    <a href="movieSingle.php?id='.$row["id"].'">
                        <button><div>
                        <label for=""><i class="bx bx-time"></i>From '.$row["startDay"].' to '.$row["endDay"].'</label>
                        <label for="">Book Ticket <i class="bx bx-chevron-right"></i></label>
                        </div></button>
                    </a>
                </div>
            </div>
        </div>
            ';
        }
        ?>
        
        
    </div>
</body>
</html>