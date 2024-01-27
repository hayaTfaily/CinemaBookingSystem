<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/movieSingle.css">
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
            <form action="">
                <input type="text" id="name" placeholder="Your name">
                <br>
                <select name="" id="">
                    <option value="">Select the day you want</option>
                </select>
                <br>
                <p>Select hour available in the selected day</p>
                <div class="times">
                    <div>10:00</div>
                    <div>10:00</div>
                    <div>10:00</div>
                    <div>10:00</div>
                    <div>10:00</div>
                    <div>10:00</div>
                </div>
                <br>
                <input type="text" id="nbpeople" placeholder="Enter number of people">
                <br>
                <div class="forsubmit">
                    <input type="submit" id="submit" value="Book">
                </div>
             </form>
        </div>
        <div class="forinfo2">
        <img src="images/about.png" alt="">
        </div>
    </div>
   </div>
    
</body>
</html>