<?php
//  //$fname=$_POST["fname"];
//  include 'dbconnection.php';
// // session_start();
// // if($_SESSION['email']){
// //     echo "<h1>Welcome ".$_SESSION['email']."</h1>";
// // }else{
// //     header('location:login.php');

// // }
// if(isset($_POST['submit'])){
//   $fname=$_POST["fname"];
//  // $lname=$_POST['lname'];
//   $email=$_POST['email'];
//   $gender=$_POST['gender'];
//   $cnumber=$_POST['cnumber'];
//   $conn = new mysqli('localhost','root','','student');
// //  
//           $sql="INSERT INTO `register`(`fname`, `email`,  `gender`, `contactnumber`) VALUES ('$fname','$email','$gender','$cnumber')";
//           $results=mysqli_query($conn,$sql);
//           if($results){
//             // $_SESSION['status']='Inserted Successfully';
//              header("Location: welcome.php?msg=New record added successfully");
            
//           }else{
//             echo "not".mysqli_error($conn);
//           }
          

//       }
//  // }}

session_start();

include 'dbconnection.php';
if(isset($_POST['submit'])){
  $name=$_POST["name"];
 // $lname=$_POST['lname'];
  $email=$_POST['email'];
  $gender=$_POST['gender'];
  $cnumber=$_POST['cnumber'];
   $conn = new mysqli('localhost','root','','student');
//   $query="select * from register where email='$email' && pwd='$pwd'";
//   $result=mysqli_query($conn,$query);
//   if(mysqli_num_rows($result)>0){
// $error[]='user already exist';
//   }else{
//       if($pwd!=$cpwd){
//           $error[]='password not matched';
//       }else{
          $sql="INSERT INTO `insert`(`name`, `email`, `gender`, `cnumber`) VALUES ('$name','$email','$gender',' $cnumber')";
          //INSERT INTO `insert`(`name`, `email`, `gender`, `cnumber`) VALUES ('test','test@gmail.com','male','999999999');
          $result=mysqli_query($conn,$sql);
          if($result){
            // $_SESSION['status']='Inserted Successfully';
            // header("Location: Register.php");
            echo " inserted";
          }else{
            echo "not";
          }
          

      }
  //}}
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

<p><a href="index.php">Home</a></p>
<a href="logout.php">Logout</a><br><br>
<a href="Edit.php">Edit Profile</a>
<!-- <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:aqua";>
    CRUD Operations
</nav>
<div class="container">
    <div class="text-left mb-4">
             <h6>Add New User</h6>
            <p class="text-muted"></p>
    </div>

    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw;min-width:300px;">
        <div class="row">
            <div class="col">
                    <div class="form-group">
            <label for="exampleInputEmail1">Ename:</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter name">
            </div>

      <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
                        <div class="form-group">
                        <label>Gender:</label>&nbsp;
                        <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                    <label class="form-check-label" for="male">Male:</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                    <label class="form-check-label" for="female">Female</label>
                    </div>
                    </div>

                    <div class="form-group">
            <label for="pnumber">Contact Number:</label>
            <input type="number" class="form-control" id="cnumber" name="cnumber" aria-describedby="emailHelp" placeholder="Enter Number">
            </div>

            <button type="submit" class="btn btn-primary text-center" name="submit">Submit</button>
           // <a href="welcome.php" class="btn btn-danger">Cancel</a> -->

        </form>
    </div>


</div> 

</div>
</body>
</html>
<?php

