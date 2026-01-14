<?php
include 'database.php';
session_start();
if(isset($_POST['submit'])){
  $email = $_POST['email'];
 $password = $_POST['password'];

 $query = "SELECT * FROM admins 
          WHERE email='$email' ";

  $result = $mysql->query($query);
  $row = $result->num_rows ;
  if($result->num_rows>0){
    $row = $result->fetch_assoc();
    if(password_verify($password,$row['password'])){
      $_SESSION['name']=  $row['name'];
     header("Location: dashbod.php");
     exit;
    }
  }
 else{
  echo "ENTER VALID INFO ";
 }
} 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head >
  <body class="bg-primary-subtle">
    
   <div class="container">
    <form method="POST" action="" >
      <h1 class="primary">LOGIN</h1>
  <div class="mb-3 mt-5">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="Email" name="email" required>
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" id="Password" name="password" required>
  </div>
  <button type="submit" name ="submit" class="btn btn-primary">Submit</button>
</form>
   </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>