<?php


//if($_SERVER["REQUEST_METHOD"] == "post") {
  /*include '../php/test.php';   
 echo 'bs php'; */

 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "babycare";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


 $parent = "Saud_Alx@gmail.com"; //change to session
 //$query2 = "SELECT * FROM `request` WHERE Email LIKE '$parent' AND Status LIKE 'pending'; ";
 //$result2 = mysqli_query ($conn, $query2);


 //if($result2)
 //if($result2 -> num_rows > 0){


 //while($row = mysqli_fetch_array($result2)) {// for each request that was sent from THIS parent
 //$Request_Id = $row['Request_Id'];
 




//index 

$parent = "Saud_Alx@gmail.com"; //change to session

$query1 = "SELECT * FROM `Parent` WHERE `Email` = ' $parent' ;";  

$result1 = mysqli_query($conn,$query1);
if($row1 = mysqli_fetch_array($result1)){
$firstName = $row1['First_Name'];
$lastName = $row1['Last_Name'];
 }
require("./test.php");


  $ChildsNames = $_POST['name'];
  $ChildsAges = $_POST['age'];
  $Service = $_POST['CareType'];
  $datee = $_POST['Date'];
  $From_Time = $_POST['time1'];  
  $To_Time = $_POST['time2'];  
  $Status = "pending"; 
  //session_start();
  


$sql = "INSERT INTO `request`( `Email`, `ChildsNames`, `ChildsAges`, `Service`, `datee`, `From_Time`, `To_Time`, `Status`, `Parent_Name`) 
      VALUES (  `$parent` , `$ChildsNames`,  $ChildsAges , `$Service`, `$datee`, `$From_Time` , ` $To_Time` , 'pending' , 'saud' )";

$sql = "INSERT INTO `request`( `Email`, `ChildsNames`, `ChildsAges`, `Service`, `datee`, `From_Time`, `To_Time`, `Status`, `Parent_Name`)  
VALUES (  'saud' , 'khalid',  `12` , 'day', '2022-12-12', '05:00:00' , '06:00:00'  , 'pending' , 'saud' );";

$result = mysqli_query($conn,$sql); 

if ($conn->query ($sql) === TRUE) {
    header ("Location: postJobReq.php");        
    }
    
    else{
       // header ("Location: postJobReq.php?Error"); 
      "Error:" . $sql . "<br>" . $conn->error;
    }

 //}
//}


//

//
$conn->close();


?>
