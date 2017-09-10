<?php
//create_cat.php
ob_start();
include '../Account/connect.php';
include '../Account/header.php';

echo '<h2>Create a category</h2>';
if($_SESSION['signed_in'] == false | $_SESSION['user_level'] != 1 )
{
	//the user is not an admin
	echo '<p class="error">Sorry, you do not have sufficient rights to access this page.</p>';
}
else
{
	//the user has admin rights
	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
		//the form hasn't been posted yet, display it
		echo '<div class="container">
		        <form method="post" class="registration" action="">
		        	<div class="row">
		        		<div class="form-group col-xs-12">
		        			<label for="CatName"><h5>Category Name</h5></label>
	                    	<input type="text" class="form-control" name="cat_name" id="CatName" placeholder="..."/><br />
	                    </div>
	    			    <div class="form-group col-xs-12">
		        			<label for="CatDescription"><h5>Category Description</h5></label>
	                    	<input type="text" class="form-control" name="cat_description" id="CatDescription" placeholder="..."/><br />
	                    </div>
	    			    <input type="submit" class="col-xs-12 btn button-create" value="Add category"/>
    			    </div>
		        </form>
              </div>
            
            ';
	}
	else
	{
		
		//the form has been posted, so save it
		$sql = "INSERT INTO categories(cat_name, cat_description)
		   VALUES('" . mysql_real_escape_string($_POST['cat_name']) . "',
				 '" . mysql_real_escape_string($_POST['cat_description']) . "')";
		$result = mysql_query($sql);
		if(!$result)
		{
			//something went wrong, display the error
			echo 'Error' . mysql_error();
		}
		else
		{
			echo '<p class="success">New category succesfully added.</p>';
			header('Location: ../Forum/forum.php');
		}
	}
}

include '../Account/footer.php';
?>
