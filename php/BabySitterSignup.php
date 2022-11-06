<?php
    session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
  include '../php/test.php';   
  require_once("Connection.php");

  $con = mysqli_connect('localhost','root','BabyCare');

  if(mysqli_connect_errno())
      die("Fail to connect to database :" . mysqli_connect_error());


 $First_Name = $_POST['first_Name'];
 $Last_Name = $_POST['last_Name'];
 $Email = $_POST['email'];
 $password = $_POST['Password'];
 $city = $_POST['City'];  
 $phone = $_POST['phone'];
 $ID = $_POST['ID'];
 $Age = $_POST['Age'];
 $gender = $_POST['gender'];
 $Bio = $_POST['Bio']; 
 if($_FILES['profile-img']['size'] > 0){
  $img = $_FILES['profile-img']['tmp_name'];
  $img = addslashes(file_get_contents($img));
}
else{
  $img = null;
 }



$validateEmail = preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $Email);
$specialChars = preg_match('@[^\w]@', $password);
if(!$validateEmail){
    $_SESSION['Sign_up_error'] = "Invalid email address.";
    header("Location: ../signup.php"); 
        exit;
}
if( !$specialChars && strlen($password) < 8) {
    $_SESSION['Sign_up_error'] = 'Password must be at leat 8 characters and contain at least one special character #,&,..';
    header("Location: ../signup.php"); 
    exit;
}
if(strlen($password) < 8){
    $_SESSION['Sign_up_error'] = 'Password should be at leat 8 characters!';
    header("Location: ../signup.php"); 
    exit;
}


if( !$specialChars ) {
    $_SESSION['Sign_up_error'] = 'Password must contain at least one special character #,&,..';
    header("Location: ../signup.php"); 
    exit;
}


//check if the email exits 
$query = "SELECT * FROM Parent WHERE Email = '$Email' ";
$BabySitter_result = mysqli_query($con,$query);

if (mysqli_num_rows($BabySitter_result)>0)
{
    $_SESSION['Sign_up_error'] = 'Email exists!';
    header("Location: ../signup.php"); 
    $con -> close();
    exit;
}


if($img == null)
$sql = "INSERT INTO 'Baby_Sitter' (First_Name ,	Last_Name	, Email	, Password	, ID_B	, Age	, Gender, 	City	, 	, Bio)	
values ('$First_Name', '$Last_Name', '$Email', '$password', '$ID' , '$Age' , '$gender' , '$city' , '$Bio')";else
else{
  $sql = "INSERT INTO 'Baby_Sitter' (First_Name ,	Last_Name	, Email	, Password	, ID_B	, Age	, Gender, 	City	, Image	, Bio)	
           values ('$First_Name', '$Last_Name', '$Email', '$password', '$ID' , '$Age' , '$gender' , '$city' , ' $img' , '$Bio')";
}

if (mysqli_query($con, $query)) {
    echo "New record created successfully !";
    $_SESSION['email'] = $Email ; //!sure if email
    header("Location: ../HomeBabySitter.html");
    $con -> close();
    exit;
} else {
    echo "Error: ".mysqli_error($con);
}


 
  
?>

