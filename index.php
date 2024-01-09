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
    <link rel="stylesheet" href="assets/css/footer.css">
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
            <div class="swiper-slide slide">
              <img src="images/bg10.jpeg">
            <div class="content"><p>Tickets to your favorite stories</p></div>
            </div>
            <div class="swiper-slide slide">
              <img src="images/bg4.jpg">
            <div class="content"><p>Discover, book, indulge – cinemagic begins</p></div>
            </div>
            <div class="swiper-slide slide">
              <img src="images/bg6.jfif">
            <div class="content"><p>Discover, book, indulge – cinemagic begins</p></div>
            </div>
            <div class="swiper-slide slide">
              <img src="images/bg5.jfif">
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
            <p>Bringing movie magic to your fingertips.</p>
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

<h1> Openning This Week </h1>
<div class="movies-container">

<div class="movie-card">
  <img src="images/movie1.jfif" alt="Movie Poster" class="poster">
  <div class="content">
    <h2> Lost In Space </h2>
    <p> IMDb 7.3/10 </p>
  </div>
  <div class="button">
    <a href=""> Book Ticket </a>
  </div>
</div>

<div class="movie-card">
  <img src="images/movie2.jfif" alt="Movie Poster" class="poster">
  <div class="content">
    <h2> Avatar </h2>
    <p> IMDb 7.3/10 </p>
  </div>
  <div class="button">
    <a href=""> Book Ticket </a>
  </div>
</div>

<div class="movie-card">
  <img src="images/movie5.jfif" alt="Movie Poster" class="poster">
  <div class="content">
    <h2> Interstellar </h2>
    <p> IMDb 7.3/10 </p>
  </div>
  <div class="button">
    <a href=""> Book Ticket </a>
  </div>
</div>

<div class="movie-card">
  <img src="images/movie4.jfif" alt="Movie Poster" class="poster">
  <div class="content">
    <h2> LaLa Land </h2>
    <p> IMDb 7.3/10 </p>
  </div>
  <div class="button">
    <a href=""> Book Ticket </a>
  </div>
</div>
</div>
</section>
<section class="coming-movies">

<h1> Coming Movies </h1>
<div class="movies-container">

<div class="movie-card">
  <img src="images/movie1.jfif" alt="Movie Poster" class="poster">
  <div class="content">
    <h2> Lost In Space </h2>
    <p> IMDb 7.3/10 </p>
  </div>
  <div class="button">
    <a href=""> Book Ticket </a>
  </div>
</div>

<div class="movie-card">
  <img src="images/movie2.jfif" alt="Movie Poster" class="poster">
  <div class="content">
    <h2> Avatar </h2>
    <p> IMDb 7.3/10 </p>
  </div>
  <div class="button">
    <a href=""> Book Ticket </a>
  </div>
</div>

<div class="movie-card">
  <img src="images/movie5.jfif" alt="Movie Poster" class="poster">
  <div class="content">
    <h2> Interstellar </h2>
    <p> IMDb 7.3/10 </p>
  </div>
  <div class="button">
    <a href=""> Book Ticket </a>
  </div>
</div>

<div class="movie-card">
  <img src="images/movie4.jfif" alt="Movie Poster" class="poster">
  <div class="content">
    <h2> LaLa Land </h2>
    <p> IMDb 7.3/10 </p>
  </div>
  <div class="button">
    <a href=""> Book Ticket </a>
  </div>
</div>
</div>

</section>

<section class="contact">
  <div class="contact-in">
    <div class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52992.23057508087!2d35.46308239204311!3d33.889282695157895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f17215880a78f%3A0x729182bae99836b4!2sBeirut!5e0!3m2!1sen!2slb!4v1704633830321!5m2!1sen!2slb"
      width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="contact-form">
      <h1> Contact Us </h1>
      <form>
        <input type="text" placeholder="Enter your name" />
        <input type="email" placeholder="Enter your email" />
        <textarea placeholder="Message"></textarea>
        <input type="submit" name="Send" class="btn">
      </form>
    </div>
  </div>
</section>

<?php
include("includes/footer.php")
?>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/home.js"></script>
</body>
</html>