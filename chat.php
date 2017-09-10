<DOCTYPE! html>

<head>
        <link rel="stylesheet" href="css/style.css" />
		<script src='//assets.codepen.io/assets/common/stopExecutionOnTimeout.js?t=1'></script>
		<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	
<title>Gymaholic </title>
</head>
	<body onload="setInterval('chat.update()', 1000)">
	<?php
$servername = "127.0.0.1";
$username = "x14402132";
$password = "";
$dbname = "c9";
$port = 3306;

$nameinput = $_POST['sendie'];



//$second = $_POST['name'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//inserting
$sql = "INSERT INTO message (message)
VALUES ('$nameinput')";

//if connection successful go to this page 


mysqli_close($conn);
?>
		
<script>$('button').click(function () {
    $('#slideout').toggleClass('on');
});
</script>

<div data-role="page" class="chat">
<div id="page-wrap"> 

    <h2 id="h1">Chat</h2>
    
    <div >
        
        
        
  
    
    </div></div>
   
    <div class="chat">
    <div id="text">
    <p id="name-area"></p>
    </div>
    <div class="chat-body"><div class="chat-body"></div></div>
    
    <form class="chat" data-ajax="false">
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
	

	    <div data-role="footer" id="footer">
				<h2>&copy; gymaholic  2016</h2>
			</div>
	    
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
        
        
        
    
    
    </div></div>
   
    <div id="chatstuff">
    <div id="text">
    <p id="name-area"></p>
    </div>
    <div id="chat-wrap"><div id="chat-area"></div></div>
    
    <form name = "sendie" method="post" id="send-message-area" data-ajax="false">
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
		
	



		</script>
		
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script src="chat.js"></script>
<script>

 
 
 
  // default name is 'Guest'
  if (!name || name === '  ') {
    name = " Dylan";  
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
        </div>
    </div>
</div>
</div>
	    
	    
	    
	    
	    
	    
			</body>
	</html>		
	
	
	
	