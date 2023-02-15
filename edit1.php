<?php
include "dbconnection.php";
session_start();
if(isset($_POST['submit'])){
    $name=$_POST["name"];
      $email=$_POST['email'];
    $gender=$_POST['gender'];
    $cnumber=$_POST['cnumber'];
   
     $conn = new mysqli('localhost','root','','student');
     $id=$_GET['id'];
  
            $sql="UPDATE `insert` SET `name`='$name',`email`='$email',`gender`='$gender',`cnumber`='$cnumber' WHERE id=$id";
            $result=mysqli_query($conn,$sql);
            if($result){
             
               header("Location: index.php?msg=updated successfully");
             
            }else{
              echo "not";
            }
            
  
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>CRUD Operations</title>
</head>
<body>
<div class="form">
<p>welcome to Dashboard</p>

<!-- <p><a href="index.php">Home</a></p>
<a href="logout.php">Logout</a><br><br>
<a href="Edit.php">Edit Profile</a> -->
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:aqua";>
    CRUD Operations
</nav>
<div class="container">
    <div class="text-left mb-4">
             <h6>Edit User</h6>
            <p class="text-muted"></p>
    </div>
<?php
include 'dbconnection.php';


$id=$_GET['id'];
$sql="SELECT * FROM `insert`
WHERE id=$id LIMIT 1";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

?>
    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw;min-width:300px;">
        <div class="row">
            <div class="col">
                    <div class="form-group">
            <label for="exampleInputEmail1">Ename:</label>
            <input type="text" class="form-control" id="name" name="name"  value="<?php echo $row['name']?>" aria-describedby="emailHelp">
            </div>

      <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"  value="<?php echo $row['email']?>">
      </div>
                        <div class="form-group">
                        <label>Gender:</label>&nbsp;
                        <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male"<?php echo($row['gender']=='male')? 
                    "checked":"";?>>
                    <label class="form-check-label" for="male">Male:</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female" <?php echo($row['gender']=='female')?"checked":"";?>>
                    <label class="form-check-label" for="female">Female</label>
                    </div>
                    </div>

                    <div class="form-group">
            <label for="pnumber">Contact Number:</label>
            <input type="number" class="form-control" id="cnumber" name="cnumber" aria-describedby="emailHelp"  value="<?php echo $row['cnumber']?>">
            </div>

            <button type="submit" class="btn btn-primary text-center" name="submit">Update</button>
            <a href="index.php" class="btn btn-danger">Cancel</a>

        </form>
    </div>


</div>

</div>
</body>
</html>
<?php

