<!DOCTYPE html>
<html>
<head>
 	<title>Logs</title>
 	 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
	 <!-- <link rel="stylesheet" href="../css/forum.css" type="text/css">
	  <link rel="stylesheet" href="../css/style.css" type="text/css">-->
	  <!-- jQuery -->
	  <script src="https://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
	  <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <script type="text/javascript" src="action.js"></script>
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
	    <!-- navbar -->
      <nav class="navbar navbar-dark header">
        <div class="container">
          <ul class="nav navbar-nav">
            <li class="nav-item">
              <a class="navb" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="navb" href="../Forum/forum.php">Forums</a>
            </li>
            <li class="nav-item">
              <button type="button" class="navb" data-toggle="modal" data-target="#messenger">Messenger</a>
            </li>
            <li class="nav-item">
              <a class="navb" href="../logs.php">Logs</a>
            </li>
            <li class="nav-item">
              <a class="navb" href="profile.php">Profile</a>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li class="dropdown-header"><a href="../BmiCalculator.php">BMI Calculator</a></li>
                  <li class="dropdown-header"><a href="../idealweightcalculator.php">Ideal Weight Calculator</a></li>
                </ul>
              </div>
            </li>
            
          </ul>
        <!-- Sign out button displayed if you are signed in. Otherwise the sign in and register buttons are shown -->
          <div class="navbar-brand pull-sm-right m-r-0 hidden-xs-down"><?php
    				if($_SESSION['signed_in'])
    				{
    					echo '<span class="headermessage">Welcome ' . htmlentities($_SESSION['user_name']) . '. Not you?</span> <a class="btn navbtn" href="signout.php">Sign out</a>';
    				}
    				else
    				{
    					echo '<a class="btn navbtn" href="../Account/signin.php">Sign in</a> | <a class="btn navbtn" href="../Account/signup.php">Register</a>';
    				}
    				?>
  			</div> <!-- /Sign Out-->
		  </div> <!-- /container -->
    </nav> <!-- /navbar -->