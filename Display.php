<?php
include('connection.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css " rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="contener">
  <button type="button" class="btn btn-primary"><a href="index.php" class="text-light ">add user</a></button>
  </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
<?php

$query= "SELECT * FROM `form2`";
$data = mysqli_query($conn,$query);
$total= mysqli_num_rows($data);
//print_r($total);
$row = mysqli_fetch_array($data);
if ($total > 0) {
    while ($row = mysqli_fetch_array($data)) {
?>
    <tr>
      <th scope="row"><?php  echo $row['id'] ?></th>
      <td><?php  echo $row['name'] ?></td>
      <td><?php  echo $row['email'] ?></td>
      <td><?php  echo $row['password'] ?></td>
      <td>
      <button type="button" class="btn btn-danger"> <a href="delete.php?id=<?php  echo $row['id'] ;?>" class="text-light"> delete </a></button>
      <button type="button" class="btn btn-primary"> <a href="edit.php?id=<?php echo $row['id'] ;?>" class="text-light">  update </a></button>
    </td>
    </tr>
   <?php
   }
}
   ?>
  </tbody>
</table> 
</body>
</html>
