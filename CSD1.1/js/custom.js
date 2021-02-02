$(document).ready(function () {
    

    $('.checking_email').keyup(function (e) {

        var email = $('.checking_email').val();
        //alert(email);
        $.ajax({
            type: "post",
            url: "code.php",
            data: {
                "checking_submit_btn": 1,
                "email_id": email,
            },
            success: function (response) {
                //alert(response);
                $('.error_email').text(response);
                
            }
        });

    });

});