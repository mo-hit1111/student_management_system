<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
   <table class="table">
    <button><a href="dashbod.php">home</a></button>
  <thead>
    <tr>
      <th scope="col">s.no</th>
      <th scope="col">name</th>
      <th scope="col">roll_num</th>
      <th scope="col">class</th>
     <th scope="col">email</th>
         <th scope="col">phone</th>
    </tr>
  </thead>
  <tbody>
    <?php 
     include 'database.php';
     $query = "SELECT * FROM students";
     $result = $mysql->query($query);
     if($result->num_rows>0){
       $sn =1;
    while($row = $result->fetch_assoc()){
       ?>
    <tr>
      
      <td><?php  echo $sn; $sn++;  ?></td>
      <td><?php echo $row['name'];  ?></td>
      <td><?php echo $row['roll_no'];  ?></td>
      <td><?php echo $row['class'];  ?></td>
      <td><?php echo $row['email'];  ?></td>
      <td><?php echo $row['phone'];  ?></td>
      <td><a href="edit_studentdata.php?id=<?php echo $row['id'] ?>">edit</a></td>
      <td><a href="detet_record.php?id=<?php echo $row['id'] ?>">delet</a></td>
    </tr>
     <?php  } }  ?>
     
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>