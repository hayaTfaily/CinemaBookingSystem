<?php
session_start();
require('./config/db.php');
$id=$_GET['id'];
$userid=$_SESSION['userid'];
$query="select * from movie where id=".$id;
$result=mysqli_query($con,$query);
$query2="select actors.fname,actors.lname,actors.photo from actors,movie,cast where cast.movieId=movie.id and cast.actorId=actors.id and movie.id=".$id;
$result2=mysqli_query($con,$query2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/movieSingle.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.2/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php
while($row = mysqli_fetch_assoc($result)) {
    echo '
    <div class="video">
       <iframe width="100%" height="450" src="https://www.youtube.com/embed/zSWdZVtXT7E?si=sI6qUVOb_gsIT8iC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="movieInfo">
        <div class="poster">
            <span class="name">' . $row["name"] . '</span>
            <span class="duration">' . $row["duration"] . ' mins</span>
            <img src="images/'.$row["photo"].'" alt="">
        </div>
        <div class="story">
            <span class="title">Story</span>
            <p>' . $row["story"] . '</p>
        </div>
        <div class="cast">
            <span class="title">Cast</span>';
            // Rewind internal result pointer
            mysqli_data_seek($result2, 0);
            while($castRow = mysqli_fetch_assoc($result2))
            {
            echo '<div class="person">
                <img src="images/'.$castRow["photo"].'" alt="">
                <div class="personname">'.$castRow["fname"].' '.$castRow["lname"].'</div>
            </div>';
            }
       echo '</div>
    </div>
    <div class="bookingSection">
        <h1>Book Now</h1>
        <div class="booknow">
            <div class="forinfo1">
                <form id="bookform" action="">
                    <!-- <input type="hidden" id="name" name="name" placeholder="Your name" value="'.$userid.'" readOnly> -->
                    <br>
                    <select name="selectDay" id="selectDay">
                        <option value="">Select the day you want</option>';
                        
                        $startDate = new DateTime($row['startDay']);
                        $endDate = new DateTime($row['endDay']);
                        
                       
                        $interval = new DateInterval('P1D');
                        $dateRange = new DatePeriod($startDate, $interval, $endDate);
                        foreach ($dateRange as $date) {
                            $dateString = $date->format('Y-m-d');
                            echo "<option value=\"$dateString\">$dateString</option>";
                        }
                        echo '
                    </select>
                    <div class="error" id="errorday" ></div>
                    <br>
                    <p>Select hour available in the selected day</p>
                    <div class="times">
                       <ul id="times">
                       
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
    </div>';
}
?>

<script>
    $(document).ready(function() {
    $('#selectDay').change(function() {
        var selectedDay = $(this).val();
        var movieId = <?php echo $id; ?>;
        $.ajax({
            url: './functions/availableHours.php', 
            method: 'POST',
            data: { selectedDay: selectedDay, movieId: movieId }, 
            success: function(response) {
                $('.times ul').empty();
            var times = JSON.parse(response); 
            times.forEach(function(time) {
                $('.times ul').append('<li>' + time + '</li>');
            });
        },

            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});
$("#bookform").submit(function (e) {
    e.preventDefault();
    
    let nbpeople = $("#nbpeople").val();
    let selectedTime = $("#times li.selected").text();
    let selectedDay = $("#selectDay").val();

   
    $.ajax({
        method: "GET",
        url: "functions/checkAuth.php", 
        success: function(response) {
            if (response === "authenticated") {
               
                if (nbpeople < 5 && nbpeople !== "" && selectedDay !== "" && selectedTime !== "") {
                    $.ajax({
                        method:"POST",
                        url:"functions/addTicket.php",
                        cache: false,
                        data:{
                            name: name, 
                            nbpeople: nbpeople,
                            time: selectedTime,
                            day: selectedDay,
                        },
                        success:function(response){
                            Swal.fire({
                                title: "Ticket Sent!",
                                icon: "success",
                                text: `Ticket on ${selectedDay} at ${selectedTime} has been sent successfully.`,
                                confirmButtonText: "OK"
                            }).then(() => {
                                location.reload();
                            });
                        }
                    });
                } else {
                    // Handle validation errors
                    if (nbpeople > 5) {
                        $("#errornb").html('<i class="fa-solid fa-circle-exclamation"></i> You should enter a number < 5');
                    }
                    if (nbpeople === "") {
                        $("#errornb").html('<i class="fa-solid fa-circle-exclamation"></i> This field is required < 5');
                    }
                    if (!selectedTime) {
                        $("#errortime").html('<i class="fa-solid fa-circle-exclamation"></i> You should select a time');
                    }
                    if (selectedDay === "") {
                        $("#errorday").html('<i class="fa-solid fa-circle-exclamation"></i> This field is required');
                    }
                }
            } else {
                var redirectUrl = "login.php?redirect=movieSingle.php?id=<?php echo $id; ?>";
                window.location.href = redirectUrl;
            }
        }
    });
});


</script>
<script src="./assets/js/movieSingle.js"></script>


 
    
</body>
</html>