            <h2>Talk to your trainer from here!</h2>
                        <form  method="post" >
                            <textarea type="text" name="title" maxlength="50" value="<?=$varName;?>">
                                </textarea>
                             	 <br>
                    <input type="submit" name="formSubmit" value="Submit" onclick="clicked();"/>
                    
                    </form>
                    
                    <script type="text/javascript">
function clicked() {
    alert('Your message has been sent :)');
}
 </script>                  <?php
                  if($_POST['formSubmit'] == "Submit") 
                  {
                     
                    $username = "x14402132";
$password = "";
$dbname = "c9";
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname);


$varName = $_POST['title'];
$sql = "UPDATE users SET message ='$varName','{$_SESSION['user_name']}'  WHERE user_name = 'dylan112'";
$result = $conn->query($sql);
	   ?>



<?php
	if($_SESSION['signed_in'])
    				{
    					echo  htmlentities($_SESSION['user_name']);
    					               $servername = "localhost";
$username = "x14402132";
$password = "";
$dbname = "c9";
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname);

$_SESSION['user_name'];
$sql = "SELECT message FROM users WHERE user_name = '{$_SESSION['user_name']}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> ". $row["message"].  "<br>";
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
    					echo  htmlentities($_SESSION['user_name']);
    					               $servername = "localhost";
$username = "x14402132";
$password = "";
$dbname = "c9";
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT message FROM users WHERE message = 'user_name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> ". $row["message"].  "<br>";
     }
     
} 
    				}
    				else
    				{
    				
    				}
    				?>
    				<head>
        <link rel="stylesheet" href="css/style.css" />
		<script src='//assets.codepen.io/assets/common/stopExecutionOnTimeout.js?t=1'></script>
		<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	
<title>Chat Box </title>
</head>
	<body onload="setInterval('chat.update()', 1000)">
	

		
<script>$('button').click(function () {
    $('#slideout').toggleClass('on');
});
</script>

<div data-role="page" id="chat">
<div id="page-wrap"> 

    <h2 id="h1">Chat</h2>
    
    <div id="nav">
        
        
        
    
    
    </div></div>
   
    <div id="chatstuff">
    <div id="text">
    <p id="name-area"></p>
    </div>
    <div id="chat-wrap"><div id="chat-area"></div></div>
    
    <form id="send-message-area" data-ajax="false">
        <p>type your message below and press enter! </p>
        <textarea name = "sendie" id="sendie" maxlength = '100'></textarea>
    </form>

</div>

	<script>
		function Chat () {
		    this.update = updateChat;
		    this.send = sendChat;
		    this.getState = getStateOfChat;
		}
		
		//gets the state of the chat




		</script>
		
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script src="chat.js"></script>
<script>


 
  // default name is 'Guest'
if (!name || name === '  ') {
                          name = '<?php echo htmlentities($_SESSION["user_name"]) ?>';
  
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

	    <div data-role="footer" id="footer">
		
			</div>
	    
			</body>
	</html>		
	
