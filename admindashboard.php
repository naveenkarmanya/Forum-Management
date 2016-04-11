
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

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user">UserProfile</span><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li id="editprofile"><a href="#edit"><span class="glyphicon glyphicon-edit">EditProfile</span></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-hand-right">ViewProfile</span></a></li>

                            </ul>
                        </li>
                        <li id="changepwd"><a href="#changepassword"><span class="glyphicon glyphicon-adjust">ChangePassword</span></a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>


                </div>


            </div>
        </nav>
        <div class="container margintop" id="edit" hidden>

            <form class="form-horizontal">
                <h1><u>EditProfile</u></h1>
                <div class="well grey">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label">Address Line 1:</label>
                            <span class="error" id="addresslocation">*</span>
                            <textarea class="form-control" name="addrees" id="address" required="" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Address Line 1')" placeholder="Flat/House No,Floor,Building no"></textarea><br>

                            <label class="control-label">City:</label>
                            <span class="error" id="citylocation">* </span>
                            <input type="text" class="form-control" name="city" id="city" required="" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter City Name')" placeholder="City"><br>


                            <label class="control-label">ZipCode:</label>
                            <span class="error" id="ziplocation">*</span>
                            <input type="tel" class="form-control" name="zipcode" id="zipcode" required="" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter valid ZipCode')" placeholder="Zip Code" maxlength="6"><br>



                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Address Line 2:</label>
                            <span class="error" id="address1location">*</span>
                            <textarea class="form-control" name="addrees1" id="address1" required="" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Address Line 2')" placeholder="Flat/House No,Floor,Building no"></textarea><br>
                            <label class="control-label">State:</label>
                            <span class="error" id="statelocation">*</span>
                            <input type="text" class="form-control" name="state" id="state" required="" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter State Name')" placeholder="State"><br>
                            <label class="control-label">Country:</label>
                            <span class="error" id="countrylocation">*</span>
                            <input type="text" class="form-control" name="country" id="country" required="" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Country Name')" placeholder="Country"><br>

                        </div>
                    </div>
                    <input type="submit" class="btn btn-default margintop" id="search" value="Done">
                    <input type="submit" class="btn btn-default margintop" id="cancel" value="cancel">

                </div>


            </form>

        </div>

        <div class="container margintop" id="changepassword" hidden>

            <form class="form-horizontal">
                <h1><u>Change Password</u></h1>
                <div class="well grey">

                    <div class="form-group">
                        <label for="currentpassword" class="control-label col-md-2">Current Password*:</label>
                        <div class="col-md-6">
                            <div class="input-group">

                                <input type="type" class="form-control" id="currentpassword" name="currentpassword" title="Your Email" placeholder="your Email"></div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="changepassword" class="control-label col-md-2">Change Password*:</label>
                        <div class="col-md-6">
                            <div class="input-group">

                                <input type="type" class="form-control" id="changepassword" name="changepassword" title="Your Email" placeholder="your Email"></div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="retypepassword" class="control-label col-md-2">Conform Password*:</label>
                        <div class="col-md-6">
                            <div class="input-group">

                                <input type="type" class="form-control" id="retypepassword" name="retypepassword" title="Your Email" placeholder="your Email"></div>
                        </div>

                    </div>

                    <input type="submit" class="btn btn-default margintop" id="search" value="Done">
                    <input type="submit" class="btn btn-default margintop" id="cancel" value="cancel">

                </div>


            </form>
        </div>
        
    </body>
</html>





