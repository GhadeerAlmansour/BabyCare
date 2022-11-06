
<?php

 session_start();

 include '../php/test.php'; 
 require_once("Connection.php");

  $con = mysqli_connect(host,Username,Password,db);

// If not connected to the DataBase
    if(mysqli_connect_errno($conn))
    die("Fail to connect to database :" . mysqli_connect_error());

    $email = $_POST['email_singIn'];
    $password = $_POST['password_signIn'];

    $query_parent = "SELECT * FROM Parent WHERE Email= '$email' AND password= '$password'";
    $query_Babysitter = "SELECT * FROM Baby_Sitter WHERE Email= '$email' AND password= '$password'";
  
    $result_parent = mysqli_query($conn,$query_parent);
    $result_Babysitter = mysqli_query($conn,$query_Babysitter);


     // Check if it is a parent    
if(mysqli_num_rows($result_parent) >0 ){
        $_SESSION['email_singIn'] = $Email;
   mysqli_close();
   header("Location: ../html/HomeParent.html"); //../html/HomeParent.html
    }


     // Check if it is a BabySitter    
else if (mysqli_num_rows($result_Babysitter) >0 ){
  $_SESSION['email_singIn'] = $Email;
$con -> close();
header("Location: ../html/HomeBabySitter.html");}

// If not Parent-BabySitter
else{
  $con -> close();
session_start();
  $_SESSION['error'] = "Wrong Email/Password";
header("Location: home.php");
}

?>

