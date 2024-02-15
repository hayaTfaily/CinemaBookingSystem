$("#times").on("click", "li", function () {
 
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

