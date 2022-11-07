
<?php
/*
session_start();
 
Define("host","localhost");
Define("Username", "root");
Define("Password", "");
Define("db", "babycare");
         
$connection = mysqli_connect(host, Username, Password, db);
         
          if(!$connection)
          die();
                      if(isset($_POST['rowval']))
                       $id = $_POST['rowval']; //job request ID that i am sending offer to
                       if(isset($_POST['Price']))
                       $price = $_POST['Price'];
                       $babysitterEmail = $_SESSION['Email'];
                      //السطرين احتمال خطا 
                       $queryN = " SELECT   First_Name , FROM `baby_sitter` WHERE Email= '$babysitterEmail'"; 
                       $resultN = mysqli_query($connection , $queryN);
                      //
                       $sql = "INSERT INTO 'offers' (Price, Create_At , Request_Id, Email, , status , BabySitter_Name) VALUES ('$price', now() ,'$id', '$babysitterEmail' ,'pending' , '$resultN')";
                       
                       mysqli_query($connection, $sql);
                       if($sql)
                        print(1);
                       $connection -> close();
                       header("Location: ../jobOffers.php?success=1");
*/



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "babycare";

$Request_Id = $_POST['sendOffer'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

$query = "INSERT INTO 'offers' (Price, Create_At , Request_Id, Email, , status ) VALUES ('$price', now() ,'$id', '$babysitterEmail' ,'pending')";


if (mysqli_query($conn, $query)) {
    echo "offer sent successfully";
    header("Location: jobOffers.php?1");
  } else {
    echo "Error sending offer: " . mysqli_error($conn);
    header("Location: jobOffers.php?2");
  }








           ?>
