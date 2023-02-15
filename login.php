<?php
 session_start();
 include 'dbconnection.php';
if(isset($_POST['submit'])){
   // $fname=$_POST["fname"];
   // $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
   // $cpwd=$_POST['cpwd'];
    // $conn = new mysqli('localhost','root','','student');
    
    $querys="select * from register where email='$email' && pwd='$pwd'";
    //echo $querys;
    $results=mysqli_query($conn,$querys);

    // if(mysqli_num_rows($result)>0){
      $row=mysqli_num_rows($results);
      if($row==1){
        $_SESSION['email'] = $email;
        //if(isset($_SESSION["email"]) && $_SESSION["pwd"] === true)
            // Redirect user to index.php
	    header("Location: welcome.php");
      
        exit; 

      }else{
        echo "<div class='form'>
      <h3>Username/password is incorrect.</h3>";
      
        }

    }
// }
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
    <title>Login Form</title>
    <style>
        .container{
            box-sizing:border-box;
            border:3px solid green;
            margin-left:330px;
            width:40%;
            border-radius:15px;
                   }
        h5{
            margin-top:25px;
        }
        .btn{
            margin-bottom:10px;
        }
        </style>
</head>
<body>
   
<form action="" method="POST">

    <div class="container mt-5">
    <h5><center>Login Form</center></h5>
      <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
   
  </div>
  <div class="form-group">
    <label for="Password">Password:</label>
    <input type="password" class="form-control" id="password" name="pwd" placeholder="Password">
  </div>
  
  <div class="text-center">
    <input type="submit" name="submit" value="Login Now">&nbsp;&nbsp;
    <p>don't have an account?<a href="Register.php">Register Now</a></p>
    <!-- <span class="psw">Forgot <a href="fpwd.php">password?</a></span> -->
    </div>
  </div>
</form>
</body>
</html>
<?php

