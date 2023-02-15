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
   
<form>

    <div class="container mt-5">
    <h5><center>Login Form</center></h5>
      <div class="form-group">
    <label for="exampleInputEmail1">New Password:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   
  </div>
  <div class="form-group">
    <label for="Password">Confirm New Password:</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
  </div>
  
  <div class="text-center">
    <button type="submit" class="btn btn-primary">Reset Password</button>&nbsp;&nbsp;
       </div>
  </div>
</form>
</body>
</html>
<?php

