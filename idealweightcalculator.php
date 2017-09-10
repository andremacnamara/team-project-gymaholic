<?php
include 'Account/header.php';
?>
 
	

 <script>
function $(){var elements=new Array();for (var i=0;i<arguments.length;i++){var element=arguments[i];if(typeof element=='string')element=document.getElementById(element);if(arguments.length==1)return element;elements.push(element);}return elements;}
function msystem(){if($('msw').value=='metric'){$('thw').innerHTML=' (Cms)';}else{$('thw').innerHTML=' (inches)';};}
function bweight (){var ms=$('msw').value;var sex=$('sw').value;var height=$('hw').value;if(height==null || height.length==0 ){$('ibw').value="Fields must be filled";}
else{$('ibw').value="";}if(ms=='metric'&&height>0&&sex=='m'){$('ibw').value=Math.round(56.2*1+(height*.39-152.4*.39)*1.41)*1+" Kgs";}
else if(ms=='metric'&&height>0&&sex=='f'){$('ibw').value=Math.round(53.1*1+(height*.39-152.4*.39)*1.36)*1+" Kgs";}
else if(ms=='us'&&height>0&&sex=='m'){$('ibw').value=Math.round(56.2*2.20462+(height*1-60)*1.41*2.20462)*1+" lbs";}
else if(ms=='us'&&height>0&&sex=='f'){$('ibw').value=Math.round(53.1*2.20462+(height*1-60)*1.36*2.20462)*1+" lbs";}
if(ms=='metric'&&height>0){$('ibw1').value=Math.round(18.5*(height*height/10000))+" Kgs-" +Math.round(25*(height*height/10000))+" Kgs";}
else if(ms=='us'&&height>0){$('ibw1').value=Math.round(18.5*(height*height)/703)+" lbs-" +Math.round(25*(height*height)/703)+" lbs";}}</script>



</script>

      <body>
    
      
    <!http://v4-alpha.getbootstrap.com/components/forms/?>
          
          <div class="col-md-5 card-outline-info">
              <div class="card">

              
              <div class="card-block">
                <h4 class="card-title display-4 text-xs-center m-y-3">Ideal weight Calculator</h4>
                <p class="card-text text-xs-center">Please enter details below</p>

                  
 <div id=outer>
<div id=cover>
    
    <form name=iw>
        <table class=main>
            <col width=60%><col width=40%>
        
         <div class="form-group row">
        <tr><td>Measuring System<td><select id=msw onchange=msystem();><option value=metric>Metric (Kgs, Cms)<option value=us>US (lbs, inches)</select>
         </div>
             
              <div class="form-group row">
                <tr><td>Gender:<td>
                  <select id=sw><option value=m>Male<option value=f>Female</select>
                  </div>
                  
                   <div class="form-group row">
                <tr><td>Height:<span id=thw>(Cms)</span><td><input id=hw>
                 </div>
                
                <tr><td><button type=reset class="btn btn-primary">Reset</button><td><button type=button onclick='bweight();' class="btn btn-primary">Submit</a>
                
                <tr><td>Your ideal weight is:<td><input id=ibw class=op><tr><td></table></form></div></div>

                
             
                
              </div> <!--/.card-block-->
            </div> <!--/.car-block-->
          </div><!--/.column -->
          
        
        
        
 <div class="col-md-5 card-outline-info" style="#6495ed">
              <div class="card">

              

              <h3 class="card-header">What's your ideal weight?</h3>
              <div class="card-block">

              <p> The Ideal Weight Calculator calculates the ideal body weight as well as a healthy body weight range based on height and gender. Simply fill in your information and the ideal weight calculator will output your ideal weight.   </p>
               <p> However, it is important to note that a perfect weight is sometimes subjective. For example, if you are 7 lbs over your ideal weight, it may not necessarily mean your physical appearance will be poor! The ideal weight calculator uses a formula known as the "Devine formula" to calculate the ideal weight and  is the most commonly used formula on the internet for ideal body weight.
</p>
               
               
               
                    <img src="http://www.justlovewalking.com/wp-content/uploads/2013/03/photodune-3054393-gym-people-xs.jpg"  alt="..." class="img-thumbnail">
             
                
              </div> <!--/.card-block-->
            </div> <!--/.car-block-->
          </div><!--/.column -->
 

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
        
   
 
		           
            
 