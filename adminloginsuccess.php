<?php
$link = mysqli_connect('localhost', 'dbuser', '123', 'userdata');
session_start();
$id = $_SESSION["id"];
$queryAdminLogIn = "select UserName from Admin where AdminId='$id'";
$resultAdminLogIn = mysqli_query($link, $queryAdminLogIn);
$row = mysqli_fetch_row($resultAdminLogIn);

?>
<html>
    <head>
        <title>User Login success page</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/form.css" type="text/css">
        <script src="js/jquery.min.js" type="text/JavaScript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/form.js" type="text/javascript"></script>
    </head>
    <body>
        <nav class="emptydashboard">

        </nav>
        <div class="container">
            <div class="col-md-3 col-md-offset-5">
                <h3><?php echo $row[0]; ?></h3>
            </div>
            <div class="col-md-10 col-md-offset-2">
                <h1>Admin Login Successful <a href="admindashboard.php">Click me</a></h1>
            </div>
        </div>
    </body>


</html>