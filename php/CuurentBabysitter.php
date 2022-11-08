<?php 



session_start();
$email_singIn = $_SESSION['email_singIn'];
//$email_singIn = "NorahX@outlook.com";


//------------------------------------------------------
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "babycare";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  

  $query_Babysitter = "SELECT * FROM 
  offers INNER JOIN baby_sitter ON offers.Email = baby_sitter.Email
  INNER JOIN request ON offers.Request_Id = request.Request_Id
  AND offers.Email= '$email_singIn' AND (offers.status = 'Accepted' OR offers.status = 'Pending')";

  $result_Babysitter = mysqli_query($conn,$query_Babysitter);

  $cards = "";

  if (mysqli_num_rows($result_Babysitter) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result_Babysitter)) {
     // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        $Price = $row["Price"];
        $Request_Id = $row["Request_Id"];
        $Bsoffer_Id = $row["BSoffer_Id"];
        $Email = $row["Email"];
        $Create_Time = $row["Create_Time"];
        $status = $row["status"];

        $firstName = $row["First_Name"];
        $LastName = $row["Last_Name"];
        $ChildsAges= $row["ChildsAges"];
$ChildsNames = $row["ChildsNames"];

        $Parent_name = $row["Parent_Name"];
        $Service = $row["Service"];

        $error_message="";
        
        $cards .=  "
        <div class='cardOL1' style='width:1000px;' >
        <image src='../images/userIcon.png' class='imagei' alt='userIcon'></image>
          
         
         <h5>".$Parent_name."</h5>
           <p class='price'>
         
         
             <strong style='color: green ;'>".$status."<br></strong> 
             
             <strong>".$Price." SR</strong> <i class='fa fa-money' style='font: size 22px;'></i> <small> Per Hour</small>
          
             <div class='praOL'>
                 <p><strong>details:</strong><br>
                    <strong>Name:</strong>".$ChildsNames."<strong>  Age: </strong>". $ChildsAges ." <br>
                    <strong>Type of Service:</strong> ".$Service." <br>
                    <strong>Time: </strong> ". date('g:i A', strtotime($Create_Time)) ."
                 </p>
            </div>
             </p>
           </div>
        ";
    }
  } else {
    $Price = "";
    $Request_Id = "";
    $Bsoffer_Id = "";
    $Email = "";
    $Create_Time = "";
    $status = "";
    $ChildsNames="";
    $firstName = "";
    $LastName = "";
    $ChildsAges= "";


        $error_message = "system go wrong";
   // echo "0 results";
  }

?>



<html>

<head>
  <title>Current Jobs</title>
  <link rel = "stylesheet" href ="../css/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>

body{

background-color: rgb(255, 247, 237);
}

.backicon{
margin-left : 30px;
  width:40px;
  cursor:pointer;
  border-radius: 10px; 
  transition: 0.5s ease;
  cursor: pointer;
}


.ToTop{
margin-left : 0;
  width:30px;
  cursor:pointer;
  border-radius: 10px; 
  transition: 0.5s ease;
  cursor: pointer;
}
 
 div1 {
    display: none;
    
}
    
a1:hover + div1 {
    display: block;
    position:fixed;
    z-index: 999999999999999999;
    text-align: left;
  background-color:ffe3e3;
	color: rgb(104, 104, 104);;
	text-decoration: none;
	border: 1px solid  rgb(104, 104, 104);
	padding: 5px 10px;
	border-radius: 15px;
  margin-left: 650px;
  transition: .4s; 
  z-index: 999999999999999999999999999999999999999999999999999;

}
</style>
</head>

<body>
    <div class="header" >
      <image src="../images/webLogo.jpeg" class="logo">
       <ul>
        <li><a href="..\php\HomeBabySitter.php">Home</a></li>
        <li><a href="..\php\jobOffers.php">Job offers</a></li>
        <li><a href="..\html\jobStatus.html">Job status</a></li>
        <li style="text-decoration:underline ;"><a href="..\php\CuurentBabysitter.php">Current job</a></li>
        <li><a href="..\php\PreviousBabysitter.php">Previous job</a></li>
       </ul>
   

        <div class="dropdown">
            <image src="../images/userIcon.png" class="image" alt="User Icon">
            <ul>
            
                <li><a href="ViewBabysitterProfile.php">View Profile</a></li><br>
                <li><a href="#"><br></a></li>
                <li><a href="signout.php">Sign-Out</a></li>
            
            </ul>
            
            </div>
   </div> 

   <a href="#" class="back">
    <image src="..\images\back.png" class="back" alt="back" style="width:40px ; margin-left: 30px; margin-top: 30px;" onclick="history.go(-1);"></image>
  </a>   

    <div class="container2"> 

      <p style="background-color: white; color:  rgb(87, 86, 86); 
      font-weight:bolder; 
      font-size: 40px ;
       margin-left: 50px; 
       font-family: 'Courier New', monospace; margin-top: -10px;">
       My Current jobs :   
       </p>


<?php
echo $cards;
?>
      <!-- <div class="cardOL1">
       <image src="../images/userIcon.png" class="imagei" alt="userIcon"></image>
         
        
        <h5>Reema Alx</h5>
          <p class="price">
        
        
            <strong style="color: green ;">ACCEPTED <br></strong> 
            
            <strong>450SR</strong> <i class="fa fa-money" style="font: size 22px;"></i> <small> per hr</small>
         
            <div class="praOL">
                <p><strong>details:</strong><br>
                   <strong>Name:</strong>deema <strong>Age:</strong>7 <br>
                   <strong>Type of Service:</strong> Morning time Babysitting <br>
                   <strong>Time: </strong>Sunday | 7/11/2022 | 8:00pm - 10:30pm 
                </p>
           </div>

     
        
  
          
          </p>
          
         
         
         
      </div> -->


      
      
          
    </div>

    </div>
   
    <footer>
      <p>Copyright &copy; 2022 BabyCare </p>
      <p><a href="mailto:BabyCareInfo.sa@gmail.com" style="font-size:10px ; color:rgb(255, 255, 255); text-decoration:none;">Contact Us</a></p>
         <!------------  BACK TO TOP   ----------->
         <a href="#" class="to-top">
          <image src="..\images\to top.png" class="ToTop" alt="toTop"></image>
        </a>
    </footer>    
  
  </body>




</html>