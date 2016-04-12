<?php
include("registration.php");
include("login.php");
include("adminlogin.php");
include("forgotpassword.php");
?>

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
        <script src="js/passwordvalidation.js" type="text/javascript"></script>


    </head>
    <?php
    if (isset($error)) {
        echo '<div class="alert alert-danger">' . $error . '</div>';
    }
    if (isset($message)) {
        echo '<div class="alert alert-danger">' . $message . '</div>';
    }
    ?>

    <body data-spy="scroll" data-target=".navbar-collapse">
        <nav class="nav navbar-inverse navbar-fixed-top">
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
                        <li class="active" id="formhome"><a href="#home"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                        <li id="admin"><a href="#login"><span class="glyphicon glyphicon-log-in">AdminLogin</span></a></li>
                        <li id="loginto"><a href="#loginhere"><span class="glyphicon glyphicon-log-in">Login</span></a></li>
                        <li id="singnup"><a href="#register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    </ul>
                    <form class="navbar-form navbar-right" id="loginhere" method="post" hidden>


                        <div class="form-group">
                            <input type="email" placeholder="Email" name="loginemail" class="form-control" required oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Address')">
                        </div>
                        <div class="form-group">

                            <input type="password" placeholder="Password" name="loginpassword" class="form-control" required="" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Password')">

                        </div>

                        <input type="submit" class="btn glyphicon glyphicon-log-in" name="logincheck" value="LogIn">
                        <br>
                        <p class=" col-md-6 pull-right" id="findpswd"><a href="#forgotpassword">Forgot Password</a></p>
                        <p class=" pull-right" id="newreg"><a href="#register">New User Registration</a></p> 

                    </form>


                </div>




            </div>
        </nav>
        <div class="container-fluid margintop" id="home" hidden>
            <div class="row content">
                <h1 class="brand"><span class="glyphicon glyphicon-education"><b>FORUM MANAGEMENT</b></span></h1>
                <div class="col-md-6 col-md-offset-3">

                    <h1>User Area</h1>
                    <div class="" id="list">
                        <ul class="">
                            <li><a href="">User Registration.   </a></li>
                            <li><a href="">User Login</a></li>
                            <li><a href="">User Profile</a></li>
                            <li><a href="">Change Password</a></li>
                            <li><a href="">Logout</a></li>
                            <li><a href="">Forgot password</a></li>
                        </ul>
                    </div>

                </div>

            </div>
            <div class="row content">
                <div class="col-md-6 col-md-offset-3">

                    <h1>Admin Area</h1>
                    <div class="" id="list">
                        <ul class="">
                            <li><a href="">Admin Login</a></li>
                            <li><a href="">Display all the Users List using Jquery Datatables (https://datatables.net) with default sorting feature.</a></li>
                            <li><a href="">Admin can create the new user user with all fields which are defined on user registration form (1) on above.
                                </a></li>
                            <li><a href="">Admin can able to view/edit/delete the user profilePopulate the User Address in google maps and open it in new modal window.</a></li>
                            <li><a href="">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="container margintop" id="login" hidden>
            <div class="well grey">
                <form class="form-horizontal" id="topcontainer" method="post">
                    <h1><u>AdminLogIn Page</u></h1>
                    <div class="form-group">
                        <label for="loginemail1" class="control-label col-md-2">Username*:</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control" id="loginemail1" required placeholder="Email Address" name="loginemail1" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Address ')"></div>
                        <span id="userlocation"></span>
                    </div>
                    <div class="form-group">
                        <label for="loginpassword1" class="control-label col-md-2">Password*:</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" id="loginpassword1" name="loginpassword1" required="" placeholder="Password" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Password')"></div>


                    </div>
                    <input type="submit" class="btn btn-success margintop" name="login1" id="login1" value="Login">


                </form>

            </div>
        </div>
        <div class="container margintop" id="register" hidden>
            <div class="well grey">
                <form class="form-horizontal" id="form1" method="post">
                    <h1><u>Registration Page</u></h1>
                    <div class="form-group">
                        <label for="firstname" class="control-label col-md-2">First Name*:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="FirstName" name="firstname" placeholder="First Name" required="" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter First Name')"></div>
                        <span id="fnamelocation"></span>

                    </div>
                    <div class="form-group">
                        <label for="lastname" class="control-label col-md-2">Last Name*:</label>
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
                        <label for="newPassword" class="control-label col-md-2">Password*:</label>
                        <div class="col-md-6">
                            <input type="password" title="Your Password" class="form-control" id="newPassword" name="password" placeholder="Enter Password" required="" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Password')"></div>
                        <span id="pwdlocation"></span>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword" class="control-label col-md-2">confirm Password*:</label>
                        <div class="col-md-6">
                            <input type="password" title="type same password from above field" class="form-control" id="confirmPassword" name="conformpassword" placeholder="Retype Password" required="" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Password shoud be Match')"></div>
                        <span id="cpwdlocation"></span>
                    </div>

                    <div class="form-group">
                        <label for="mobile" class="control-label col-md-2">Mobile Number*:</label>
                        <div class="col-md-6">
                            <input type="tel" title="Your Mobile Number" class="form-control" id="mobile" name="mobile" placeholder="your Mobile Number" maxlength="10" required="" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Mobile Number')"></div>
                        <span id="mobilelocation"></span>
                    </div>
                    <div class="checkbox">
                        <label> <input type="checkbox" name="checkbox" required="" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please select this check box')">Read Terms & Conditions*</label>

                    </div>
                    <input type="submit" class="btn btn-success btn-lg margintop" name="signup" value="Sign Up">

                </form>
            </div>
        </div>
        <div class="container margintop pwd" id="forgotpassword" hidden>

            <form class="form-horizontal" method="post" action="forgotpassword.php">
                <h1><u>Find Your Account</u></h1>
                <div class="well grey">

                    <div class="form-group">
                        <label for="forgotemail" class="control-label col-md-2">Email/username*:</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" class="form-control" id="forgotemail" name="forgotemail" placeholder="Email Address" required="" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Address')"></div>
                        </div>

                    </div>
                    <input type="submit" class="btn btn-default margintop" name="search" id="search" value="Search">
                    <input type="submit" class="btn btn-default margintop" name="cancel" id="cancel" value="cancel">

                </div>


            </form>

        </div>

    </body>
</html>





