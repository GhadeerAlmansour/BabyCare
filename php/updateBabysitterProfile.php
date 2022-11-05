<?php 




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "381 project";

//get the value from the form:
    $first_Name = $_POST['firstName'];
    $last_Name = $_POST['lastName'];
    $user_password = $_POST['password'];
    $eamil = $_POST["email"];
    $id = $_POST['id'];
    $age = $_POST['age'];
    $phone_Number = $_POST['phoneNumber'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $bio = $_POST['Bio'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  

$query_Babysitter = "UPDATE baby_sitter SET First_Name='$first_Name', Last_Name='$last_Name', Password='$user_password',
 ID_B='$id' , Age='$age' , phone_Number='$phone_Number' , Gender='$gender', City='$city' , Bio='$bio'
 WHERE Email= '$eamil' ";

if (mysqli_query($conn, $query_Babysitter)) {
  
  $_SESSION["success_message"] = "Update Successfuly";
} else {
  echo "Error updating record: " . mysqli_error($conn);
  
  header("Location: ../php/ViewBabysitterProfile.php"); //../html/ViewBabysitterProfile.php

}

header("Location: ../php/ViewBabysitterProfile.php"); //../html/ViewBabysitterProfile.php


?>