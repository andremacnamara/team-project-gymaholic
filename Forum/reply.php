<?php
//create_cat.php
ob_start();
include '../Account/connect.php';
include '../Account/header.php';

if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    //someone is calling the file directly, which we don't want
    echo '<p class="error">You cannot use this file directly</p>';
}
else
{
    //check for sign in status
    if(!$_SESSION['signed_in'])
    {
        echo '<p class="error">Sorry, you have to be <a href="../Account/signin.php">signed in</a> to reply.</p>';
    }
    else
    {
        //a real user posted a real reply
        $sql = "INSERT INTO 
                    posts(post_content,
                          post_date,
                          post_topic,
                          post_by) 
                VALUES ('" . $_POST['reply-content'] . "',
                        NOW(),
                        " . mysql_real_escape_string($_GET['id']) . ",
                        " . $_SESSION['user_id'] . ")";
                         
        $result = mysql_query($sql);
                         
        if(!$result)
        {
            echo '<p class="error">Your reply has not been saved, please try again later.</p>';
        }
        else
        {
            echo '<p class="success">Your reply has been saved, check out <a href="topic.php?id=' . htmlentities($_GET['id']) . '">the topic</a>.</p>';
        }   
     
        header('Location: topic.php?id=' . htmlentities($_GET['id']) . '');
    }
}
 
include '../Account/footer.php';
?>