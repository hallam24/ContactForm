$(document).ready(function () {
    console.log("ready");
    $("#ContactForm").on("submit", function (e) {
        
        e.preventDefault();
        if ($("#ContactForm [name='name']").val() === '') {
            $("#ContactForm [name='name']").css("border", "1px solid red");
        }
        else if ($("#ContactForm [name='email']").val() === '') {
            $("#ContactForm [name='email']").css("border", "1px solid red");
        }
        else if ($("#ContactForm [name='password']").val() === '') {
            $("#ContactForm [name='email']").css("border", "1px solid red");
        }
        else {
            var sendData = $('#ContactForm').serialize();
            $.ajax({
                type: "POST",
                url: "respond.php",
                data: sendData,
                success: function (data) {
                    console.log(data);
                }

            });
        }
    });
});