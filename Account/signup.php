<?php
ob_start();
//signup.php
include 'connect.php';
include 'header.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    /*the form hasn't been posted yet, display it
    note that the action="" will cause the form to post to the same page it is on */
    echo '
        <form method="post" action="" class="registration m-x-5">
        <div class="headline">
        <h2>Sign Up Now</h2></div>
        <h4 class="sub-headline">Fill in the form below for instant access</h4>
            <div class="row">
            <fieldset>
            <legend><span class="number">1</span>Your basic info</legend>
              <div class="form-group col-xs-12">
                <label class="sr-only" for="Username">Username</label>
            	<input class="form-control" type="text" name="user_name" placeholder="Username" id="Username"/><br />
            </div>
            <div class="form-group col-xs-12">
                <label class="sr-only" for="password">Password</label>
            	<input class="form-control"type="password" name="user_pass" placeholder="Password" id="password" /><br />
            </div>
            <div class="form-group col-xs-12">
                <label class="sr-only" for="passwordconfirm">Reenter Password</label>
            	<input class="form-control"type="password" name="user_pass_check" placeholder=" Reenter Password" id="passwordconfirm"/><br />
            </div>
            <div class="form-group col-xs-12">
                <label class="sr-only" for="email">Email Address</label>
            	<input class="form-control"type="email" name="user_email" placeholder="Email Address" id="email"/><br />
            </div>
            <input type="submit" class="col-xs-12 btn button" value="Sign Up"/>
          </div>
          </fieldset>
        </form>
      </div>';
    
} else {
    /* so, the form has been posted, we'll process the data in three steps:
    1.	Check the data
    2.	Let the user refill the wrong fields (if necessary)
    3.	Save the data 
    */
    $errors = array();
    /* declare the array for later use */
    
    if (isset($_POST['user_name'])) {
        //the user name exists
        if (!ctype_alnum($_POST['user_name'])) {
            $errors[] = 'The username can only contain letters and digits.';
        }
        if (strlen($_POST['user_name']) > 30) {
            $errors[] = 'The username cannot be longer than 30 characters.';
        }
    } else {
        $errors[] = 'The username field must not be empty.';
    }
    
    
    if (isset($_POST['user_pass'])) {
        if ($_POST['user_pass'] != $_POST['user_pass_check']) {
            $errors[] = 'The two passwords did not match.';
        }
    } else {
        $errors[] = 'The password field cannot be empty.';
    }
    
        if (isset($_POST['user_email'])) {
            if (strpos($str, "Lorem") !== false) {  
    echo 'Found!';
} else {
    echo 'Not Found!';  
}
    }
    
    if (!empty($errors)) /*check for an empty array, if there are errors, they're in this array (note the ! operator)*/ {
        echo 'Uh-oh.. a couple of fields are not filled in correctly..<br /><br />';
        echo '<ul>';
        foreach ($errors as $key => $value) /* walk through the array so all the errors get displayed */ {
            echo '<li>' . $value . '</li>';
            /* this generates a nice error list */
        }
        echo '</ul>';
    } else {
        //the form has been posted without, so save it
        //notice the use of mysql_real_escape_string, keep everything safe!
        //also notice the sha1 function which hashes the password
        $sql = "INSERT INTO
					users(user_name, user_pass, user_email ,user_date, user_level)
				VALUES('" . mysql_real_escape_string($_POST['user_name']) . "',
					   '" . sha1($_POST['user_pass']) . "',
					   '" . mysql_real_escape_string($_POST['user_email']) . "',
						NOW(),
						0)";
        
        $result = mysql_query($sql);
        if (!$result) {
            //something went wrong, display the error
            echo 'Something went wrong while registering. Please try again later.';
            //echo mysql_error(); //debugging purposes, uncomment when needed
        } else {
            header("Refresh:1; url=signin.php");
            echo '<p class="signinmessage">Succesfully registered. You can now <a href="signin.php">sign in</a> and start posting! :-)</p>';
        }
    }
}

include 'footer.php';
?>
