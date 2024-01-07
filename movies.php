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
        <div class="movie">
            <div class="poster">
                <img src="images/prideandprejudice.jpg" alt="">
            </div>
            <div class="info">
                <div class="moviename">
                    <div>
                    <label for="">Pride and Prejudice</label> <span>16+</span>
                    <br>
                    <span class="duration">120 mins</span> <span class="categorie">Romance</span>
                    </div>
                    <div>IMBD:8.1</div>
                </div>
                <div class="story">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis similique, rem vitae amet fuga provident vel officia atque maiores unde, maxime ut necessitatibus minima rerum nisi obcaecati illo totam facere!</p>
                </div>
                <div class="time">
                    <button><div>
                   <label for=""><i class='bx bx-time'></i>From 1 February to 20 February</label>
                    <label for="">Book Ticket <i class='bx bx-chevron-right'></i></label>
                    </div></button>
                </div>
            </div>
        </div>
        <div class="movie">
            <div class="poster">
                <img src="images/interstellar.jpg" alt="">
            </div>
            <div class="info">
                <div class="moviename">
                    <div>
                    <label for="">Interstellar</label> <span>16+</span>
                    <br>
                    <span class="duration">180 mins</span> <span class="categorie">Romance</span>
                    </div>
                    <div>IMBD:8.1</div>
                </div>
                <div class="story">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis similique, rem vitae amet fuga provident vel officia atque maiores unde, maxime ut necessitatibus minima rerum nisi obcaecati illo totam facere!</p>
                </div>
                <div class="time">
                    <button><div>
                   <label for=""><i class='bx bx-time'></i>From 1 February to 20 February</label>
                    <label for="">Book Ticket <i class='bx bx-chevron-right'></i></label>
                    </div></button>
                </div>
            </div>
        </div>
        <div class="movie">
            <div class="poster">
                <img src="images/prideandprejudice.jpg" alt="">
            </div>
            <div class="info">
                <div class="moviename">
                    <div>
                    <label for="">Pride and Prejudice</label> <span>16+</span>
                    <br>
                    <span class="duration">120 mins</span> <span class="categorie">Romance</span>
                    </div>
                    <div>IMBD:8.1</div>
                </div>
                <div class="story">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis similique, rem vitae amet fuga provident vel officia atque maiores unde, maxime ut necessitatibus minima rerum nisi obcaecati illo totam facere!</p>
                </div>
                <div class="time">
                    <button><div>
                   <label for=""><i class='bx bx-time'></i>From 1 February to 20 February</label>
                    <label for="">Book Ticket <i class='bx bx-chevron-right'></i></label>
                    </div></button>
                </div>
            </div>
        </div>
        <div class="movie">
            <div class="poster">
                <img src="images/interstellar.jpg" alt="">
            </div>
            <div class="info">
                <div class="moviename">
                    <div>
                    <label for="">Interstellar</label> <span>16+</span>
                    <br>
                    <span class="duration">180 mins</span> <span class="categorie">Romance</span>
                    </div>
                    <div>IMBD:8.1</div>
                </div>
                <div class="story">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis similique, rem vitae amet fuga provident vel officia atque maiores unde, maxime ut necessitatibus minima rerum nisi obcaecati illo totam facere!</p>
                </div>
                <div class="time">
                     <button class="timebtn">
                        <div>
                            <div class="txt">
                                <i class='bx bx-time'></i>
                                <span>From 1 February to 20 February</span>
                            </div>
                            <div class="txt">
                                <span>Book Ticket</span>
                                <i class='bx bx-chevron-right'></i>
                            </div>
                        </div>
                     </button>

                </div>
            </div>
        </div>
        
    </div>
</body>
</html>