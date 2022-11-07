
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

                       $babysitterEmail =  "saraX@outlook.com"; //$_SESSION['Email'];
                      //السطرين احتمال خطا 
                      $query1 = "SELECT * FROM `Baby_Sitter` WHERE `Email` = '$babysitter' ;";  //to get the babysitter's Info
                      $result1 = mysqli_query($connection,$query1);
                      $row1 = mysqli_fetch_array($result1);
                      
                      $firstName = $row1['First_Name'];
                      $pending="pending";
                      //
                       $sql = "INSERT INTO `offers` ( Price , Create_At , Request_Id, Email,  status , BabySitter_Name) VALUES ('$price', now() ,'$id', '$babysitterEmail' , '$pending' , '$firstName')";
                       
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
$price = $_POST['priceoffer'];
$babysitterEmail =  "NorahX@outlook.com"; //$_SESSION['Email'];
$babysitterName = "Norah"; //$_SESSION['First_Name'];

 //$query1 = "SELECT * FROM `Baby_Sitter` WHERE `Email` = '$babysitter' ;";  //to get the babysitter's Info
 //$result1 = mysqli_query($connection,$query1);
 //$row1 = mysqli_fetch_array($result1);
 //$firstName = $row1['First_Name'];

 $pending="pending";

$query = "INSERT INTO 'offers' (Price, Create_At , Request_Id, Email,  status ,BabySitter_Name) VALUES ('$price', now() ,'$Request_Id ', '$babysitterEmail' , '$pending' , '$babysitterName')";


if (mysqli_query($conn, $query)) {
    echo "offer sent successfully";
    header("Location: jobOffers.php?1");
  } else {
    echo "Error sending offer: " . mysqli_error($conn);
    header("Location: jobOffers.php?2");
  }








           ?>
