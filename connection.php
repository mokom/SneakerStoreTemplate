<?php


$conn = new mysqli("localhost", "root", "", "algonquinProject3");

if ($conn->connect_error) {
    die("connection failed: ".$conn->connect_error);
}

?>
