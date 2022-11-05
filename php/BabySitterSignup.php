<?php
    session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
  include '../php/test.php';   
 echo 'bs php'

  $First_Name = $_POST['first_Name'];
  $Last_Name = $_POST['last_Name'];
  $Email = $_POST['email'];
  $password = $_POST['Password'];
  $city = $_POST['City'];  
  
  //$filename =$_File["image"]['tmp_name'] ;  
 //$filetmpname = $_FILES['image']['name']; 
 //move_uploaded_file($filetmpname, $folder.$filename);
 $folder = 'image/';

  //extra feilds for babysitter
$phone = $_POST['phone'];
$ID = $_POST['ID'];
$Age = $_POST['Age'];
$gender = $_POST['gender'];
$Bio = $_POST['Bio'];




  $sql = "INSERT INTO 'Baby_Sitter' (First_Name ,	Last_Name	, Email	, Password	, ID_B	, Age	, Gender, 	City	, Image	, Bio)	
           values ('$First_Name', '$Last_Name', '$Email', '$password', '$ID' , '$Age' , '$gender' , '$city' , ' $folder' , '$Bio')";
  $result = mysqli_query($conn, $sql);
 
 
  
?>

