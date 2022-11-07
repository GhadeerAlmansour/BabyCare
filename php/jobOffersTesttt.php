

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
  
        
    $PEmail = $rowR['Email'];
    $queryP = " SELECT   First_Name , Last_Name , Email , imagee FROM `Parent` WHERE Email= '$PEmail'"; 
    $resultP = mysqli_query($conn , $queryP);
    
    while($rowP = mysqli_fetch_array($resultP)){ 
      echo "hiiiii";
    $Request_Id = $rowR['Request_Id']; 
    $ChildsNames = $rowR['ChildsNames'];
    $ChildsAges = $rowR['ChildsAges'];
    $Service = $rowR['Service'];
    $date = $rowR['datee'];
    $From_time=$rowR['From_time'];
    $To_time=$rowR['To_time'];
    $PFirst_Name = $rowP['First_Name'];
    $PLast_Name = $rowP['Last_Name'];
    $image= $rowP['imagee'];
 

    
    print( '<div class="cardOL">');
    print('<a href ="babysitterProfile1.html"> <image src="../images/userIcon.png" class="imagei" alt="userIcon" style="border-radius:20px;" ></image></a>');
    print('<h5> Parent Name: ' .$PFirst_Name.' '.$PLast_Name.'</h5><br>');

  
    print( '<div class="praOL"> <p style="font-size: 17px"> <strong>Child Name/s: </strong> '.$ChildsNames.'<br> <strong>Childs Age/s: </strong> '.$ChildsAges.'<br>
    <strong>Type of service: </strong> '.$Service.'<br> <strong>Date: </strong> '.$date.' <strong>Time: </strong> '.$From_time.' - ' .$To_Time.'<br></p>'
       );
       
    
       //<form method='post' action='PHP/sendOffer.php' onsubmit="return confirm('Are you sure you want to send this offer?');">
       //<? echo"
       //  <input type='number' min='50' max='999' placeholder='Price in SR/hour' name='priceoffer' style='border: 1px; color: #555; border-style:solid; width: 200px;'>
       //  <input type='hidden' value='".$row['ID']."' name='rowval'>
       //  <input type ='submit' value='Send Offer' class='btn btn-outline-secondary'>
       //</form> 

       print( '<form class="" method="post" action="sendOfferTesttt.php">'.
       '<input  type="number"  placeholder="    Price in SR/hour" name="priceoffer" style="border: 1px; height:20px; color: #555; border-style:solid ">'.
      '<input type="hidden" value= '.$row['Request_Id'] .' name="rowval">'.
      '<button class="button"  type="submit" value="Send Offer"  style=" font-size: 15px; font-family: Courier New ;color:dark grey; margin-left: 250px; width: 150px;height:30px; margin-bottom:-10px; margin-top:190px;" >'."Send Offer".'</button>'.
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
    
    $conn -> close();
    ?>