<?php
include '../Account/connect.php';
include '../Account/header.php';





?>

<script type="text/javascript">
function clicked() {
    alert('Your Bio has been Updated! :)');
function username(){
    alert('Your username has been chamged');
}    
}
 </script>                 

      <div class="main-header text-xs-center">
			<span class="title">User settings</span>
			<h1 class="header">Gymaholic</h1>
			
			<br>
			<br>
			<br>
			<br>
			<br>
			
	
               
               <?php session_start();
       
?>
 
<?php
        if(isset($_POST['submit'])){
                move_uploaded_file($_FILES['file']['tmp_name'],"pictures/".$_FILES['file']['name']);
                $con = mysqli_connect("localhost","root","","c9");
                $q = mysqli_query($con,"UPDATE users SET userPic = '".$_FILES['file']['name']."' WHERE user_name = '".$_SESSION['user_name']."'");
        }
?>
               <?php
                   
                   
                   
                   
    				if($_SESSION['signed_in'])
    				{
    				
    					               $servername = "localhost";
$username = "x14402132";
$password = "";
$dbname = "c9";
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname);

$_SESSION['user_name'];
$sql = "SELECT userPic FROM users WHERE user_name = '{$_SESSION['user_name']}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
     echo "<img width='200' height='200' src='pictures/".$row['userPic']."' alt='Profile Pic'>";;
     }
     
} 
    				}
    				else
    				{
    				
    				}
    				?>
               
                    <?php
                   
                   
                   
                   
    				if($_SESSION['signed_in'])
    				{
    				
    					               $servername = "localhost";
$username = "x14402132";
$password = "";
$dbname = "c9";
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname);

$_SESSION['user_name'];
$sql = "SELECT user_bio FROM users WHERE user_name = '{$_SESSION['user_name']}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> ". $row["user_bio"].  "<br>";
     }
     
} 
    				}
    				else
    				{
    				
    				}
    				?>
                </h3>
                 
    				
                   
      <div class="container">
  	<div class="page-header" style="padding-top:3%;">
    	<h1 class="h2">Change profile picture <a class="btn btn-default" >  </h1>
    </div>
	<div class="text-center" style="margin-left:10%; " class="col-lg-4 col-sm-6 text-center" >
	    
               <form action="" method="post" enctype="multipart/form-data">
                        <input class="" type="file" name="file">
                        <input type="submit" class="btn btn-primary btn-md" name="submit" value="Submit" >
                        
                </form>
</div>
 


    
   

	<?php
	if(isset($errMSG)){
			?>
            <div class="alert alert-danger">
            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
            </div>
            <?php
	}
	else if(isset($successMSG)){
		?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
	}
	?>   






    

</div>


                 
                   <br>
                  
                 
                        <h2>Say something about yourself! </h2>
                        <form  method="post" >
                            <textarea type="text" name="title" maxlength="50" value="<?=$varName;?>">
                                </textarea>
                             	 <br>
                    <input type="submit" name="formSubmit" value="Submit" onclick="clicked();"/>
                    
                    </form>
                    
                    <script type="text/javascript">
function clicked() {
    alert('Your Bio has been Updated! :)');
}
 </script>                  <?php
                  if($_POST['formSubmit'] == "Submit") 
                  {
                     
                    $username = "x14402132";
$password = "";
$dbname = "c9";
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname);

$_SESSION['user_name'];

$varName = $_POST['title'];
$sql = "UPDATE users SET user_bio ='$varName' WHERE user_name = '{$_SESSION['user_name']}'";
$result = $conn->query($sql);


     
     
                  }

    				
    				
    				
    				
    				
                  
    				?>
                    <br /><br/>
                        	
                   
            </div>
		  </div>
		  
      
      <h1 id="Gym" class="display-4 text-xs-center m-y-3  text-muted">My Gym</h1>
    
 <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Users Gym name</h2>
                </div>
                <div class="col-lg-6">
                  <p>change your gym</p>
                
                    <a href="#" class="btn btn-success">change</a>
                       
                </div>
         </div>

        </div>
        </div>
        <head> 
       
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
</head>




  <div class="text-center">
       
   
                    
                    
            
                   
   
           
                    
                   <div>
                        <h3>Change Your username</h3>
                        <br />
                        <form method="post">
                        <label>Enter username</label>
                        <input type="text" class="form-control" name = "usern" value="<?=$usern;?>">
                        <label>Enter New username</label>
                        <input type="text" name = "nuser" class="form-control" value="<?=$nuser;?>">
                        
                        <br>
                       <input type="submit" name="newusername" value="Submit" onclick="username();"/>
                    </form>
                    </div>
                    
                </div>
                <?php
                  if($_POST['newusername'] == "Submit") 
                  {
                     
                    $username = "x14402132";
$password = "";
$dbname = "c9";
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname);

$_SESSION['user_name'];
$usern = $_POST['usern'];
$nuser = $_POST['nuser'];
$sql = "UPDATE users SET user_name ='$nuser' WHERE user_name = '$usern'";
$result = $conn->query($sql);
}
?>
                 
                    <div class="form-group col-md-8">
                        <h3>Change Your Password</h3>
                        <br />
                        <form method="post">
                        <label>Enter your email address</label>
                        <input type="text" name = "email" class="form-control" value="<?=$useremail;?>">
                        <label>Enter your new email address</label>
                        <input type="text" name = "nemail" class="form-control" value="<?=$nemail;?>">
                        <br>
                        <input type="submit" name="newemail" value="Submit" onclick="email();"/>
                        </form>
                    </div>
                <?php
                  if($_POST['newemail'] == "Submit") 
                  {
                     
                    $username = "x14402132";
$password = "";
$dbname = "c9";
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname);

$_SESSION['user_name'];
$useremail = $_POST['email'];
$nemail = $_POST['nemail'];
$sql = "UPDATE users SET user_email ='$nemail' WHERE user_email = '$useremail'";
$result = $conn->query($sql);
}
?>
         
            <!-- ROW END -->


      
        <!-- SECTION END -->
 
  

        </div>
    <div>
        <a href="profile.php" class="btn btn-warning">back to profile</a>
        
    </div>
        
        
      
        
        
        <!-- ===========================
              chat modal
        ==============================--->
        
          <div id="messenger" class="modal fade">
           <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">messenger</h4>
              </div>
            
              <div class="modal-body">
                    <ul class="chat">
                         <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span>
                            	<body onload="setInterval('chat.update()', 1000)">
	

		
<script>$('button').click(function () {
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
    <div id="chat-wrap"><div id="chat-area"></div></div>
    
    <form id="send-message-area" data-ajax="false">
        <p>Your message: </p>
        <textarea id="sendie" maxlength = '100'></textarea>
    </form>

</div>
	<script>
		function Chat () {
		    this.update = updateChat;
		    this.send = sendChat;
		    this.getState = getStateOfChat;
		}
		
		//gets the state of the chat
function getStateOfChat() {
	if(!instanse){
		instanse = true;
		$.ajax({
			type: "POST",
			url: "process.php",
			data: {'function': 'getState', 'file': file},
			dataType: "json",	
			success: function(data) {state = data.state;instanse = false;}
		});
	}	
}

//Updates the chat
function updateChat() {
	if(!instanse){
		instanse = true;
		$.ajax({
			type: "POST",
			url: "process.php",
			data: {'function': 'update','state': state,'file': file},
			dataType: "json",
			success: function(data) {
				if(data.text){
					for (var i = 0; i < data.text.length; i++) {
						$('#chat-area').append($(" Hello	"+ data.text[i] +"	"));
					}	
				}
				document.getElementById('chat-area').scrollTop = document.getElementById('chat-area').scrollHeight;
				instanse = false;
				state = data.state;
			}
		});
	}
	else {
		setTimeout(updateChat, 1500);
	}
}

//send the message
function sendChat(message, nickname) { 
	updateChat();
	$.ajax({
		type: "POST",
		url: "process.php",
		data: {'function': 'send','message': message,'nickname': nickname,'file': file},
		dataType: "json",
		success: function(data){
			updateChat();
		}
	});
}
		</script>
		<?php
		
		$function = $_POST['function'];
    
    $log = array();
    
    switch($function) {
    
       case('getState'):
           if (file_exists('chat.txt')) {
               $lines = file('chat.txt');
           }
           $log['state'] = count($lines); 
           break;  
      
       case('update'):
          $state = $_POST['state'];
          if (file_exists('chat.txt')) {
             $lines = file('chat.txt');
          }
          $count =  count($lines);
          if ($state == $count){
             $log['state'] = $state;
             $log['text'] = false;
          } else {
             $text= array();
             $log['state'] = $state + count($lines) - $state;
             foreach ($lines as $line_num => $line) {
                 if ($line_num >= $state){
                       $text[] =  $line = str_replace("\n", "", $line);
                 }
             }
             $log['text'] = $text; 
          }
            
          break;
       
       case('send'):
       	 $nickname = htmlentities(strip_tags($_POST['nickname']));
	     $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
	     $message = htmlentities(strip_tags($_POST['message']));
	     if (($message) != " \n ") {
	       if (preg_match($reg_exUrl, $message, $url)) {
	          $message = preg_replace($reg_exUrl, '<a href="'.$url[0].'" target="_blank">'.$url[0].' </a >', $message);
	       } 
	          fwrite(fopen('chat.txt', 'a'), " <span> ". $nickname . " </span> " . $message = str_replace(" \n ", "  ", $message) . " \n  "); 
	     }
         break;
    }
    echo json_encode($log);
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script src="chat.js"></script>
<script>

  
 
  // default name is 'Guest'
  if (!name || name === '  ') {
    name = " Dylan Young ";  
  }
  
  // strip tags
  name = name.replace(/(<([^>]+)>)/ig,"  " + ":");
 
  // display name on page
  $("#name-area ").html(" You are: <span>      " + name + "   </span>      ");
  
  
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
             
             // don't allow new content if length is maxed out
             if (length >= maxLength) {  
                 event.preventDefault();  
             }  
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
        </div>
    </div>
</div>
</div>
          
          
          
          
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
  </body>
</html>
