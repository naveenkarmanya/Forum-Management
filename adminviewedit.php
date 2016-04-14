<?php include ('adminview.php'); ?>
<html>
    <head>
        <title>User Login success page</title>
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
            var address = "<?php echo $row[11]; ?>";
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
                        zoom: 12,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };

                    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

                    var marker = new google.maps.Marker({
                        position: myCenter,
                        title: 'Click to zoom'
                    });

                    marker.setMap(map);

// Zoom to 9 when clicking on marker
                    google.maps.event.addListener(marker, 'click', function () {
                        map.setZoom(9);
                        map.setCenter(marker.getPosition());
                    });
                    $("#MapLocation").on("shown.bs.modal", function () {

                        google.maps.event.trigger(googleMap, "resize");
                        //map.setCenter(google.maps.marker.getPosition());
                        return map.setCenter(myCenter);
                        // Set here center map coordinates
                    });

                }
                google.maps.event.addDomListener(window, 'load', initialize);
            });

            function myfunction() {
                return "bye";
            }
        </script>



    </head>
    <body>
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
                            <a href="#userprofilehide"><span class="glyphicon glyphicon-user">UsersProfile</span></a></li>


                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li> <a href="admindashboard.php"><span class="glyphicon glyphicon-step-backward">GoBack</span></a></li>
                    </ul>
                </div>


            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-1 top"><?php
                    if (isset($error)) {
                        echo "<div class='alert alert-danger'>" . $error . "</div>";
                    }
                    ?></div>
                <form class="form-horizontal" method="post">
                    <div class="col-md-12 topmore">
                        <div class="col-md-3 col-md-offset-2">
                            <label>First Name:</label>
                            <?php echo $firstName; ?>
                        </div>

                        <div class="col-md-3 col-md-offset-1">
                            <label>Last Name:</label>
                            <?php echo $lastName; ?>
                        </div>
                    </div>
                    <div class="col-md-12 top">
                        <div class="col-md-3 col-md-offset-2">
                            <label>Email Address:</label>
                            <?php echo $email; ?>
                        </div>

                        <div class="col-md-3 col-md-offset-1">
                            <label>Mobile Number:</label>
                            <?php echo $mobileNumber; ?>
                        </div>
                    </div>

                    <div class="col-md-12 top">
                        <div class="col-md-3 col-md-offset-2">
                            <label>Address Line 1:</label>
                            <?php echo $addressLineOne; ?>
                        </div>

                        <div class="col-md-3 col-md-offset-1">
                            <label>Address Line 2:</label>
                            <?php echo $addressLineTwo; ?>
                        </div>
                    </div>

                    <div class="col-md-12 top">
                        <div class="col-md-3 col-md-offset-2">
                            <label>City:</label>
                            <?php echo $city; ?>
                            <p id="citypara"></p>
                        </div>

                        <div class="col-md-3 col-md-offset-1">
                            <label>State:</label>
                            <?php echo $state; ?>
                            <p id="statepara"></p>
                        </div>
                    </div>
                    <div class="col-md-12 top">
                        <div class="col-md-3 col-md-offset-2">
                            <label>Country:</label>
                            <?php echo $country; ?>
                            <p id="countrypara"></p>
                        </div>

                        <div class="col-md-3 col-md-offset-1">
                            <label>ZipCode:</label>
                            <?php echo $zipcode; ?>
                            <p id="zipcodepara"></p>
                        </div>
                    </div>
                    <div class="col-md-12 top">
                        <div class="col-md-1 col-md-offset-4">
                            <input type="submit" name='adminEdit' value="Edit Profile" class="btn btn-success"></div>
                        <div class="col-md-1 col-md-offset-1">
                            <input type="submit" name="adminDelete" class="btn btn-success" value="Delete Profile">
                        </div>
                    </div>
                </form>

           


    

        <div class="container">
                <button type="button" class="btn btn-success margintop submit" data-toggle="modal" data-target="#MapLocation" id="result">MapLocation</button>


                <div class="modal fade" id="MapLocation" role="dialog">
                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">MapLocation</h4>
                            </div>
                            <div class="modal-body">
                                <div id="googleMap" style="height:380px;"></div>

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
    </body>


</html>