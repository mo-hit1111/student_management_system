<?php
 session_start();
    echo "hello".$_SESSION['name'];

echo "<br>";
echo "<br>";
echo "<a href='add_student.php'>addstudent</a>";
echo "<br>";
echo "<br>";
echo "<a href='logout.php'>logout</a>";
echo "<br>";
echo "<br>";
echo "<a href='student_dataview.php'>data</a>";
?>