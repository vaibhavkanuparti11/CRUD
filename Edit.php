<?php
session_start();
include 'dbconnection.php';
$conn = new mysqli('localhost','root','','student');
$name=$_SESSION['fname'];
$query="select * from register where fname='$name'";
$result=mysqli_query($conn,$query);
$info=mysqli_fetch_assoc($result);

// if(isset($_POST['submit'])){
//     $fname=$_POST["fname"];
//    // $lname=$_POST['lname'];
//     $email=$_POST['email'];
//     $pwd=$_POST['pwd'];
//     $cpwd=$_POST['cpwd'];
//      $conn = new mysqli('localhost','root','','student');
//     $query="UPDATE register SET fname = '$fname',
//     email = '$email' WHERE id = '$id'";;
//     $result=mysqli_query($conn,$query);
//     ?>
<!-- //     <script type="text/javascript">
//             alert("Update Successfully.");
//             window.location = "login.php";
//         </script> -->
        <?php
//     if(mysqli_num_rows($result)>0){
//   $error[]='user already exist';
//     }else{
//         if($pwd!=$cpwd){
//             $error[]='password not matched';
//         }else{
//             $insert="INSERT INTO `register`(`fname`, `email`, `pwd`, `cpwd`) VALUES ('$fname','$email','$pwd','$cpwd')";
//             $results=mysqli_query($conn,$insert);
//             if($results){
//               // $_SESSION['status']='Inserted Successfully';
//               // header("Location: Register.php");
//               echo "<div class='form'>
//               <h5>You are registered successfully.</h5>
//               ";
//             }else{
//               echo "not";
//             }
            
  
       // }
   // }}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="form">
<p>welcome profile</p>
<form name="myform" method="post">  
<!-- <div class="form-group">
Name: <input type="text" name="name" required><br/> 
</div> -->
<div class="form-group">
    <label for="firstname"> New User Name:</label>
    <input type="text" class="form-control" id="fname" name="fname" value="<?php echo "{$info['fname']}"?>" aria-describedby="emailHelp" placeholder="First Name" required>   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> New Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
   
  </div>


  <!-- <div class="form-group">
    <label for="Password"> New Password:</label>
    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required>
</div>
<div class="form-group">
    <label for="conformPassword"> New Conform Password:</label>
    <input type="password" class="form-control" id="cpwd" name="cpwd" placeholder="Password" required>
</div> -->



  <!-- </div>
<div class="form-group">
Password: <input type="password" name="password" required><br/>  
</div> -->
<div class="mt-5 text-center">
<input type="submit" name="submit" value="Save">  
<!-- <button type="submit" class="btn btn-primary"><a href="login.php">Login</button></a> -->
<p><a href="login.php">Login Again</a></p> 
</div>


</div>
</body>
</html>
<?php

