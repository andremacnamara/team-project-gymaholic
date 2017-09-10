<!DOCTYPE html>
<html>
<head>
 	<title>Gymaholic - Fitness Community</title>
 	 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
	  <link rel="stylesheet" href="../css/forum.css" type="text/css">
	  <link rel="stylesheet" href="../css/style.css" type="text/css">
	  <!-- jQuery -->
	  <script src="https://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
	  <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet">
    <script type="text/javascript" src="action.js"></script>
        <link rel="stylesheet" href="../css/style.css">
        
        <!--- Favicon--->
        
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
        
        
        
        
</head>
<body>
  
	    <!-- navbar -->
      <nav class="navbar navbar-dark header">
        <div class="container">
          <ul class="nav navbar-nav">
            <li class="nav-item">
              <a class="navb" href="../index.php">Home<span class="sr-only">(current)</span></a>
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
              <a class="navb" href="../Forum/profile.php">Profile</a>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <span>Calculators</span>
                  <div class="dropdown-content">
                    <a class="navb" href="../idealweightcalculator.php">Ideal Weight</a></br>
                    <a class="navb" href="../BmiCalculator.php">Body Mass Index</a>
                  </div>
              </div>
            </li>
            
          </ul>
        <!-- Sign out button displayed if you are signed in. Otherwise the sign in and register buttons are shown -->
          <div class="navbar-brand pull-sm-right m-r-0 hidden-xs-down"><?php
    				if($_SESSION['signed_in'])
    				{
    					echo '<span class="headermessage">Welcome ' . htmlentities($_SESSION['user_name']) . '. Not you?</span> <a class="btn navbtn" href="../Account/signout.php">Sign out</a>';
    				}
    				else
    				{
    					echo '<a class="btn navbtn" href="../Account/signin.php">Sign in</a> | <a class="btn navbtn" href="../Account/signup.php">Register</a>';
    				}
    				?>
  			</div> <!-- /Sign Out-->
		  </div> <!-- /container -->
    </nav> <!-- /navbar -->
  <!-- Messenger Modal -->  
    <div id="messenger" class="modal fade">
           <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">messenger</h4>
              </div>
              <div class="modal-body">
                <ul class="chat">
                  <li class="left clearfix">
                    <span class="chat-img pull-left">
                      <img src="../img/trainer1.jpeg" alt="User Avatar" class="trainer-image img-circle" />
                    </span>
                    <body onload="setInterval('chat.update()', 1000)">
	
                    <script>
                    /* global $*/
                    $('button').click(function () {
                        $('#slideout').toggleClass('on');
                        });
                    </script>
                      <div data-role="page" id="chat">
                        <div id="page-wrap"> 
                          <div id="nav">
                          </div>
                        </div>
           
                        <div id="chatstuff">
                          <div id="text">
                            <p id="name-area"></p>
                          </div>
                          <div id="chat-wrap">
                            <div id="chat-area">
                            </div>
                          </div>
                          </ul>
                            <form name = "sendie" method="post" id="send-message-area" data-ajax="false">
                              <p>type your message below and press enter! </p>
                                <textarea name = "sendie" id="sendie" maxlength = '100'></textarea>
                            </form>
                          </div>
        
                          <script>
                        		function Chat () {
                        		  /* global updateChat*/
                        		  /* global sendChat*/
                        		  /* global getStateOfChat*/
                        		  this.update = updateChat;
                        		  this.send = sendChat;
                        		  this.getState = getStateOfChat;
                        		}
                      		</script>
        		
                        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
                        <script src="chat.js"></script>
                        
                        <script>
                        /* global name*/
                        /* global $*/
                        /* global Chat*/
                          // default name is 'Guest'
                          if (!name || name === '  ') {
                          name = '<?php echo htmlentities($_SESSION["user_name"]) ?>';
                          }
                  
                          // strip tags
                          name = name.replace(/(<([^>]+)>)/ig,"  " + ":");
                 
                          // display name on page
                          $("#name-area ").html(" <span>      " + name + "   </span>      ");
                  
                  
                          // kick off chat
                          var chat =  new Chat();
                
                          $(function() {
                  
                          chat.getState(); 
                     
                         // watch textarea for key presses
                         $("#sendie").keydown(function(event) {  
                     
                         var key = event.which;  
                   
                         //all keys including return.  
                         if (key >= 33) {
                           
                             var maxLength = $(this).attr("maxlength");  
                             var length = this.value.length;  
                             
                              
                         }  
                                                                                                                     });
                             // watch textarea for release of key press
                             $('#sendie').keyup(function(e) {  
                                        
                                if (e.keyCode == 13) { 
                        
                              var text = $(this).val();
                              var maxLength = $(this).attr("maxlength");  
                              var length = text.length; 
                               
                              // send 
                              if (length <= maxLength + 1) { 
                                chat.send(text, name);  
                                $(this).val("  ");
                              } else {
                                $(this).val(text.substring(0, maxLength));
                              }  
                        }
                     });
                  });
          
                  </script>
        
                        
                    </div>
                </div> <!-- /* Modal Body -->
            </div>
        </div>
        </div>
                  
