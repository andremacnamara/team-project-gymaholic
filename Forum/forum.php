<?php
ob_start();
include '../Account/connect.php';
include '../Account/header.php';

$sql = "SELECT categories.cat_id,categories.cat_name,
                categories.cat_description, COUNT(topics.topic_id) AS topics
        FROM categories
            LEFT JOIN topics ON topics.topic_id = categories.cat_id
        GROUP BY categories.cat_name, categories.cat_description, 
                categories.cat_id";

$result = mysql_query($sql);

if (!$result) {
    echo '<p class="error">The categories could not be displayed, please try again later.</p>';
} else {
    if (mysql_num_rows($result) == 0) {
        echo '<p class="error">No categories defined yet.</p>';
    } else {
        //prepare the table
        echo '
            <h2 class="p-b-2">Forum Categories</h2>
            <div class="container">
            <table class="table forum tale-striped table-hover">
            <thead>
            <a class="btn navbtn m-b-1 col-xs-12 col-sm-2" href="create_cat.php">Create a Category</a>
            <tr class="bg-info">
                <th class="cell-stat col-lg-12 col-xs-6"></th>
                <th><h3>Category</h3></th>
                <th><h3>Last topic</h3></th>
            </tr>
            </thead>
            <tbody>';
        
        while ($row = mysql_fetch_assoc($result)) {
            
            echo '<tr>';
            echo '<td class="text-center"><i class="fa fa-exclamation fa-2x text-danger">     </i></td>';
            echo '<td class="m-b-1"><h3><a href="category.php?id=' . $row['cat_id'] . '">' . $row['cat_name'] . '</a></h3>' . $row['cat_description'] . '</td>';
            
            echo '<td>';
            
            //fetch last topic for each cat
            $topicsql = "SELECT topic_id, topic_subject, topic_date, topic_cat
                        FROM topics
                        WHERE topic_cat = " . $row['cat_id'] . "
                        ORDER BY topic_date DESC
                        LIMIT 1";
            
            $topicsresult = mysql_query($topicsql);
            
            if (!$topicsresult) {
                echo '<p class="error">Last topic could not be displayed.</p>';
            } else {
                if (mysql_num_rows($topicsresult) == 0){
                    echo 'No topics';
                } else {
                    while ($topicrow = mysql_fetch_assoc($topicsresult))
                        echo '<a href="topic.php?id=' . $topicrow['topic_id'] . '">' . $topicrow['topic_subject'] . '</a>' . '</br>' . date('d-m-Y', strtotime($topicrow['topic_date']));
                }
            }
            echo '</td>';
            echo '</tr>';
        }
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>'; //container
}

include '../Account/footer.php';
?>