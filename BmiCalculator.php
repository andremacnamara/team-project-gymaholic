<?php
include 'Account/header.php';
?>
 
		  
		  
		    <script language="JavaScript">

function calculateBmi() {
var weight = document.bmiForm.weight.value
var height = document.bmiForm.height.value
if(weight > 0 && height > 0){	
var finalBmi = weight/(height/100*height/100)
document.bmiForm.bmi.value = finalBmi
if(finalBmi < 18.5){
document.bmiForm.meaning.value = "That you are underweight."
}
if(finalBmi > 18.5 && finalBmi < 25){
document.bmiForm.meaning.value = "That you are in healthy weight range."
}
if(finalBmi > 25){
document.bmiForm.meaning.value = "That you are overweight."
}
}
else{
alert("Please Fill in everything correctly")
}
}
//-->
</script>

<!--http://v4-alpha.getbootstrap.com/components/forms/?-->
 <style>


</style>

 <body>
		 
         <div class="col-md-5 card-outline-info">
              <div class="card">

              
              <div class="card-block">
                <h4 class="card-title display-4 text-xs-center m-y-3">BMI Calculator</h4>
                <p class="card-text text-xs-center">Please enter details below </p>
        
<form name="bmiForm">
         
    <div class="form-group row">          
Your Weight(kg): <input type="text" name="weight" size="25"><br />
    </div>
    
     <div class="form-group row">
Your Height(cm): <input type="text" name="height" size="25"><br />
    </div>
    
     <div class="form-group row">
<input type="button" value="Calculate BMI" onClick="calculateBmi()"  class="btn btn-primary" ><br />
</div>

 <div class="form-group row">
Your BMI: <input type="text" name="bmi" size="25"><br />
</div>

 <div class="form-group row">
This Means: <input type="text" name="meaning" size="30"><br />
<input type="reset" value="Reset" class="btn btn-primary" />
     </div>
              </div> <!--/.card-block-->
            </div> <!--/.car-block-->
          </div><!--/.column -->
          
</form>


 <div class="col-md-5 card-outline-info" style="#6495ed">
              <div class="card">

                    <h3 class="card-header">What's is your BMI?</h3>
              <div class="card-block">
               
                <img src="https://cdn2.omidoo.com/sites/default/files/imagecache/full_width/images/bydate/201410/traffic.png"  alt="..." class="img-thumbnail">
               <p> Body mass index, or BMI, is an easy-to-calculate measure of obesity based on the ratio of your weight and your height. It's convenient to use as it doesn't require expensive equipment and just requires the knowledge of your height and weight. It's useful for most people to get a general idea oF their weight and if they are in a healthy weight range.</p>
               
            <p>    BMI isn't perfect as even though it's beneficial in some circumstances, it has some major limitations if you're trying to use it to find out your individual disease risk. </p>
                
                 

     </div>
              </div> <!--/.card-block-->
            </div> <!--/.car-block-->
          </div><!--/.column -->

         
         

 <div class="col-md-5 card-outline-info" style="#6495ed">
              <div class="card">

                  <h3 class="card-header">BMI categories</h3>
              <div class="card-block">
          
             
                  
                      
                      <p>
                          <ul>

  

                      <li> Underweight = less than 18.5 </li>
                     <li>  Normal weight = 18.5 to 24.9 </li>
                      <li>  Overweight = 25 to 29.9  </li>
                    <li>  Obesity = BMI of 30 or greater </li>
                     
                     </ul>
                     
                     </p>
     

     </div>
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