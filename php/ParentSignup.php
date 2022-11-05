<?php
    session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
  include '../php/test.php';   
  echo 'p php';

  $First_Name = $_POST['First_Name'];
  $Last_Name = $_POST['Last_Name'];
  $Email = $_POST['Email'];
  $password = $_POST['password'];
  $city = $_POST['city'];  
  $Neighborhood = $_POST['Neighborhood'];  
  $street = $_POST['street'];  

  //$filename =$_File["image"]['tmp_name'] ;  
 //$filetmpname = $_FILES['image']['name']; 
 //move_uploaded_file($filetmpname, $folder.$filename);
 $folder = 'image/';



  

  $sql = "INSERT INTO `Parent` (First_Name, Last_Name, Email, password, city , Neighborhood ,street ) values('$First_Name', '$Last_Name', '$Email', '$password', '$city', '$Neighborhood' ,'$street')";
  $result = mysqli_query($conn, $sql);


?>