<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body> 
    <div class="s">
        <h1 class="text-center">Show Record</h1>
    
    <table  class="table table-striped table-bordered table-responsive">
<tr class="warning">
    <th>Id</th>
    <th>Name</th>
    <th>City</th>
    <th>Email</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>

<?php

include("db.php");
require_once('vendor/autoload.php');


$data = $database->select("account", "*");
 foreach($data as $val){
     ?>
     <tr class="success">
    <td><?php echo $val['id'];?></td>
    <td><?php echo $val['name'];?></td>
    <td><?php echo $val['city'];?></td>
    <td><?php echo $val['email'];?></td>
    <td><a href="update.php?id=<?php echo $val['id'];?>" class="btn btn-success form-control">Update</a></td>
    <td><a href="delete.php?id=<?php echo $val['id'];?>" class="btn btn-danger form-control">Delete</a></td>
    </tr>
     <?php
 }

?>


</div>
    </table>
</body>
</html>


