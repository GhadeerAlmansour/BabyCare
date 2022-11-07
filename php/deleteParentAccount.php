<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "babycare";

//get the value from the form:
    $email = $_POST['deleted_email'];
    $confirmDelete = $_POST['confirm_Delete'];
    
if($confirmDelete == 'false'){
    header("Location: ../php/ViewParentProfile.php"); 
    

}else{



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

// sql to delete a record
$query_Babysitter = "DELETE FROM parent WHERE Email= '$email'";

if (mysqli_query($conn, $query_Babysitter)) {
  echo "Record deleted successfully";
  header("Location: ../php/home.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
  header("Location: ../php/ViewParentProfile.php");
}

}


?>