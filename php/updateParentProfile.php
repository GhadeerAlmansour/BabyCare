<?php 

session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "babycare";

//get the value from the form:
    $first_Name = $_POST['firstName'];
    $last_Name = $_POST['lastName'];
    $user_password = $_POST['password'];
    $eamil = $_POST["email"];
    $city = $_POST['city'];
    $Neighborhood = $_POST['Neighborhood'];
    $street = $_POST['street'];
    
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  if($_FILES['image']['tmp_name'] != "" ){

    $profilePhoto = mysqli_real_escape_string($conn, (file_get_contents($_FILES['image']['tmp_name'])));

$query_parent = "UPDATE parent SET First_Name='$first_Name', Last_Name='$last_Name', passwordd='$user_password',
 city='$city' , Neighborhood='$Neighborhood' , street='$street',imagee='$profilePhoto' WHERE Email= '$eamil' ";
}else{

  $query_parent = "UPDATE parent SET First_Name='$first_Name', Last_Name='$last_Name', passwordd='$user_password',
  city='$city' , Neighborhood='$Neighborhood' , street='$street' WHERE Email= '$eamil' ";
}



if (mysqli_query($conn, $query_parent)) {
  
  $_SESSION["success_message"] = "Update Successfuly";
} else {
  echo "Error updating record: " . mysqli_error($conn);
  
  header("Location: ../php/ViewParentProfile.php"); 

}

header("Location: ../php/ViewParentProfile.php"); 


?>