<?php
include("editprofile.php");
include("viewprofile.php");
include("changepassword.php");
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
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

        <script
            src="http://maps.googleapis.com/maps/api/js">
        </script>
        <script type="text/javascript">

            var geocoder = new google.maps.Geocoder();
            var address = "sangareddy";


            geocoder.geocode({'address': address}, function (results, status) {


                if (status == google.maps.GeocoderStatus.OK) {
                    var latitude = results[0].geometry.location.lat();
                    var longitude = results[0].geometry.location.lng();

                }



                var myCenter = new google.maps.LatLng(latitude, longitude);

                function initialize()
                {
                    var mapProp = {
                        center: myCenter,
                        zoom: 8,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };

                    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

                    var marker = new google.maps.Marker({
                        position: myCenter,
                    });

                    marker.setMap(map);
                }

                google.maps.event.addDomListener(window, 'load', initialize);



                google.maps.event.addDomListener(window, "resize", resizingMap());

                $('#myModal').on('show.bs.model', function () {
                    //Must wait until the render of the modal appear, thats why we use the resizeMap and NOT resizingMap!! ;-)
                    resizeMap();
                })

                function resizeMap() {
                    if (typeof map == "undefined")
                        return;
                    setTimeout(function () {
                        resizingMap();
                    }, 400);
                }

                function resizingMap() {
                    if (typeof map == "undefined")
                        return;
                    var center = map.getCenter();
                    google.maps.event.trigger(map, "resize");
                    map.setCenter(center);
                }

            });
        </script>
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
                                <li id="viewprofile"><a href="#view"><span class="glyphicon glyphicon-hand-right">ViewProfile</span></a></li>

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

            <form class="form-horizontal" method="post">
                <h1><u>EditProfile</u></h1>
                <div class="well grey">



                    <div class="form-group">
                        <label for="firstname" class="control-label col-md-4">First Name*:</label>
                        <div class="col-md-6">
                            <?php echo $firstname; ?></div>


                    </div>
                    <div class="form-group">
                        <label for="lastname" title="Your Last Nmae" class="control-label col-md-4">Last Name*:</label>
                        <div class="col-md-6">
                            <?php echo $lastname; ?></div>
                        <span id="lnamelocation"></span>

                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label col-md-4">Email Address*:</label>
                        <div class="col-md-6">

                            <?php echo $email; ?>
                        </div>

                    </div>


                    <div class="form-group">
                        <label for="mobile" class="control-label col-md-4">Mobile Number*:</label>
                        <div class="col-md-6">
                            <?php echo $mobile; ?></div>

                    </div>

                    <div class="col-md-6">
                        <label class="control-label">Address Line 1:</label>

                        <textarea class="form-control" name="addrees" id="address" required="" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Address Line 1')" placeholder="Flat/House No,Floor,Building no" ><?php echo $addressone; ?></textarea><br>

                        <label class="control-label">City:</label>

                        <input type="text" class="form-control" name="city" id="city" required="" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter City Name')" placeholder="City" value="<?php echo $city; ?>"><br>


                        <label class="control-label">ZipCode:</label>
                        <span class="error" id="ziplocation">*</span>
                        <input type="tel" class="form-control" name="zipcode" id="zipcode" required="" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter valid ZipCode')" placeholder="Zip Code" maxlength="6" value="<?php echo $zipcode; ?>"><br>



                    </div>
                    <div class="col-md-6">
                        <label class="control-label">Address Line 2:</label>
                        <span class="error" id="address1location">*</span>
                        <textarea class="form-control" name="addrees1" id="address1" required="" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Address Line 2')" placeholder="Flat/House No,Floor,Building no"><?php echo $addresstwo; ?></textarea><br>
                        <label class="control-label">State:</label>
                        <span class="error" id="statelocation">*</span>
                        <input type="text" class="form-control" name="state" id="state" required="" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter State Name')" placeholder="State" value="<?php echo $state; ?>"><br>
                        <label class="control-label">Country:</label>
                        <span class="error" id="countrylocation">*</span>
                        <input type="text" class="form-control" name="country" id="country" required="" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Country Name')" placeholder="Country" value="<?php echo $country; ?>"><br>

                    </div>

                    <input type="submit" class="btn btn-default margintop" name="editdone" id="search" value="Done">
                    <input type="submit" class="btn btn-default margintop" name="cancel" id="cancel" value="Cancel">

                </div>

                <?php
                if (isset($error)) {
                    echo '<div class="alert alert-danger">' . $error . '</div>';
                }
                if (isset($message)) {
                    echo '<div class="alert alert-danger">' . $message . '</div>';
                }
                ?>
            </form>

        </div>

        <div class="container margintop" id="view">

            <form class="form-horizontal" method="post">
                <h1><u>ViewProfile</u></h1>
                <div class="well grey">



                    <div class="form-group">
                        <label for="firstname" class="control-label col-md-4">First Name*:</label>
                        <div class="col-md-6">
                            <?php echo $firstname1; ?></div>


                    </div>
                    <div class="form-group">
                        <label for="lastname" title="Your Last Nmae" class="control-label col-md-4">Last Name*:</label>
                        <div class="col-md-6">
                            <?php echo $lastname1; ?></div>
                        <span id="lnamelocation"></span>

                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label col-md-4">Email Address*:</label>
                        <div class="col-md-6">

                            <?php echo $email1; ?>
                        </div>
                        <span id="emaillocation"></span>
                    </div>


                    <div class="form-group">
                        <label for="mobile" class="control-label col-md-4">Mobile Number*:</label>
                        <?php echo $mobile1; ?>

                    </div>

                    <div class="col-md-6">
                        <label class="control-label">Address Line 1:</label>

                        <?php echo $addressone1; ?><br>

                        <label class="control-label">City:</label>

                        <?php echo $city1; ?><br>


                        <label class="control-label">ZipCode:</label>
                        <?php echo $zipcode1; ?><br>



                    </div>
                    <div class="col-md-6">
                        <label class="control-label">Address Line 2:</label>
                        <?php echo $addresstwo1; ?><br>
                        <label class="control-label">State:</label>
                        <?php echo $state1; ?><br>
                        <label class="control-label">Country:</label>
                        <?php echo $country1; ?><br>

                    </div>


                    <br><br> <input type="submit" class="btn btn-default margintop" name="viewcancel" id="cancel" value="Cancel">

                </div>

            </form>
            <div class="container">
                <button type="button" class="btn btn-success margintop submit" data-toggle="modal" data-target="#myModal" id="result">Google Map</button>


                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Google Map</h4>
                            </div>
                            <div class="modal-body">
                                <div id="googleMap" style="width:500px;height:380px;"></div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" id="closed">Close</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

    <div class="container margintop" id="changepassword" hidden>

        <form class="form-horizontal" method="post">
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

                <input type="submit" class="btn btn-default margintop" name="newpassword" id="search" value="Done">
                <input type="submit" class="btn btn-default margintop" id="cancel" value="cancel">

            </div>


        </form>
    </div>

</body>
</html>





