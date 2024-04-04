<?php
$host = 'sql210.infinityfree.com';
$username = 'if0_36288650';
$password = 'b9oJzjsMIyjv';
$database = 'if0_36288650_XXX';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
