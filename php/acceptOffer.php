<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "babycare";

$BSoffer_Id = $_POST['acceptOffer'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

// sql to delete a record

$query = "UPDATE `offers` SET `status` = 'accepted' WHERE `BSoffer_Id` = $BSoffer_Id ;";


if (mysqli_query($conn, $query)) {
    echo "Record accepted successfully";
    header("Location: offerList.php?1");
  } else {
    echo "Error accepting record: " . mysqli_error($conn);
    header("Location: offerList.php?2");
  }
?>