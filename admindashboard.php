
<!doctype html>
<html>
    <head>
        <title>Form Management</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="regitration" name="description" >
        <meta name="keywords" content="html,css,javascript">
        <meta name="author" content="naveen">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/form.css" type="text/css">

        <script src="js/jquery.min.js" type="text/JavaScript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/form.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/dt/dt-1.10.11/datatables.min.css"/>

        <script type="text/javascript" src="https://cdn.datatables.net/t/dt/dt-1.10.11/datatables.min.js"></script>


    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <nav class="nav navbar-inverse">
            <div class="nav container-fluid">
                <div class="navbar-header">
                    <a href="" class="navbar-brand"><span class="glyphicon glyphicon-education">FormManagement</span></a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">

                        <li class="active" id="userprofile">
                            <a href="#userprofilehide"><span class="glyphicon glyphicon-user">UsersProfile</a></li>
                        <li id="addAdminusers">
                            <a href="#addusers"><span class="glyphicon glyphicon-user">AddNewUsers</a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>


                </div>


            </div>
        </nav>
        <div class="container" id="userprofilehide">
            <?php
            $link = mysqli_connect('localhost', 'dbuser', '123', 'userdata');

            $query = "select firstname, lastname, email from forum";
            $result = mysqli_query($link, $query);
            ?>


            <script>



                dataSet = [
<?php while ($row = mysqli_fetch_row($result)) { ?>
    <?php echo'["'; ?><?php echo "$row[0]"; ?> <?php echo'","'; ?><?php echo "$row[1]"; ?> <?php echo'","'; ?><?php echo "$row[2]"; ?>  <?php echo'"]'; ?><?php
    echo",";
}
?>

                ];

                $(document).ready(function () {
                    $('#example').DataTable({
                        data: dataSet,
                        "scrollY": "500px",
                        "scrollCollapse": true,
                        "paging": false,
                        columns: [
                            {title: "First Name"},
                            {title: "Last Name"},
                            {title: "Email Address"}
                        ]
                    });




                    var table = $('#example').DataTable();

                    $('#example tbody').on('click', 'tr', function () {
                        var data = table.row(this).data();

                        $.post("adminpass.php", {email: data[2]});

                        window.location.href = "adminviewedit.php";

                    });


                });



            </script>


            <table id="example" class="display" width="100%"></table>


        </div>

        <div class="container margintop" id="addusers" hidden>
            <div class="well grey">
                <form class="form-horizontal" id="form1" method="post" action="adminusersubmit.php">
                    <h1><u>Create New Users</u></h1>
                    <div class="form-group">
                        <label for="firstname" class="control-label col-md-2">First Name*:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required="" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter First Nmae')"></div>
                        <span id="fnamelocation"></span>

                    </div>
                    <div class="form-group">
                        <label for="lastname" title="Your Last Nmae" class="control-label col-md-2">Last Name*:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required="" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Last Name')"></div>
                        <span id="lnamelocation"></span>

                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label col-md-2">Email Address*:</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required="" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Address')"></div>
                        </div>
                        <span id="emaillocation"></span>
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label col-md-2">Password*:</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Password')"></div>
                        <span id="pwdlocation"></span>
                    </div>
                    <div class="form-group">
                        <label for="conformpassword" class="control-label col-md-2">Conform Password*:</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" id="conformpassword" name="conformpassword" placeholder="Retype Password" required="" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Password should be Match')"></div>
                        <span id="cpwdlocation"></span>
                    </div>

                    <div class="form-group">
                        <label for="mobile" class="control-label col-md-2">Mobile Number*:</label>
                        <div class="col-md-6">
                            <input type="tel"class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" maxlength="10" required="" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Mobile Number')"></div>
                        <span id="mobilelocation"></span>
                    </div>
                    <div class="checkbox">
                        <label> <input type="checkbox" name="checkbox" required="">Read Terms & Conditions*</label>

                    </div>
                    <input type="submit" class="btn btn-success btn-lg margintop" name="adminCreateUser" value="Submit">
                    <?php
                    if (isset($error)) {
                        echo '<div class="alert alert-danger">' . $error . '</div>';
                    }
                    if (isset($message)) {
                        echo '<div class="alert alert-danger">' . $message . '</div>';
                    }
                    ?>
                </form>


                <div class="col-md-8 top col-md-offset-1">
                    <?php
                    if (isset($error)) {
                        echo "<div class='alert alert-danger'>" . $error . "</div>";
                    }
                    ?>
                    <?php
                    if (isset($message)) {
                        echo "<div class='alert alert-success'>" . $message . "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>


    </body>
</html>





