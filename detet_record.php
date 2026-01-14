<?php
include 'database.php';
$id =$_GET['id'];
$query = "DELETE  FROM students WHERE id ='$id'";
$mysql->query($query);

header('location:student_dataview.php');



?>