$("#times li").click(function () {
    $("#times li").removeClass("selected");
    $(this).addClass("selected");
  });

function clearError() {
    $("#errorday").text("");
    $("#errortime").text("");
    $("#errornb").text("");
  }

  $("#selectDay").on("input", clearError);
  $("#nbpeople").on("input", clearError);
  var name=document.getElementById("name");

  $("#bookform").submit(function (e) {
    e.preventDefault();
    
    let nbpeople = $("#nbpeople").val();
    let selectedTime = $("#times li.selected").text();
    let selectedDay = $("#selectDay").val();
    console.log(selectedDay)
    console.log(selectedTime)

    if (nbpeople < 5 && nbpeople!=="" && selectedDay !== "" && selectedTime !== "") {
        $.ajax({
            method:"POST",
            url:"functions/addTicket.php",
             cache: false,
            data:{
                name:name,
                nbpeople:nbpeople,
                time:selectedTime,
                day:selectedDay,
            },
            success:function(response){
                alert("successssssssssss");
                console.log(response);
            }
           })
          
    } else {
        if (nbpeople > 5) {
            $("#errornb").html('<i class="fa-solid fa-circle-exclamation"></i> You should enter a number < 5');
          }
          if (nbpeople ==="") {
            $("#errornb").html('<i class="fa-solid fa-circle-exclamation"></i> This field is required < 5');
          }

          if (!selectedTime) {
            $("#errortime").html('<i class="fa-solid fa-circle-exclamation"></i> You should select a time');
          }

          if (selectedDay === "") {
            $("#errorday").html('<i class="fa-solid fa-circle-exclamation"></i> This field is required');
          }
    }
  });