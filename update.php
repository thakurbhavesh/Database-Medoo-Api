<?php

include('db.php');
if (isset($_POST['submit'])) {
$id=$_GET['id'];

$firstname=isset($_POST['name'])?$_POST['name']:'';
$lastname=isset($_POST['lname'])?$_POST['lname']:'';
$email=isset($_POST['email'])?$_POST['email']:'';


$data = $database->update("account", [
    "name" => $firstname,
    "city" => $lastname,
    "email" => $email,
], [
	"id" => $id
]);
    
}
$id=$_GET['id'];
$val = $database->select("account", [
	"name",
	"city",
	"email"
], [
	"id" => $id
]);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
      .s{
          width: 800px;
          
          margin-left: 80px;
      }
      h1{
          text-shadow: 2px 2px 1px cyan;
      }
      </style>
</head>
<body>
   <div class="s">
     
<h1 class="text-center">Update Record</h1>
   <form method="post" >
        <label for="">Name</label>
        <input type="text" name="name" id="" placeholder="enter your first name" class="form-control" value="<?php echo $val[0]['name'];?>">
        <br>
        <label for="">City</label>
        <input type="text" name="lname" id="" placeholder="enter your last name" class="form-control" value="<?php echo $val[0]['city'];?>">
        <br>
        <label for="">Email</label>
        <input type="email" name="email" id="" placeholder="enter your email" class="form-control" value="<?php echo $val[0]['email'];?>">
        <br>
        <input type="submit" value="Submit" name="submit" class="form-control btn btn-primary">
    </form>

   </div>
  
       <?php
       include("select.php");
       
       ?>
   
</body>
</html>