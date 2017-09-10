<?php
ob_start();
include 'Account/header.php';


?>

    
    <div class="index-header text-xs-center .img-fluid">
			<!-- Holds image which is declared in the main-header styles in style.css -->
			<h1 class="indextitle text-center">Gymaholic</h1>
			<h3 class="tagline text-center">Fit fitness into your life this year.</h3>
			<p class="indexbio text-center">Track your workouts, develop healthy habits, and reach your goals with the help of our community.</p>
		  </div>
      
      <h1 id="about" class="display-4 text-xs-center m-y-3 text-muted">About</h1>
        <div class="row m-x-1">
          
          <div class="col-md-4 card-outline-info">
              <div class="card">
              <img class="card-img-top img-fluid" src="img/forum.PNG" alt="Card image cap">
              <div class="card-block">
                <h4 class="card-title">Forum</h4>
                <p class="card-text">Check out our discussion forum. We have topics from Diet & Excercise to gym reccomendations and more.
                                     Anyone can have a read, but to take part all you need to do is sign up for a free account.
                </p>
              </div> <!--/.card-block-->
            </div> <!--/.car-block-->
          </div><!--/.column -->
          
           <div class="col-md-4 card-outline-info">
            <div class="card">
              <img class="card-img-top img-fluid" src="img/messenger.png" alt="Card image cap">
              <div class="card-block">
                <h4 class="card-title">Chat</h4>
                <p class="card-text">
                  Have a question you don't feel like asking on the forum. Not to worry. We have a private messanging system. You can
                  talk to anyone on our site. Another memeber, a trainer, or whoever you want.
                </p>
              </div> <!--/.card-block-->
            </div> <!--/. card -->
          </div><!--/.column -->
          
          <div class="col-md-4 card-outline-info">
            <div class="card">
              <img class="card-img-top img-fluid" src="img/calender.png" alt="Card image cap">
              <div class="card-block">
                <h4 class="card-title">Logs</h4>
                <p class="card-text">The most crucial part of getting into shape and keeping fit, is by keeping track of your activities. With us you can log
                your intake of food, excercise done as well as reciving calorie calculations.</p>
              </div> <!--/.card-block-->
            </div> <!--/. card -->
          </div><!--/.column -->
        </div> <!-- /.row -->
        

   
        <!-- ===========================
              chat modal
        ==============================--->
        
       
             <!--<div id="messenger" class="modal fade">
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
</div>-->
   <div id="footer">
        <span class="copyright">&copy; 2016 Gymaholic</span>
        <ul class="social">
          <li><a href="#">About</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Blog</a></li>
        </ul>
            <div style="clear: both"></div>
        </div>



  <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
</body>
</html>