<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BabyCare";
echo"HELLLLLO";

$BSoffer_Id = $_POST['rejectedOffer'];



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

// sql to delete a record

$query = "DELETE FROM offers WHERE BSoffer_Id = $BSoffer_Id ";


if (mysqli_query($conn, $query)) {
    echo "Record deleted successfully";
    header("Location: offerList.php?1");
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
    header("Location: offerList.php?2");
  }
?>