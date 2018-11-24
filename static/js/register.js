$(document).ready(function () {

    $("#register_form").submit(function () {
        var url = "register_submit.php";
        var data = $("#register_form").serialize();

        $.ajax({
            url: url,
            type: "POST",
            data: data,
            success: register_success,
            error: onError,

        });
        return false;
    });
});

var register_success = function (data) {
    //data = JSON.parse(data);
    alert("success");
}
var onError = function (data) {
    alert("failed");
}
/*$(document).ready(function () {

    $("#login_form").submit(function () {
        var url = "login_submit.php";
        var data = $("#login_form").serialize();

        $.ajax({
            url: url,
            type: "POST",
            data: data,
            success: login_success,
            error: onError,

        });
        return false;
    });
});

var login_success=function(data){
      $(".loader").hide();
   // data = JSON.parse(data);

    if (typeof data.is_redirect !== 'undefined' && data.is_redirect) {
        window.location.href = data.redirect_url;
    } else {
        if (data.success) {
            showSuccess(data.successMessage, '/');
        } else {
            showError(data.errorMessage);
        }
    }
    
} */