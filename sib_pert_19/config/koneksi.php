<?php

$server = "localhost";
$username = "root";
$pass = "";
$db = "sib_pert_19";

$conn = new mysqli($server, $username, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
