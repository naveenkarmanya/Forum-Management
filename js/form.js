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
    function checkfunction(stringval)
    {
        var i;
        var lengthof = stringval.length;
        var number;
        var returnval;
        for (i = 0; i < lengthof; i++)
        {
            number = Number(stringval.charAt(i))
            if (!number)
            {
                returnval = true;
            } else
            {
                return returnval = false;
            }
        }
        return returnval;
    }
    $("#email,#loginemail1").keyup(function () {

        var EmailValidation = $("#email,#loginemail1");
        var EmailAtIndex = EmailValidation.val().indexOf("@");
        var EmailAtDot = EmailValidation.val().indexOf(".");
        var status = false;
        if (EmailAtIndex == -1 || EmailAtDot == -1 || (EmailAtIndex + 2) >= EmailAtDot)
        {

            $("#emaillocation,#userlocation").html("<img src='images/unchecked.gif'/> should be @ symbol, at least one dot (.) after @, at least 2 characters after dot, at least  5 characters before @");

        } else
        {
            $("#emaillocation,#userlocation").html("<img src='images/checked.gif'/>");
            status = true;
        }
    });

    $("#FirstName").keyup(function () {


        var FirstName = $("#FirstName").val();

        var ValidFirstName = checkfunction(FirstName);
        var status = true;
        if (FirstName == null || FirstName == "")
        {
            $("#fnamelocation").html("<img src='images/unchecked.gif'/>Please enter your First name");

            status = false;
        }
        if (!ValidFirstName)
        {
            $("#fnamelocation").html("<img src='images/unchecked.gif'/>Not allowed numbers in name field");

            status = false;
        }
        if (status == true)
        {
            $("#fnamelocation").html("<img src='images/checked.gif'/>");
            status = true;
        }

        return status;

    });
    $("#lastname").keyup(function () {
        var LastName = $("#lastname").val();
        validLastName = checkfunction(LastName)
        var status = false;
        if (LastName == null || LastName == "")
        {
            $("#lnamelocation").html("<img src='images/unchecked.gif'/>Please enter your last name");

            status = false;
        }
        if (!validLastName)
        {
            $("#lnamelocation").html("<img src='images/unchecked.gif'/>Not allowed number in name field");

            status = false;
        } else
        {
            $("#lnamelocation").html("<img src='images/checked.gif'/>");
            status = true;
        }

        return status;

    });

    $("#mobile").keyup(function () {

        var MobileNumber = $("#mobile");
        status = false;

        if (MobileNumber == null || MobileNumber == "")
        {
            $("#mobilelocation").html("<img src='images/unchecked.gif'/>Please enter your mobile number");

            status = false;
        } else if (isNaN(MobileNumber.val()))
        {
            $("#mobilelocation").html("<img src='images/unchecked.gif'/>Not allowed characters in mobile field");


        } else if (!(MobileNumber.val().length == 10)) {


            $("#mobilelocation").html("<img src='images/unchecked.gif'/>mobile number in 10 digit");


        } else
        {

            $("#mobilelocation").html("<img src='images/checked.gif'/>");

        }
        return status;
    });
});
