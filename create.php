<?php
include("connection.php");

$query = "INSERT INTO studentsrec VALUES ('5','siraj','BE')";

mysqli_query($conn, $query);

echo "connected";
?>