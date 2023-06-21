<?php
include "config.php";
$list = $_POST['list'];
$id = $_POST['ID'];
// Sanitize user input to prevent SQL injection
$sanitizedList = mysqli_real_escape_string($con, $list);
$sanitizedId = mysqli_real_escape_string($con, $id);
mysqli_query($con, "UPDATE tbltodo SET `list` = '$sanitizedList' WHERE id = '$sanitizedId'");
header("location: index.php");
?>
