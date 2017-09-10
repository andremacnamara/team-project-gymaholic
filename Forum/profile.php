<?php
ob_start();
include '../Account/connect.php';
include '../Account/header.php';
  
?>

      <div class="main-header text-xs-center">
			<span class="title">Welcome to  your profile!</span>
			
			<br>
			<br>
			<br>
			<br>
			<br>
			<div class="text-center" class="col-lg-4 col-sm-6 text-center">
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
                
                <h3>
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
               
                   
        <a href="user-settings.php" class="btn btn-warning">Change your settings</a>
        <a href="choose.php" class="btn btn-warning">Gym Selection</a>
            </div>
		  </div>
		  
      
      <h1 id="Gym" class="display-4 text-xs-center m-y-3  text-muted">My Gym</h1>
    
 <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2><?php
                    
                    


$conn = new mysqli($servername, $username, $password, $dbname);

$_SESSION['user_name'];
$sql = "SELECT * FROM users WHERE user_name = '{$_SESSION['user_name']}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> ". $row["gym_name"].  "<br>";
         echo $row['user_id'];
     }
     
} 
    				
    				else
    				{
    				
    				}
    				?></h2>
                </div>
                <div class="col-lg-6">
                  
                        <li>
                            <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a href="https://facebook.com" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-google fa-fw"></i> <span class="network-name">Google</span></a>
                        </li>
                    </ul>
                </div>
         </div>

        </div>
        </div>
       
        </div>
        
      
        
        
      
        
        
        <!-- ===========================
              chat modal
        ==============================--->
        
          
          
          
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
  </body>
</html>
