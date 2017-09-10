<?php
//category.php
ob_start();
include '../Account/connect.php';
include '../Account/header.php';

//first select the category based on $_GET['cat_id']
//first select the category based on $_GET['cat_id']
$sql = "SELECT
			cat_id,
			cat_name,
			cat_description
		FROM
			categories
		WHERE
			cat_id = " . mysql_real_escape_string($_GET['id']);

$result = mysql_query($sql);
if(!$result)
{
    echo 'The category could not be displayed, please try again later.' . mysql_error();
}
else
{
    if(mysql_num_rows($result) == 0)
    {
        echo '<p class="error">This category does not exist.</p>';
    }
    else
    {
        //display category data
        while($row = mysql_fetch_assoc($result))
        {
           echo '<h2>Topics in &prime;' . $row['cat_name'] . '&prime; category</h2><br />';
        }
     
        //do a query for the topics
        $sql = "SELECT  
                    topic_id,
                    topic_subject,
                    topic_date,
                    topic_cat
                FROM
                    topics
                WHERE
                    topic_cat = " . mysql_real_escape_string($_GET['id']);
         
        $result = mysql_query($sql);
         
        if(!$result)
        {
            echo '<p class="error">The topics could not be displayed, please try again later.</p>';
        }
        else
        {
            if(mysql_num_rows($result) == 0)
            {
                echo '<p class="error">There are no topics in this category yet. <a href="create_topic.php">Create One?</a></p>';
            }
            else
            {
                //prepare the table
    echo '  
            <div class="container">
            <table class="table forum tale-striped table-hover">
            <thead>
            <a class="btn navbtn m-b-1" href="create_topic.php">New Topic</a>
            <tr class="bg-info">
                <th class="cell-stat"></th>
                <th><h3>Topic</h3></th>
                <th><h3>Created At</h3></th>
                
            </tr>
            </thead>
            <tbody>';
                     
                while($row = mysql_fetch_assoc($result))
                {               
                    echo '<tr>';
                        echo '<td>';
                            echo '<td class="m-b-2"><h3><a href="topic.php?id='
                            . $row['topic_id'] . '">' . $row['topic_subject'] . '</a><h3>';
                        echo '</td>';
                        echo '</td>';
                        echo '<td>';
                            echo date('d-m-Y', strtotime($row['topic_date']));
                        echo '</td>';
                    echo '</tr>';
                }
            }
        }
    }
}
 
 
include '../Account/footer.php';
?>