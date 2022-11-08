<script>



</script>

<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "babycare";
$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$request = $_POST['request'];
$ChildsNames = $_POST['name'];
$ChildsAges = $_POST['age'];
$Service = $_POST['CareType'];
$datee = $_POST['datee'];
$From_Time = $_POST['time1'];  
$To_Time = $_POST['time2'];  
$

//get the value from the form:
 
  


  $query = "UPDATE request SET ChildsNames = '$ChildsNames', ChildsAges = '$ChildsAges', Service  = '$Service ', datee = '$datee' , From_Time ='$From_Time' , To_Time= '$To_Time' WHERE Request_Id = $request ";
 

      if (mysqli_query($conn, $query_request)) {
       echo "Request is updated successfully";
         $_SESSION["success_message"] = "Update Successfuly";
       } else {
         echo "Error updating record: " . mysqli_error($conn);
         
         header("Location: /viewJobReq.php "); 
       
       }
       
       header("Location: /viewJobReq.php "); 
       
       
       ?>