<?php


session_start();

include '../php/test.php'; 





?>



<html>

<head>
  <title> Offer List</title>
  <link rel = "stylesheet" href ="../css/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
 
 div1 {
    display: none;
    
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

#demo , #demo1 {

  font-size: 20px;
  
}
.imagei {
  margin-top : 10px;
  margin-left: 10px;
  width: 60px;
  cursor:pointer;
  border-radius: 10px;
  z-index: -5;
}
.imagei:hover {
  margin-left: 10px;
  width:60px;
  cursor:pointer;
  border-radius: 50px;
  box-shadow: ;
}
</style>


 <script>/*
var start = new Date().getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    var end = new Date().getTime();
    var distance = end - start;
  
    // Time calculations for days, hours, minutes and seconds
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000)-1;
    
    var Seconds = 59;
    Seconds = Seconds - seconds;
    if (Seconds < 10) { Seconds = "0"+Seconds; }
    var Minutes = 59;
    Minutes = Minutes - minutes;
    if (Minutes < 10) { Minutes = "0"+Minutes; }
    var Hours = 0;
  
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = "0" + hours + ":"
    + Minutes + ":" + Seconds;
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "00:00:00";
    }
}, 1000);

////////////////////
var start = new Date().getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    var end = new Date().getTime();
    var distance = end - start;
  
    // Time calculations for days, hours, minutes and seconds
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000)-1;
    
    var Seconds = 59;
    Seconds = Seconds - seconds;
    if (Seconds < 10) { Seconds = "0"+Seconds; }
    var Minutes = 59;
    Minutes = Minutes - minutes;
    if (Minutes < 10) { Minutes = "0"+Minutes; }
    var Hours = 0;
  
    // Output the result in an element with id="demo"
    document.getElementById("demo1").innerHTML = "0" + hours + ":"
    + Minutes + ":" + Seconds;
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo1").innerHTML = "00:00:00";
    }
}, 1000);*/
 </script>


 
</head>

<body>
    <div class="header" >
      <image src="../images/webLogo.jpeg" class="logo">
        <ul>
          <li ><a href="../php/HomeParent.php">Home</a></li>
          <li><a href="../php/viewjobReq.php">Job Request</a></li>
          <li><a href="../php/postJobReq.php">New Request</a></li>
          <li style="text-decoration:underline ;" ><a href="../php/offerList.php">Offer List</a></li>
          <li><a href="../php/PreviousBookingPP.php">Previous Booking</a></li>
          <li><a href="../php/CurrentBookingPP.php">Current Booking</a></li>
      </ul>

       <div class="dropdown">
        <image src="../images/userIcon.png" class="image" alt="User Icon">
        <ul>
        
            <li><a href="ViewParentProfile.php">View Profile</a></li><br>
            <li><a href="#"><br></a></li>
            <li><a href="signout.php">Sign-Out</a></li>
        
        </ul>
        
        </div>   </div> 
        <a href="#" class="back">
          <image src="..\images\back.png" class="back" alt="back" style="width:40px ; margin-left: 30px; margin-top: 30px;" onclick="history.go(-1);"></image>
        </a>
    <div class="container2"> 

      <p style="background-color: white; color:  rgb(87, 86, 86); font-weight:bolder; font-size: 40px ; margin-left: 50px; font-family: 'Courier New', monospace; margin-top: -10px;">
       Offers List:    
       </p>
<!--
    <div class="cardOL">
      <a href ="babysitterProfile1.html"> <image src="../images/userIcon.png" class="imagei" alt="userIcon" style="border-radius:20px;" ></image></a>
        

      
      <h5>Sara Alx</h5>
        <p class="price">
          <strong>500SR</strong> <i class="fa fa-money" style="font-size:24px"></i> <small> per hr</small>
        </p>
        
       
        <div class="praOL" >
            <p style="font-size: 17px">
              i am available 8:00 - 10:00<br> looking forward to take care of your kids!
              <p style="font-size: 15px">the over is valid for 1 hour.</p>
              <p id="demo"></p>

            
    
            </p>

            <p style="text-align: right;">
                <a style="color: #6bbd5c;" class="button" href="#">accept </a>
                <a style="color: #ff5b5b;" class="button" href="#">reject</a>
            </p>
        </div>

    </div>


    <div class="cardOL">
      <a href ="babysitterProfile2.html"> <image src="../images/userIcon.png" class="imagei" alt="userIcon" style="border-radius:20px;"></image></a>
       
      
      <h5>Norah Alx</h5>
        <p class="price">
          <strong>450SR</strong> <i class="fa fa-money" style="font-size:24px"></i> <small> per hr</small>
        </p>
        
       
        <div class="praOL">
            <p style="font-size: 17px">
              i am available 8:00 - 10:30<br>looking forward to take care of your kids!
              <p style="font-size: 15px">the offer is valid for 1 hour.</p>
              <p id="demo1"></p>

            </p>

            <p style="text-align: right;">
                <a style="color: #6bbd5c;" class="button" href="#">accept </a>
                <a style="color: #ff5b5b;"class="button" href="#">reject</a>
            </p>
        </div>
    </div>-->
  
  


<?php

include '../php/test.php'; 
require_once("Connection.php");

 $con = mysqli_connect(host,Username,Password,db);

if(!$con)
   die();


      $offset = 2 * 60 * 60; // saudi time
   $time_now=date('Y-m-d H:i:s ', time() + $offset); //Time Now
   $time_now=date('H:i:s ', time() + $offset); //Time Now

   $queryX = "SELECT * FROM offers WHERE status LIKE 'pending';";
   $resultX = mysqli_query($con , $queryX);

   while($rowX = mysqli_fetch_array($resultX)){  

    $BSoffer_Id = $rowX['BSoffer_Id'];
    $Create_Time = $rowX['Create_Time'];
    $date = $Create_Time;
    $new_time = date ('Y-m-d H:i:s', strtotime($date .'+1 hours') ) ; // The Expiration time of the offer
    $new_time2 = strtotime($Create_Time .'+1 hours')  ; // The Expiration time of the offer
//$time_now = now() ;
   //echo($new_time);
  
    if(  $time_now > $new_time2 ){ // check if it is expired
           $queryY = " DELETE FROM `offers` WHERE `BSoffer_Id` = '$BSoffer_Id' ";
           mysqli_query($con, $queryY);
    }

   }


$parent = $_SESSION['email_singIn']; //change to session 

$query2 = "SELECT * FROM request WHERE Email LIKE '$parent' AND Status LIKE 'pending';";
$result2 = mysqli_query($con,$query2);

//$query = "SELECT * FROM offers WHERE Email LIKE 'NorahX@outlook.com' ;";
//$result = mysqli_query($con,$query);
if($result2){  
  if($result2 -> num_rows > 0){    

 while($row = mysqli_fetch_array($result2)){  // for each request that was sent from THIS parent

$Request_Id = $row['Request_Id']; 

$query3 = "SELECT * FROM offers WHERE Request_Id = $Request_Id AND Status LIKE 'pending'; ;";
$result3 = mysqli_query($con,$query3);

while($row2 = mysqli_fetch_array($result3)){    //for each offer sent to THIS request 

$BSoffer_Id = $row2['BSoffer_Id'];
$Create_Time = $row2['Create_Time'];
$babysitter = $row2['Email'];
$parent = $row['Email'];
$price=$row2['Price'];
//$number=$row['number'];
$start = $row['From_Time'];
$end = $row['To_Time'];


$query1 = "SELECT * FROM `Baby_Sitter` WHERE `Email` = '$babysitter' ;";  //to get the babysitter's Info
$result1 = mysqli_query($con,$query1);
$row1 = mysqli_fetch_array($result1);
$image = $row1['imagee'];
$firstName = $row1['First_Name'];
$lastName = $row1['Last_Name'];
$date = $Create_Time;
$new_time = date ('Y-m-d H:i:s', strtotime($date .'+1 hours') ) ;
$imagee = $row1["imagee"];

print( '<div class="cardOL">');
print('<image src='.$imagee.' class="imagei" alt="userIcon" style="border-radius:20px;" ></image>');
print('<h5>'.$firstName.' '.$lastName.'</h5>');
print('<form class="" action="BabySitterProfileViewForParent.php" method="post" >'. //BABYSITTER PROFILE
'<input type="hidden" name="babysitter" value='.$babysitter.'><br>'.
'<button class="button"   type="submit" style="color:black; margin-left:0px; width: 170px; margin-top:-20px; font-family: Courier New, monospace;  	font-size: 15px;" >'."View Profile".'</button>'.
' </form> '
);
print(
  '<p class="price">'.
  '<strong>'. $price  .'SR</strong> <i class="fa fa-money" style="font-size:24px"></i> <small> per hr</small>
</p>');
print( '<div class="praOL">
<p style="font-size: 17px">i am available '.$start.' - '.$end.'<br>looking forward to take care of your kids!
  <p style="font-size: 15px">the offer is valid for 1 hour.  It Will End At : '.($new_time).'</p>
  <p id="demo1"></p>
</p>');

/*print(
  '<p style="text-align: right;">
      <a style="color: #6bbd5c;" class="button" href="#">accept </a>
     <!-- <a style="color: #ff5b5b;"class="button" href="#">reject</a>-->
  </p>
</div>');*/

print(
              '<form class="" action="rejectOffer.php" method="post" >'.
                            '<input type="hidden" name="rejectedOffer" value='.$BSoffer_Id.'>'.
                            '<button class="button"   type="submit" style="color:black; margin-left: 775px; width: 150px; margin-top:-55px; font-family: Courier New, monospace; font-size: 15px;" >'."Reject Offer".'</button>'.
             ' </form> '
);

print(
  '<form class="" action="acceptOffer.php" method="post" >'.
                '<input type="hidden" name="acceptOffer" value='.$BSoffer_Id.'>'.
                '<button class="button"   type="submit" style="color:black; margin-left: 775; margin-bottom:-55px;	width: 150px; font-family: Courier New, monospace; font-size: 15px;">'."Accept Offer".'</button>'.
 ' </form> '
);

print('</div>');
print('</div>');

}
  }
}
  else{
  echo(' <h2 style="font-family: Courier New, monospace; margin-left:55px; " >     No Offers Yet ... </h2>');
}
}
else
echo(' <h2 style="font-family: Courier New, monospace; margin-left:55px; " >     No Offers Yet ... </h2>');





?>
     
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