$(document).ready(function ()
{
    $("#home").show();
    $("#formhome").click(function () {
        $("#login").hide();
        $("#register").hide();
        $("#forgotpassword").hide();
        $("#home").show();
        $("#loginhere").hide();
        s

    });
    $("#admin").click(function () {
        $("#login").show();
        $("#register").hide();
        $("#home").hide();
        $("#forgotpassword").hide();
        $("#loginhere").hide();
    });
    $("#singnup,#newreg").click(function () {
        $("#login").hide();
        $("#register").show();
        $("#home").hide();
        $("#forgotpassword").hide();
        $("#loginhere").hide();
    });
    $("#loginto").click(function () {
        $("#login").hide();
        $("#register").hide();
        $("#home").hide();
        $("#loginhere").show();
        $("#forgotpassword").hide();

    });
    $("#findpswd").click(function () {
        $("#login").hide();
        $("#register").hide();
        $("#home").hide();
        $("#forgotpassword").show();
        $("#loginhere").hide();
    });


    $("#changepwd").click(function () {

        $("#edit").hide();
        $("#changepassword").show();
        $("#view").hide();
    });
    $("#editprofile").click(function () {
        $("#edit").show();
        $("#changepassword").hide();
        $("#view").hide();
    });
    $("#view").hide();
    $("#viewprofile").click(function () {
        $("#edit").hide();
        $("#changepassword").hide();
        $("#view").show();
    });

    $("#addAdminusers").click(function () {
        $("#addusers").show();
        $("#userprofilehide").hide();

    });
    $("#userprofile").click(function () {
        $("#userprofilehide").show();
        $("#addusers").hide();

    });
    $("#FirstName").keyup(function () {
        var FirstName = $("#FirstName").val();
        var status = false;
        if (FirstName == null || FirstName == "")
        {
            $("#FirstName").css({"border-color": "red"});

            status = false;
        } else
        {
            $("#fnamelocation").css({"border-color": "green"});
            status = true;
        }



    });
});
