<?php
//create_topic.php
ob_start();
include '../Account/connect.php';
include '../Account/header.php';


if ($_SESSION['signed_in'] == false) {
    //the user is not signed in
    echo '<p class="error">Sorry, you have to be <a href="../Account/signin.php">signed in</a> to create a topic.</p>';
} else {
    //the user is signed in
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        //the form hasn't been posted yet, display it
        //retrieve the categories from the database for use in the dropdown
        $sql = "SELECT
                    cat_id,
                    cat_name,
                    cat_description
                FROM
                    categories";
        
        $result = mysql_query($sql);
        
        if (!$result) {
            //the query failed, uh-oh :-(
            echo '<p class="error">Error while selecting from database. Please try again later.</p>';
        } else {
            if (mysql_num_rows($result) == 0) {
                //there are no categories, so a topic can't be posted
                if ($_SESSION['user_level'] == 1) {
                    echo '<p class="error">You have not created categories yet.</p>';
                } else {
                    echo '<p class="error">Sorry! No categories created. You must wait for an admin to create some.</p>';
                }
            } else {
                

                
                echo '
                <div class="container">
                <form class="registration" method="post" action="">
					<h2 class="headline">Create a topic</h2>
					<h4 class="sub-headline">Fill in the form to start a topic</h4>
					<div class="row">
					<div class="form-group col-xs-12">
					Subject: <input type="text" name="topic_subject" /><br /></div>
					<div class="form-group col-xs-12">
					Category:'; 
					
				
				echo '<select name="topic_cat">';
					while($row = mysql_fetch_assoc($result))
					{
						echo '<option value="' . $row['cat_id'] . '">' . $row['cat_name'] . '</option>';
					}
				echo '</select><br /></div>';	
					
				echo 'Message: <br /><textarea name="post_content" /></textarea><br /><br />
					<input type="submit" class="col-xs-12 btn button-create" value="Create topic" />
				 </div></form></div>';
            }
        }
    } else {
        //start the transaction
        $query  = "BEGIN WORK;";
        $result = mysql_query($query);
        
        if (!$result) {
            //Damn! the query failed, quit
            echo '<p class="error">An error occured. Please try again later.</p>';
        } else {
            
            //the form has been posted, so save it
            //insert the topic into the topics table first, then we'll save the post into the posts table
            $sql = "INSERT INTO 
                        topics(topic_subject,
                               topic_date,
                               topic_cat,
                               topic_by)
                   VALUES('" . mysql_real_escape_string($_POST['topic_subject']) . "',
                               NOW(),
                               " . mysql_real_escape_string($_POST['topic_cat']) . ",
                               " . $_SESSION['user_id'] . "
                               )";
            
            $result = mysql_query($sql);
            if (!$result) {
                //something went wrong, display the error
                echo '<p class="error">An error occured while attempting to post data. Please try again later.<br /><br /></p>' . mysql_error();
                $sql    = "ROLLBACK;";
                $result = mysql_query($sql);
            } else {
                //the first query worked, now start the second, posts query
                //retrieve the id of the freshly created topic for usage in the posts query
      $topicid = mysql_insert_id();
                 
                $sql = "INSERT INTO
                            posts(post_content,
                                  post_date,
                                  post_topic,
                                  post_by)
                        VALUES
                            ('" . mysql_real_escape_string($_POST['post_content']) . "',
                                  NOW(),
                                  " . $topicid . ",
                                  " . $_SESSION['user_id'] . "
                            )";
                $result = mysql_query($sql);
                if (!$result) {
                    //something went wrong, display the error
                    echo '<p class="error">An error occured while attempting to post data. Please try again later.<br /><br /></p>' . mysql_error();
                    $sql    = "ROLLBACK;";
                    $result = mysql_query($sql);
                } else {
                    $sql    = "COMMIT;";
                    $result = mysql_query($sql);
                    
                    //after a lot of work, the query succeeded!
                    echo '<p class="success">You have succesfully created <a href="topic.php?id=' . $topicid . '">your new topic</a>.</p>';
                }
            }
        }
    }
}

include '../Account/footer.php';
?>