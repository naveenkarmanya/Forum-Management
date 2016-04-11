$(document).ready(function ()
{
    $("#home").show();
    $("#formhome").click(function () {
        $("#login").hide();
        $("#register").hide();
        $("#forgotpassword").hide();
        $("#home").show();

    });
    $("#admin").click(function () {
        $("#login").show();
        $("#register").hide();
        $("#home").hide();
        $("#forgotpassword").hide();
    });
    $("#singnup,#newuser,#newreg").click(function () {
        $("#login").hide();
        $("#register").show();
        $("#home").hide();
        $("#forgotpassword").hide();
    });
    $("#findpswd").click(function () {
        $("#login").hide();
        $("#register").hide();
        $("#home").hide();
        $("#forgotpassword").show();
    });
   

    $("#changepwd").click(function () {

        $("#edit").hide();
        $("#changepassword").show();
    });
    $("#editprofile").click(function () {
        $("#edit").show();
        $("#changepassword").hide();
        
    });
});
