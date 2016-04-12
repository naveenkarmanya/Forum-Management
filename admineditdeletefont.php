<?php 
 include ('admineditdeleteback.php');?>
<html>
    <head>
        <title>User Profile Edit</title>
        
         <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/form.css" type="text/css">
        <script src="js/jquery.min.js" type="text/JavaScript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/form.js" type="text/javascript"></script>
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
                        <li> <a href="adminviewedit.php"><span class="glyphicon glyphicon-step-backward">GoBack</span></a></li>
</ul>
                </div>


            </div>
        </nav>
        
        <div class="container">
            <div class="row">
                <form class="form-horizontal" method="post">
                <div class="col-md-12 topmore">
                    <div class="col-md-3 col-md-offset-2">
                        <label>First Name:</label>
                        <input type="text" class="form-control" name="firstName" id="firstName" value="<?php echo $userFirstName;?>" required>
                    </div>
                    
                    <div class="col-md-3 col-md-offset-1">
                        <label>Last Name:</label>
                        <input type="text" class="form-control" name="lastName" id="lastName" value="<?php echo $userLastName;?>" required>
                    </div>
                </div>
                    <div class="col-md-12 top">
                    <div class="col-md-3 col-md-offset-2">
                        <label>Email Address:</label>
                        <input type="text" class="form-control" name="emailAddress" id="emailAddress" value="<?php echo $userEmailAddress;?>" required>
                    </div>
                    
                    <div class="col-md-3 col-md-offset-1">
                        <label>Mobile Number:</label>
                        <input type="text" class="form-control" name="mobileNumber" id="mobileNumber" value="<?php echo $userMobileNumber;?>" required>
                    </div>
                </div>
                    
                    <div class="col-md-12 top">
                    <div class="col-md-3 col-md-offset-2">
                        <label>Address Line 1:</label>
                        <textarea class="form-control" name="addressLineOne" id="addressLineOne"  required><?php echo $userAddressOne;?></textarea>
                    </div>
                    
                    <div class="col-md-3 col-md-offset-1">
                        <label>Address Line 2:</label>
                        <textarea class="form-control" name="addressLineTwo" id="addressLineTwo" required><?php echo $userAddressTwo;?></textarea>
                    </div>
                </div>
                    
                    <div class="col-md-12 top">
                    <div class="col-md-3 col-md-offset-2">
                        <label>City:</label>
                        <input type="text" class="form-control" name="city" id="city" value="<?php echo $userCity;?>" required>
                        <p id="citypara"></p>
                    </div>
                    
                    <div class="col-md-3 col-md-offset-1">
                        <label>State:</label>
                        <input type="text" class="form-control" name="state" id="state" value="<?php echo $userState;?>" required>
                        <p id="statepara"></p>
                    </div>
                </div>
                    <div class="col-md-12 top">
                    <div class="col-md-3 col-md-offset-2">
                        <label>Country:</label>
                        <input type="text" class="form-control" name="country" id="country" value="<?php echo $userCountry;?>" required>
                        <p id="countrypara"></p>
                    </div>
                    
                    <div class="col-md-3 col-md-offset-1">
                        <label>ZipCode:</label>
                        <input type="tel" class="form-control" maxlength="6" name="zipcode" id="zipcode" value="<?php echo $userZipCode;?>" required>
                        <p id="zipcodepara"></p>
                    </div>
                </div>
                    <div class="col-md-12 top">
                        <div class="col-md-1 col-md-offset-4">
                            <input type="submit" name='adminEditFront' value="SUBMIT" class="btn btn-success"></div>
                            <div class="col-md-1 col-md-offset-1">
                            <input type="reset" name="reset" class="btn btn-success" value="RESET">
                            </div>
                    </div>
                </form>
                <div class="col-md-8 top col-md-offset-1">
                    <?php if(isset($error)){echo "<div class='alert alert-danger'>".$error."</div>";}?>
                    <?php if(isset($message)){echo "<div class='alert alert-success'>".$message."</div>";}?>
                </div>
            </div>
        </div>
    </body>
    
    
</html>