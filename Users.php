<?php
    require './controller/UserController.php';
    $user = new UserController();
    $users = $user->all();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    




  
</head>
<body>

<table id="myTable" class="table">
  <thead>
    <tr>
      <td></td>
      <td >Name</td>
      <td >Surname</td>
      <td >Email</td>
      <td >Password</td>
    </tr>
  </thead>
  <tbody>
      <?php foreach($users as $i => $product): ?>
        <tr>
        
        <td ><?php echo $product['id'] ?></td>
      <td><?php echo $product['name'] ?></td>
      <td ><?php echo $product['surname'] ?></td>
      <td ><?php echo $product['email'] ?></td>
      <td ><?php echo $product['password'] ?></td>
      <td>
      <button type="button" class="btn btn-sm btn-outline-primary">Edit</button>
      <a href="deleteUser.php?id=<?php echo $product['id']?>"><button type="button" class="btn btn-sm btn-outline-danger">Delete</button></a>
      </td>
      
      


        </tr>
        <?php endforeach;?>
    

    
  </tbody>
</table>



    
    
</body>
</html>

