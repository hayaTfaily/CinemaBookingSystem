<?php
include("includes/navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home </title>
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--swiper css link-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Vidaloka&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(images/bg1.jpg) no-repeat; background-size: cover;">
            <div class="content"><p>Tickets to your favorite stories</p></div>
            </div>
            <div class="swiper-slide slide" style="background:url(images/bg2.jpg) no-repeat; background-size: cover;">
            <div class="content"><p>Discover, book, indulge – cinemagic begins</p></div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<section class="about">
<div class="section">
<div class="image">
    <img src="images/about.png">
</div>
  <div class="container">
      <div class="box">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <div class="content">
            <h2> About Us </h2>
            <p><i class='bx bxs-pointer'></i>Bringing movie magic to your fingertips.</p>
            <p>Streamlined booking for an easy movie experience.</p>
            <p>Offering a range of films for every taste.</p>
            <p>Secure and reliable ticketing at your service.</p>
            <p>Offering cutting-edge facilities for your movie enjoyment.</p>
            <p>Hosting special screenings and events to elevate your experience.</p>
        </div>
        </div>
    </div>
  </div>
</section>

<section class="movies">

<h1>Must-See Movies</h1>
<div class="movies-container">

<div class="movie-card">
  <img src="images/movie1.jfif" alt="Movie Poster" class="poster">
</div>

<div class="movie-card">
  <img src="images/movie2.jfif" alt="Movie Poster" class="poster">
</div>

<div class="movie-card">
  <img src="images/movie5.jfif" alt="Movie Poster" class="poster">
</div>

<div class="movie-card">
  <img src="images/movie4.jfif" alt="Movie Poster" class="poster">
</div>
</div>

<button class="more-btn">See More</button>

</section>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/home.js"></script>
</body>
</html>