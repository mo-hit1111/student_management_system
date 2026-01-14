<?php
include 'database.php';
$id =$_GET['id'];
$query = "SELECT * FROM students WHERE id ='$id'";
$result = $mysql->query($query)->fetch_assoc();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>name 	roll_no 	class 	email 	phone </title>
  </head>
  <body >
     <form action="" method="post">
         <label for="name" >name</label>
        <input type="text" id="name" name="name" value ="<?php echo $result['name'] ?>" >
     <label for="roll" >roll_num</label>
    <input type="text" id="roll" name="roll" value ="<?php echo $result['roll_no'] ?>" >
     <label for="class" >class</label>
    <input type="text" id="class" name="class" value ="<?php echo $result['class'] ?>" >
     <label for="email" >email</label>
    <input type="text" id="email" name="email" value ="<?php echo $result['email'] ?>">
     <label for="phone" >phone</label>
    <input type="text" id="phone" name="phone" value ="<?php echo $result['phone'] ?>" >
     <button type="submit" name="update" > update</button>
     <button><a href="student_dataview.php">back</a></button>
     </form>
     </div>
     
     <?php
     if(isset($_POST['update'])){
       $name = $_POST['name'];
     $roll_num = $_POST['roll'];
  $class =$_POST['class'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
    $query ="UPDATE  students SET name = '$name' , roll_no ='$roll_num' , class='$class' , email = '$email' , phone = '$phone' where id = '$id'";
    $mysql->query($query);
    
    header("location:student_dataview.php");
     }
    ?>
</body>
   
</html>