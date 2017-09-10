<?php
ob_start();
include '../Account/connect.php';
include '../Account/header.php';
  
?>

      

<form method="post" action="" class="registration m-x-5">
        <div class="headline">
        <h2>What gym do you attend</h2>
            <div class="row">
            <fieldset>
              <div class="form-group col-xs-12">
                <label class="sr-only">Select a gym</label>
            <select class="form-control" name="title" value="<?=$varName;?>">
    <option>SBG</option>
    <option>FlyFite</option>
    <option>Ben Dunne</option>
    <option>Inspire</option>
  </select>
            </div>
            <input type="submit" class="col-xs-12 btn button" name="formSubmit" value="Submit"/>
          </div>
          </fieldset>
          
        </form>
      </div>
</div>
                <?php
                  if($_POST['formSubmit'] == "Submit") 
                  {
                     
                    $username = "x14402132";
$password = "";
$dbname = "c9";
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname);

$_SESSION['user_name'];

$varName = $_POST['title'];
$sql = "UPDATE users SET gym_name ='$varName' WHERE user_name = '{$_SESSION['user_name']}'";
$result = $conn->query($sql);


     
     
                  }

    				
    				
    				
    				
    				
                  
    				?>
                    <br /><br/>
                        	
                   
            </div>
		  </div>