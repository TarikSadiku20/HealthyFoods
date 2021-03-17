<?php
    require './controller/ContactController.php';
    $user = new ContactController();
    $users = $user->all();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    


    

   
    



</head>
<body>

<table id="myTable" class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Ideas</th>
      <th scope="col">Tell Us</th>
      
    </tr>
  </thead>
  <tbody>
      <?php foreach($users as $i => $product): ?>
        <tr>
        
        <th scope="col"><?php echo $product['id'] ?></th>
      <th scope="col"><?php echo $product['firstname'] ?></th>
      <th scope="col"><?php echo $product['lastname'] ?></th>
      <th scope="col"><?php echo $product['phone'] ?></th>
      <th scope="col"><?php echo $product['email'] ?></th>
      <th scope="col"><?php echo $product['ideas'] ?></th>
      <th scope="col"><?php echo $product['tellus'] ?></th>
      <td>
      <button type="button" class="btn btn-sm btn-outline-primary">Edit</button>
      <a href="deleteMessage.php?id=<?php echo $product['id']?>"> <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
      </td>
     
      


        </tr>
        <?php endforeach;?>
    

    
  </tbody>
</table>

<script type="text/javascript" src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"> </script>

    <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
        </script>
    
</body>
</html>