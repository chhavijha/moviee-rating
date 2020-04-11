<?php
$con = mysqli_connect("localhost", "root", "", "movie");
if (!$con) {
    die("Could not connect" . mysqli_connect_error());
}
?>