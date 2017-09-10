
<?php
//create_cat.php
ob_start();
include '../Account/connect.php';
include '../Account/header.php';

$sql = "SELECT
    topic_id,
    topic_subject
FROM
    topics
WHERE
    topics.topic_id = " . mysql_real_escape_string($_GET['id']);

$result = mysql_query($sql);

if (!$result) {
    echo '<p class="error">The topic could not be displayed, please try again later.</p>';
} else {
    if (mysql_num_rows($result) == 0) {
        echo '<p class="error">This topic doesn&prime;t exist.</p>';
    } else {
        while ($row = mysql_fetch_assoc($result)) {
            //display post data
            echo '<div class="container form">
		    		<div class="page-header page-heading">
		    			<tr class="text-center">
							<th><h2>' . $row['topic_subject'] . ' ?'.'</h2></th>
						</tr>
					<div class="clearfix"></div>
					</div>
					<table class="table forum table-colour table-hover con" id="table">
						';
            
            //fetch the posts from the database
            $posts_sql = "SELECT
    posts.post_topic,
    posts.post_content,
    posts.post_date,
    posts.post_by,
    users.user_id,
    users.user_name
FROM
    posts
LEFT JOIN
    users
ON
    posts.post_by = users.user_id
WHERE
    posts.post_topic = " . mysql_real_escape_string($_GET['id']);
            
            $posts_result = mysql_query($posts_sql);
            
            if (!$posts_result) {
                echo '<tr><td><p class="error">The posts could not be displayed, please try again later.<p></td></tr>';
            } else {
                
                while ($posts_row = mysql_fetch_assoc($posts_result)) {
                    echo '
						<tbody>
							<tr>
			                	<td>
			                		<img src="ppp.png"><br>
									<ul>
										<li><a href="#">' . $posts_row['user_name'] . '</a></li>' . '<li>' . date('d-m-Y H:i', strtotime($posts_row['post_date'])) . '</li></ul></td>' . '<td class="post">'
										.'<p>' . htmlentities(stripslashes($posts_row['post_content'])) . '</p>' . '
								</td>
							</tr>';
                }
            }
            
            echo '</tbody></table></div>';
            
            if (!$_SESSION['signed_in']) {
                echo '<tr><td colspan=2><p class="mustbesignedin">You must be <a href="../Account/signin.php">signed in</a> to reply. You can also <a href="../Account/signup.php">sign up</a> for an account.</p>';
            } else {
                //show reply box
                echo '<div class="form-group">
								<form class="replybox form" method="post" action="reply.php?id=' . $row['topic_id'] . '">
									<textarea class="form-control" rows="3" name="reply-content"></textarea><br />
									<input type="submit" class="btn navbtn m-b-1" value="Post Reply" />
								</form>
					</div>';
            }
            
            //finish the table
            
        }
    }
}

?>
</div>