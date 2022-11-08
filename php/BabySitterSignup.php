<?php
    session_start();
//if($_SERVER["REQUEST_METHOD"] == "POST") {
  include '../php/test.php';   
  require_once("Connection.php");

  $con = mysqli_connect('localhost','root','','BabyCare');

  if(mysqli_connect_errno())
      die("Fail to connect to database :" . mysqli_connect_error());


 $First_Name = $_POST['First_Name'];
 $Last_Name = $_POST['Last_Name'];
 $Email = $_POST['Email'];
 $password = $_POST['password'];
 $city = $_POST['city'];  
 $phone = $_POST['phone'];
 $ID = $_POST['ID'];
 $Age = $_POST['Age'];
 $gender = $_POST['gender'];
 $Bio = $_POST['Bio']; 

 $profilePhoto = $_FILES['img']['name'];
                                           
 if(empty($profilePhoto))
 $profilePhoto = '../images/userIcon.png';
 else{
   $profilePhoto = '../images/'.$profilePhoto;
 } 



$validateEmail = preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $Email);
$specialChars = preg_match('@[^\w]@', $password);
if(!$validateEmail){
    $_SESSION['Sign_up_error'] = "Invalid email address.";
    header("Location: home.php?1");
    exit;
}
if( !$specialChars && strlen($password) < 8) {
    $_SESSION['Sign_up_error'] = 'Password must be at leat 8 characters and contain at least one special character #,&,..';
    header("Location: home.php?2");
    exit;
}
if(strlen($password) < 8){
    $_SESSION['Sign_up_error'] = 'Password should be at leat 8 characters!';
    header("Location: home.php?3");
    exit;
}


if( !$specialChars ) {
    $_SESSION['Sign_up_error'] = 'Password must contain at least one special character #,&,..';
    header("Location: home.php?1");
    exit;
}


//check if the email exits 
$query = "SELECT * FROM  baby_sitter WHERE Email = '$Email' ";
$BabySitter_result = mysqli_query($con,$query);

if (mysqli_num_rows($BabySitter_result)>0)
{
    $_SESSION['Sign_up_error'] = 'Email exists!';
    header("Location: home.php?4");
    $con -> close();
    exit;
}

/*
if($img == null)
$sql = "INSERT INTO 'Baby_Sitter' (First_Name ,	Last_Name	, Email	, Passwordd	, ID_B	, Age	, Gender, 	City, Bio , phone)	
values ('$First_Name', '$Last_Name', '$Email', '$password', '$ID' , '$Age' , '$gender' , '$city' , '$Bio' , $phone)";

else */
  $query = "INSERT INTO `baby_sitter` ( First_Name ,	Last_Name	, Email	, Passwordd	, ID_B	, Age	, Gender, 	City	, imagee	, Bio , phone_number) 	
           values ('$First_Name', '$Last_Name', '$Email', '$password', '$ID' , '$Age' , '$gender' , '$city' , ' $profilePhoto' , '$Bio' , '$phone')";


if (mysqli_query($con, $query)) {
    echo "New record created successfully !";
    $_SESSION['Email'] = $Email ; //!sure if email
    header("Location: ../php/HomeBabySitter.php");
    $con -> close();
    exit;
} else {
    echo "Error: ".mysqli_error($con);
}

/*
 
           
 
  $con -> close();*/

?>

