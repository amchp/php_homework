<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "TEST_PHP";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sqlquery = "INSERT INTO TEST_NAME VALUES
    ('" . $_REQUEST["name"] . "')";

if (mysqli_query($conn, $sqlquery) === TRUE) {
    echo "<h3>data stored in a database successfully."
    . " Please browse your localhost php my admin"
    . " to view the updated data</h3>";
} else {
    echo "Error: " . $sqlquery . "<br>" . $conn->error;
}
mysqli_close($conn);
?>