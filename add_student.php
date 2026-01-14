<?php
include 'database.php';
if(isset($_POST['add'])){
  $name = $_POST['name'];
  $roll_num = $_POST['roll'];
  $class =$_POST['class'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $check = "SELECT * FROM students WHERE email='$email'";
  if($check->num_rows>0){
    echo 'sorry data not inserted';
  
}
  
  else{
    $query ="INSERT INTO students (name,roll_no,class,email,phone) values('$name','$roll_num','$class','$email','$phone') ";
    $mysql->query($query);
    echo "succesfully registered";
    header("location:student_dataview.php");

  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>name 	roll_no 	class 	email 	phone </title>
  </head>
  <body >
    <button><a href="dashbod.php">home</a></button>
     <form action="" method="post">
         <label for="name" >name</label>
        <input type="text" id="name" name="name" required >
     <label for="roll" >roll_num</label>
    <input type="text" id="roll" name="roll" required >
     <label for="class" >class</label>
    <input type="text" id="class" name="class" required >
     <label for="email" >email</label>
    <input type="text" id="email" name="email" required >
     <label for="phone" >phone</label>
    <input type="text" id="phone" name="phone" required >
     <button type="sub" name="add" > ADD</button>
     </form>
     </div>
   
</html>