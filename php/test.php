
<?php
/*

$First_Name = $_POST['First_Name_P'];
 	$Last_Name = $_POST['Last_Name_P'];
 	$Email = $_POST['Email_P'];
 	$password = $_POST['Password_P'];
 	$city = $_POST['City_P'];  
 	$location = $_POST['Location_P'];  
 	$image = $_POST['Image_P'];  
*/

$conn=  mysqli_connect('192.168.64.2','root','','BabyCare');
if($conn) {
	echo "success"; 
} 
else {
	die("Fail to connect to database". mysqli_connect_error()); 
} 



/*
 	if($conn->connect_error){
 		echo "$conn->connect_error";
 		die("Connection Failed : ". $conn->connect_error);
 	} else {
 		$stmt = $conn->prepare("INSERT INTO Parent(First_Name_P, Last_Name_P, Email_P, Password_P, City_P , Location_P,Image_P) values(?, ?, ?, ?, ?, ?,?)");
 		$stmt->bind_param("sssssss", $First_Name, $Last_Name, $Email, $password, $city, $location ,$image);
 		$execval = $stmt->execute();
 		echo $execval;
 		echo "Registration successfully...";
 		$stmt->close();
 		$conn->close();
 	}
*/
?>