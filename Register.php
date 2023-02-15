
<?php

include 'dbconnection.php';
session_start();
  if(isset($_POST['submit'])){
    $fname=$_POST["fname"]; 
    $email=$_POST['email'];    
    $pwd=$_POST['pwd'];
    $encrypted_pwd = md5($pwd);
        $query="select * from `register` where email='$email' && pwd='$encrypted_pwd'";
    $result=mysqli_query($conn,$query);    
    if(mysqli_num_rows($result)>0){
    $error[]='user already exist';
    }        else{
            $insert="INSERT INTO `register`(`fname`, `email`, `pwd`) VALUES ('$fname','$email','$encrypted_pwd')";
            $results=mysqli_query($conn,$insert);           
            if($results){             
              
              echo "<div class='form'>
              <h5>You are registered successfully.</h5>
              ";
              header("Location: Register.php");
            }else{
              echo "not";
            }
            
          }
        
    }
  
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
   <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
if(isset($_SESSION['status']))
{?>
<div class="alert alert-warning alert-dismissible fade show w-75 ml-3" role="alert">
  <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php
   
    unset($_SESSION['status']);
}
        ?>

 
  <div class="container" mt-5>
    <h5><center>Register Form</center></h5>
    <?php 
    if(isset($error)){
      foreach($error as $error){
        echo '<span class="error-msg">'.$error.'</span>';
      }
    }
    ?>
 
<form name="myform" method="post" action="" onsubmit="return validateform()" >  
<!-- <div class="form-group">
Name: <input type="text" name="name" required><br/> 
</div> -->
<div class="form-group">
    <label for="firstname">User Name:</label>
    <input type="text" class="form-control" id="fname" name="fname" aria-describedby="emailHelp" placeholder="First Name" required>   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
   
  </div>
  <div class="form-group">
    <label for="Password">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required>
</div>
<!-- <div class="form-group">
    <label for="conformPassword">Conform Password:</label>
    <input type="password" class="form-control" id="cpwd" name="cpwd" placeholder="Password" required>
</div> -->
  <!-- </div>
<div class="form-group">
Password: <input type="password" name="password" required><br/>  
</div> -->
<div class="mt-5 text-center">
<input type="submit" name="submit" value="Register">  
<!-- <button type="submit" class="btn btn-primary"><a href="login.php">Login</button></a> -->
<p>already have an account?<a href="login.php">Login</a></p> 
</div>
</form> 
</div> 
<script src="validate.js">  
  
</script>  
</body>
</html>


