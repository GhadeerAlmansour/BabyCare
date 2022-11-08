<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "babycare";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$request = $_POST['request'];
//$confirmDelete = $_POST['confirm_Delete'];

//if($confirmDelete == 'false'){
//header("Location: ../php/viewJobRequest.php"); 


//}else{


$conn = mysqli_connect($servername, $username, $password, $dbname);

 
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


//get the value from the form:
 
  $query = "DELETE FROM request WHERE Request_Id = $request ";
 
  if (mysqli_query($conn, $query)) {
    echo "Request is deleted successfully";
    header("Location: viewjobreq.php");
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
    header("Location: viewJobReq.php");
  }
  
  //}
  
  
  ?>