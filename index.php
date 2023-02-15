<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>DashBoard</title>
</head>
<body>
   <a href="login.php">Login</a>
 <a href="Register.php">Register</a>
 <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:aqua";>
    CRUD Operations
</nav>
<div class="container">
    <?php
if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    '.$msg.'
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
    ?>
    <a href="add.php" class="btn btn-dark mb-3">Add New</a>
    <table class="table table-hover text-center">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">user name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Phone</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
include 'dbconnection.php'; 
$sql="SELECT * FROM `insert`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
    ?>
     <tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['name']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['gender']?></td>
      <td><?php echo $row['cnumber']?></td>
      <td><?php echo $row['creationdate']?></td>       
      <td>
       <a class="btn btn-primary" href="edit1.php?id=<?php echo $row['id']?>">Edit</a>
       <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']?>">Delete</a>
</td>
    </tr>
    <?php
}
    ?>
   
   
   
  </tbody>
</table>
</div>
</body>

</html>
<?php
 
 
 ?>