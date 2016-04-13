   $(document).ready(function (){
        
   $("#FirstName").keyup(function () {
       
       
        var fname = $("#FirstName").val();

        var validfname = checkfunction(fname);
        var status = true;
        if (fname == null || fname == "")
        {
            $("#fnamelocation").html("<img src='images/unchecked.gif'/>Please enter your First name");

            status = false;
        }
        if (!validfname)
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
    $("#email").keyup(function () {

        var EmailValidation = $("#email");
        var EmailIndex = EmailValidation.val().indexOf("@");
        var EmailAtDot = EmailValidation.val().indexOf(".");
        var status = false;
        if (EmailIndex == -1 || EmailAtDot == -1 || (EmailIndex + 2) >= EmailAtDot)
        {

            $("#emaillocation").html("<img src='images/unchecked.gif'/> should be @ symbol, at least one dot (.) after @, at least 2 characters after dot, at least  5 characters before @");

        } else
        {
            $("#emaillocation").html("<img src='images/checked.gif'/>");
            status = true;
        }
    });

});