<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT option FROM leftmenu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<button id='lmenu' class='btn btn-info'><a href='/crm/opcje1'>" . $row["option"]. "</a></buttton>" .  "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();




                ?> 