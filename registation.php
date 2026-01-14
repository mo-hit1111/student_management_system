<?php
include 'database.php';

if(isset($_POST['Singin'])){
  $name = $_POST['name'];
  
  $email = $_POST['email'];
  $password = $_POST['password'];
 
  $hash = password_hash($password,PASSWORD_DEFAULT);
  $check = "SELECT * FROM admins WHERE email='$email'";
    $result = $mysql->query($check);
  if($result->num_rows>0){
       echo 'sorry data not inserted';
  }
 
  else{
     $query ="INSERT INTO admins (name,email,password) values('$name','$email','$hash') ";
     $mysql->query($query);
    echo "succesfully registered";
    header("location:login.php");
   
  }
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <title>NEW ADMIN</title>
  </head>
  <body >
     <div  style="width: 400px;">
        <form method ="POST"  >
            <div >
    <label for="name" >name</label>
    <input type="text" id="name" name="name" required >
  </div>
   <div class="mb-3">>email</label>
    <input type="email"  id="email" name="email" required >
  </div>
  <div class="mb-3">
    <label for="Password" >Password</label>
    <input type="password"  id="Password" name="password" required >
  </div>
  <button type="submit" name ="Singin">Singin</button>
  <button><a href="login.php">login</a></button>
</form>
     </div>
   
</html>