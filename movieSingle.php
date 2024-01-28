<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/movieSingle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.2/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="video">
       <iframe width="100%" height="450" src="https://www.youtube.com/embed/zSWdZVtXT7E?si=sI6qUVOb_gsIT8iC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="movieInfo">
        <div class="poster">
            <span class="name">Interstellar</span>
            <span class="duration">120 mins</span>
            <img src="images/interstellar.jpg" alt="">
        </div>
        <div class="story">
            <span class="title">Story</span>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit a ipsam dolores ipsa sit illum est. Rem, dicta voluptatibus adipisci possimus eligendi ullam molestiae rerum est expedita ab, ea iusto!</p>
        </div>
        <div class="cast">
            <span class="title">Cast</span>
            <div class="person">
                <img src="images/cast1.jpg" alt="">
                <div class="personname">Anne Hathaway</div>
            </div>
            <div class="person">
                <img src="images/cast1.jpg" alt="">
                <div class="personname">Anne Hathaway</div>
            </div>
            <div class="person">
                <img src="images/cast1.jpg" alt="">
                <div class="personname">Anne Hathaway</div>
            </div>
            <div class="person">
                <img src="images/cast1.jpg" alt="">
                <div class="personname">Anne Hathaway</div>
            </div>
        </div>
        
    </div>
   <div class="bookingSection">
    <h1>Book Now</h1>
    <div class="booknow">
        <div class="forinfo1">
            <form id="bookform" action="">
                <input type="text" id="name" name="name" placeholder="Your name" value="Haya">
                <br>
                <select name="" id="selectDay" nname="selectDay">
                    <option value="">Select the day you want</option>
                    <option value="2022-01-31">2022-01-31</option>
                    <option value="2022-01-31">2022-01-31</option>
                </select>
                <div class="error" id="errorday" ></div>
                <br>
                <p>Select hour available in the selected day</p>
                <div class="times">
                   <ul id="times">
                    <li>15:30:00</li>
                    <li>15:30:00</li>
                    <li>15:30:00</li>
                    <li>15:30:00</li>
                    <li>15:30:00</li>
                    <li>15:30:00</li>
                   </ul>
                   <div class="error" id="errortime"></div>
                </div>
                <br>
                <input type="number" id="nbpeople" name="nbpeople" placeholder="Enter number of people">
                <div class="error" id="errornb"></div>
                <br>
                <div class="forsubmit">
                    <input type="submit" id="submit" value="Book" name="submit">
                </div>
             </form>
        </div>
        <div class="forinfo2">
        <img src="images/about.png" alt="">
        </div>
    </div>
   </div>

   <script src="./assets/js/movieSingle.js"></script>
    
</body>
</html>