<?php

$host = "sql12.nanannan";
$user = "sql12710825";
$pass = "UWGh8qFR6w";
$db = "sql12710825";

$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn) {
    echo "";
} else {
    echo "Connection failed: " . mysqli_connect_error();
}
?>
