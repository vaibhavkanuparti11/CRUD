


<?php
 //session_start();

// if(isset($_POST['submit'])){
//     $fname=$_POST["fname"];
//    // $lname=$_POST['lname'];
//     $email=$_POST['email'];
//     $pwd=$_POST['pwd'];
//     $cpwd=$_POST['cpwd'];
    $conn = new mysqli('localhost','root','','student');
//     $query="select * from register where email='$email' && pwd='$pwd'";
//     $result=mysqli_query($conn,$query);
//     if(mysqli_num_rows($result)>0){
// $error[]='user already exist';
//     }else{
//         if($pwd!=$cpwd){
//             $error[]='password not matched';
//         }else{
//             $insert="INSERT INTO `register`(`fname`, `email`, `pwd`, `cpwd`) VALUES ('$fname','$email','$pwd','$cpwd')";
//             mysqli_query($conn,$insert);
//             header("Location: login.php");

//         }
//     }
        //      }






//    $query="INSERT INTO register VALUES ('$fname','$email','$pwd','$cpwd')";
//     $result=mysqli_query($conn,$query);
   
//     if($result){
//         // $_SESSION['status']='Inserted Successfully';
//         // header("Location: Register.php");
//         echo "inserted";
//     }else{
       
//        echo "Not Inserted";
       
//     }


// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }
//   echo "Connected successfully";
//   












    
//     //register(`fname`, `lname`, `email`, `pwd`, `cpwd`)
    
//     if($result){
//         $_SESSION['status']="inserted successfully";
       
        
//     }}
//     //else
//     // {
//     //     $sql="select * from register where email='$email'";

//     //     $res=mysqli_query($conn,$sql);
//     //     $user = mysqli_fetch_assoc($res);
       
          
          
//     //     //   if($user['email']===$email)
//     //     //   {
//     //           $_SESSION['status']="email already exists";
//     //          // array_push($errors, "email already exists");
//     //           header("Location: Register.php");
//     //      // }
        
//     // }
//     // if ($conn->connect_error) {
//     //     die("Connection failed: " . $conn->connect_error);
//     //   }
//     //   echo "Connected successfully";
// //}




// $res=mysqli_query($conn,$sql);

// $row = mysqli_fetch_assoc($res);

//  if($email==$row['$email']){
//  {
//       $error[] ='Email alredy Exists.';
//     } 
// }



// 		// if($username==isset($row['username']))
// 		// {
// 		// 	echo "username  already exists";
// 		// }
	
// // else{
	
// // //do your insert code here or do something (run your code)
// // }



// // $sql="select * from register where email='$email'";
// // $res=mysqli_query($conn,$sql);
// // if (mysqli_num_rows($res) > 0) {
// // $row = mysqli_fetch_assoc($res);

// // // if($username==$row['username'])
// // // {
// // //      $error[] ='Username alredy Exists.';
// // //     } 
// //  if($email==$row['email'])
// //  {
// //       $error[] ='Email alredy Exists.';
// //     } 
// // }

?>