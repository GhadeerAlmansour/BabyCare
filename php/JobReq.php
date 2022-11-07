<?php


//if($_SERVER["REQUEST_METHOD"] == "post") {
  include '../php/test.php';   
 echo 'bs php'; 

 
 $parent = "Saud_Ax@gmail. com"; //change to session
 $query2 = "SELECT * FROM `request` WHERE Email LIKE '$parent' AND Status LIKE 'pending'; ";
 $result2 = mysqli_query ($conn, $query2);


 if($result2)
 if($result2 -> num_rows > 0){


 while($row = mysqli_fetch_array($result2)) {// for each request that was sent from THIS parent
 $Request_Id = $row['Request_Id'];
 




//index 
require("./test.php");


  $Parent_Name = $_POST['$result2'];
  $ChildsNames = $_POST['name'];
  $ChildsAges = $_POST['age'];
  $Service = $_POST['CareType'];
  $datee = $_POST['Date'];
  $From_Time = $_POST['time1'];  
  $To_Time = $_POST['time2'];  
  $Status = $_POST['status']; 

  session_start();
  


$sql = "INSERT INTO `request`( `Request_Id`, `ChildsNames`, `ChildsAges`, `Service`, `datee`, `From_Time`, `To_Time`, `Status`, `Parent_Name`) 
      VALUES (`$Request_Id` , `$ChildsNames`,  `$ChildsAges` , `$Service`, `$datee`, `$From_Time` , ` $To_Time` , `$Status` , '$Parent_Name' )";

if ($conn->query ($sql) === TRUE) {
  header ("Location: ./Offers.php");        
  }
  
  else{
    "Error:" . $sql . "<br>" . $conn->error;
  }
  //
  $conn->close();
  
 }
}



?>
