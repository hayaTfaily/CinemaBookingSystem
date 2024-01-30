function validateEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function clearError() {
    $("#erroremail").text("");
    $("#errorpassword").text("");
    $("#errorconfirm").text("");
}

$("#email").on("input", clearError);
$("#password").on("input", clearError);
$("#cpassword").on("input", clearError);

$('#signinform').on("submit", (event) => {
    event.preventDefault(); 

    var email = $("#email").val();
    var password = $('#password').val();
    var cpassword = $('#cpassword').val();

    if (validateEmail(email) && (password === cpassword)) {
        var formdata = new FormData($('#signinform')[0]); 
        $.ajax({
            method: "POST",
            url: "functions/forSignIn.php",
            processData: false,
            contentType: false,
            cache: false,
            data: formdata,
            success: function (response) {
                if (response.startsWith("Email")) {
                    $("#erroremail").html(`<i class="fa-solid fa-circle-exclamation"></i> ${response}`);
                } else {
                    alert("Success!");
                }
            }
        });
    } else {
        if (!validateEmail(email)) {
            $("#erroremail").html('<i class="fa-solid fa-circle-exclamation"></i> Enter a valid email');
        }
        if (!email || email === "") {
            $("#erroremail").html('<i class="fa-solid fa-circle-exclamation"></i> This field is required');
        }
        if (!password || password === "") {
            $("#errorpassword").html('<i class="fa-solid fa-circle-exclamation"></i> This field is required');
        }
        if (password !== cpassword) {
            $("#errorconfirm").html("<i class='fa-solid fa-circle-exclamation'></i> Passwords doesn't match");
        }
    }
});
