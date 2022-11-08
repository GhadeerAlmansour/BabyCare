

<?php 
session_start();

?>


<html>

<head>
  <title> Job Offer</title>
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


.cardOL .button{
	background-color:#ffe3e3;
	color: rgb(104, 104, 104);;
	text-decoration: none;
	font-weight: bold;
  border: 1px solid #e2c7c7;
	padding: 7px 15px;
	border-radius: 15px;
	transition: .4s; 
  position: relative;
  margin-right:290px  ;
  bottom: 220;


}


.cardOL{
	height: 300px;
	width: 550px;
	padding: 10px 15px;
	background: linear-gradient(#f5baba, #ffe3e3 );
	border-radius: 20px;
	margin: 50px;
	position: relative;
	overflow: hidden;
	text-align: left;
  box-shadow: 2px 5px 20px rgba(210, 197, 197, 0.4);
  margin-top: -10px;

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
input{
  background-color:#fbf6ff;
  color: rgb(104, 104, 104);
  text-decoration: none;
  border: 2px solid transparent;
  font-weight: bold; 
  border-radius: 30px;
  margin-bottom: 5px;
}
</style>
</head>

<body>
    <div class="header" >
      <image src="../images/webLogo.jpeg" class="logo">
    
      <ul>
        <li><a href="..\html\HomeBabySitter.html">Home</a></li>
        <li style="text-decoration:underline ;"><a href="..\html\jobOffers.html">Job offers</a></li>
        <li><a href="..\html\jobStatus.html">Job status</a></li>
        <li><a href="..\html\CuurentBabysitter.html">Current job</a></li>
        <li><a href="..\html\PreviousBabysitter.html">Previous job</a></li>
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

    
      <p style="background-color: white; color:  rgb(87, 86, 86); font-weight:bolder; font-size: 40px ; margin-left: 50px; font-family: 'Courier New', monospace; margin-top: -10px;">
       Jobs you received:    
       </p>
  
 <?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
Define("host","localhost");
Define("Username", "root");
Define("Password", "");
Define("db", "babycare");




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "babycare";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


if(!$conn) {
die();
} 
$babysitter = 'NorahX@outlook.com'; //change to session 

//date("Y-m-d")
$queryR = "SELECT * FROM `request` WHERE CAST(CURRENT_TIMESTAMP AS DATE) <= request.datee AND  Status = 'pending' "; 

$result = mysqli_query($conn,$queryR);

if($result){ 
   if($result -> num_rows > 0){
    while($rowR = mysqli_fetch_array($result)){ 
      //if(time() > $rowR['To_Time']){

    //echo date(' H:i:s ', time());
        
    $PEmail = $rowR['Email'];
    $queryP = " SELECT   First_Name , Last_Name , Email , imagee FROM `Parent` WHERE Email= '$PEmail'"; 
    $resultP = mysqli_query($conn , $queryP);
    
    while($rowP = mysqli_fetch_array($resultP)){  

    $Request_Id = $rowR['Request_Id']; 
    $ChildsNames = $rowR['ChildsNames'];
    $ChildsAges = $rowR['ChildsAges'];
    $Service = $rowR['Service'];
    $date = $rowR['datee'];
    $From_time=$rowR['From_Time'];
    $To_time=$rowR['To_Time'];
    $PFirst_Name = $rowP['First_Name'];
    $PLast_Name = $rowP['Last_Name'];
    $image= $rowP['imagee'];
 
    /* $startDate = "'".$row['startDate']."'";
    $endDate = "'".$row['endDate']."'";
    $startTime = "'".$row['From_Time']."'";
    $endTime = "'".$row['To_Time']."'";
     $timeConflict = "SELECT status , Request_Id , Email FROM 'offers' WHERE offers.Email = ".$_SESSION['Email']." AND  ( ( ($startDate BETWEEN startDate and endDate) AND (($startTime between startTime and endTime)OR($endTime between startTime and endTime)) ) OR ( ($endDate BETWEEN startDate and endDate) AND (($startTime between startTime and endTime)OR($endTime between startTime and endTime)) ) )";
  $timeConflictQuery = mysqli_query($conn, $timeConflict);
  if(mysqli_num_rows($timeConflictQuery) == 0){ //if no time conflicts with the request finally print it */






    print( '<div class="cardOL">');
    print('<a href ="babysitterProfile1.html"> <image src="../images/userIcon.png" class="imagei" alt="userIcon" style="border-radius:20px;" ></image></a>');
    print('<h5> Parent Name: ' .$PFirst_Name.' '.$PLast_Name.'</h5><br>');

  
    print( '<div class="praOL"> <p style="font-size: 17px"> <strong>Child Name/s: </strong> '.$ChildsNames.'<br> <strong>Childs Age/s: </strong> '.$ChildsAges.'<br>
    <strong>Type of service: </strong> '.$Service.'<br> <strong>Date: </strong> '.$date.' <strong>Time: </strong> '.$From_time.' - '.$To_time.'<br></p>'
       );
    
      print('<p style="font-size: 15px; font-family: Courier New"> <br><strong>send offer: </strong></p><br>');
      print( '<form class="" method="post" action="sendOffer.php">'.
       '<input  type="text"  placeholder="     Price in SR/hour" name="priceoffer" style="border: 1px; height:20px; color: #555; border-style:solid ">'.
      '<input type="hidden" value= '.$Request_Id .' name="sendOffer">'.
      '<button class="button"  type="submit"  style=" font-size: 15px; font-family: Courier New ;color:dark grey; margin-left: 250px; width: 150px;height:30px; margin-bottom:-10px; margin-top:190px;" >'."Send Offer".'</button>'.
     '</form>' );


    
    print('</div>');
    print('</div>'); 

    
    }
     //}// if time
      }//end while /////
    }//if (rows)
    
      else
      echo('no job requests');
    }
    print('</div>');

    
    $conn -> close();
    ?>




















<!--

    <div style= float:left;
    class="cardOL">
    <image src="../images/userIcon.png" class="imagei" alt="userIcon"></image>
        


      <h5>Reema Alx</h5>

        <div class="praOL" >
            <p style="font-size: 17px ; margin-top: 30px; ;"><strong>you received a job!</strong><br>
             <br>

              <strong>Name:</strong>Khalid <strong>Age:</strong>12<strong>| Name:</strong>Sara <strong>Age:</strong> 8
              <br><strong>Name:</strong>Noura <strong>Age:</strong> 3 <br><br><strong>Type of Service:</strong> Night time Babysitting <br>
                <strong>Time: </strong>Friday| 20/10/2023| 8:00pm - 10:30pm <br><br>
            </p>
            <p style="text-align: right;">
              <a class="button" href="#">send offer </a>
            
              
                
            </p>
            <p style="font-family: 'Courier New', Courier, monospace; width: 300px; margin-right: 10px; margin-bottom: 400px; margin-top: -30px; font-size: larger;"class="price">   
              <lable style="color:rgb(93, 91, 91)"><strong>Price:</strong>
              <input price="price:" type="text" size="17" maxlength="20" value="enter your price" 
              style="font-family:'Courier New', Courier, monospace;font-size: 13px; padding: 8px;" >
              
             <small><strong>per hr</strong></small>
              </p>
        </div>

    </div>
    
    <div style= float:rigth; 
    class="cardOL">
    <image src="../images/userIcon.png" class="imagei" alt="userIcon"></image>
      
      <h5>Saud Alx</h5>
        <div class="praOL" >
          <p style="font-size: 17px ; margin-top: 30px; ;"><strong>you received a job!</strong> <br> <br>
            <strong>Name:</strong>Yara <strong>Age:</strong>12<strong> | Name:</strong>Nouf <strong>Age:</strong> 9
            <br><strong>Name:</strong>Ahmad <strong>Age:</strong> 5 <br><br><strong>Type of Service:</strong> Night time Babysitting <br>
            <strong>Time: </strong>Monday | 22/10/2023 | 8:00pm - 10:30pm<br><br>
          </p>

            <p style="text-align: right;" >
              <a class="button" href="#">send offer </a>
            </p>

            
          
            <p style="font-family: 'Courier New', Courier, monospace; width: 300px; margin-left: 10px; margin-bottom: 400px; margin-top: -30px; font-size: larger;"class="price">   
              <lable style="color:rgb(93, 91, 91)"><strong>Price:</strong>
              <input price="price:" type="text" size="17" maxlength="20" value="enter your price" 
              style="font-family:'Courier New', Courier, monospace;font-size: 13px; padding: 8px; " >
                <small><strong>per hr</strong></small>
              </p>
        </div>
    </div>
  
  
  
  
      
    </div> -->   


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