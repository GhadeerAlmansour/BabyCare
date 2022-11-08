<?php 

session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "babycare";

//get the value from the form:
    $reviws = $_POST['review'];
    $ParentRequestId = $_POST['ParentRequestId'];
    $BabySitterBsoffer_Id = $_POST['BabySitterBsoffer_Id'];
   
    
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $query_reviws = "INSERT INTO reviews (Parent_Request_Id, Baby_Sitter_offer_Id	, review)
  VALUES ('".$ParentRequestId."', '".$BabySitterBsoffer_Id."', '".$reviws."') ";
 // $query_reviws = "UPDATE reviews SET review ='$reviws',  WHERE parent_email= '$eamil' ";

  if (mysqli_query($conn, $query_reviws)) {
    echo "Record updated successfully";
    $_SESSION["success_message"] = "Update Successfuly";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
    
    header("Location: ../php/PreviousBookingPP.php"); //../html/ViewBabysitterProfile.php
  
  }
  
  header("Location: ../php/PreviousBookingPP.php"); //../html/ViewBabysitterProfile.php
  
  
  ?>