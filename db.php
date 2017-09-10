<?php
$servername = "127.0.0.1";
$username = "x14402132";
$password = "";
$dbname = "c9";
$port = 3306;

$nameinput = $_POST['finalcal'];
$nameinput20 = $_POST['allMeals20'];
//$bioinput = $_POST['title'];

//$second = $_POST['name'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//inserting
$sql = "INSERT INTO calories (calorie_count)
VALUES ('$nameinput')";
$sql1 = "INSERT INTO calories (calorie_count)
VALUES ('$nameinput20')";

//$sql = "INSERT INTO user (user_bio)
//VALUES ('$bioinput')";
//if connection successful go to this page 
if (mysqli_query($conn, $sql)) {
    include 'logs.php';
} else { //if not successful
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
if (mysqli_query($conn, $sql1)) {
    include 'logs.php';
} else { //if not successful
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>