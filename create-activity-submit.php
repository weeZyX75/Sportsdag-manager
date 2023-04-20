<?php
 
$server = "sql597.your-server.de";
$db = "sportsdag";
$user = "sportsdag";
$pw = "nsT4gVdHi2mPaZVs";

// Create connection
$conn = new mysqli(
    $servername,
    $username, 
    $password, 
    $dbname
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    // collect value of input field
    $activity_name = $_REQUEST['activity-name'];
    $participants_limit = $_REQUEST['participants-limit'];
    $location = $_REQUEST['location'];
    $block_a = $_REQUEST['block-a'];
    $block_b = $_REQUEST['block-b'];
    $meeting_point = $_REQUEST['meeting-point'];
 
    if (empty($data)) {
        echo "data is empty";
    } else {
        echo $data;
    }
}
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}
 
$sqlquery = "INSERT INTO `activities` (`id`, `activity_name`, `participants_limit`, `location`, `block_a`, `block_b`, `meeting_point`) VALUES ($activity_name, $participants_limit, $location, $block_a, $block_b, $meeting_point)";
 
if ($conn->query($sql) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}