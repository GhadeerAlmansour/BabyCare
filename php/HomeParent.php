<?php
session_start();
?>

<html>

<head>
  <title> Parent HomePage</title>
  <link rel = "stylesheet" href ="../css/home.css">

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


.card h5{
	line-height: 27px;
	margin-bottom: 25px;
    margin-top: 10px;
  font-family: 'Courier New', monospace;
  text-align: center;
  }
  

  .button:hover{
	background-color: transparent;
	border: 2px solid  rgb(104, 104, 104);
	cursor: pointer;
}


</style>


</head>

<body>
  <div class="header" >
    <image src="../images/webLogo.jpeg" class="logo" alt="BabyCare Logo">
<ul>
    <li style="text-decoration:underline ;"><a href="../php/HomeParent.php">Home</a></li>
    <li><a href="../php/viewJobReq.php">Job Request</a></li>
    <li><a href="../php/postJobReq.php">New Request</a></li>
    <li><a href="../php/offerList.php">Offer List</a></li>
    <li><a href="../php/PreviousBookingPP.php">Previous Booking</a></li>
    <li><a href="../php/CurrentBookingPP.php">Current Booking</a></li>

</ul>

<div class="dropdown">
<image src="../images/userIcon.png" class="image" alt="User Icon">
<ul>

    <li><a href="ViewParentProfile.php">View Profile</a></li><br>
    <li><a href="#"><br></a></li>
     <li><a href="signout.php" >Sign-Out</a></li>

</ul>

</div>

  </div> 
  <div class="container2" style=" height: 1350px;"> 
   <div class="option">

    <div class="title">
        <h2>Your Baby Is In Safe Hands </h2>
    </div>

    <div class="box">
        <!------------  Job Request   ----------->
        <div class="card">
            <image src="../images/babysitter.png" alt="Request icon" class="icon">
            <h5 style="margin-left: -10px;">Babysitter Request</h5>
            <div class="pra">
                <p>Request a babysitter for your child </p>

                <p style="text-align: center;" >
                    <a class="button" href="viewjobReq.php" >Previous</a>
                    <a class="button" href="postJobReq.php" >New</a>

                </p>
            </div>
        </div>


        <!------------  OFFER LIST   ----------->

        <div class="card">
            <image src="../images/list.png" alt="Select icon" class="icon">
                <h5 style="    margin-left: -10px;">View offer list</h5>
            <div class="pra">
                <p>select a babysitter</p>

                <p style="text-align: center;"> <br>
                    <a class="button" href="offerList.php" >Go!</a>
                </p>
            </div>
        </div>

         <!------------  BOOKINGS   ----------->
       
        <div class="card">
            <image src="../images/booking.png" alt="Booking icon" class="icon">
                <h5 style="    margin-left: -10px;">View Booking</h5>
            <div class="pra">
                <p>view current and previous bookings</p>

                <p style="text-align: center;">
                    <a class="button" href="CurrentBookingPP.php" >current </a>
                    <a class="button" href="PreviousBookingPP.php">previous</a>

                </p>
            </div>
        </div>
    </div>
</div> 
 
<!---- About us -->

<section id="aboutus" class="about">
    <div class="main">
        <img src="../images/background.png"  style="border-radius:20px ;   box-shadow: 2px 5px 12px rgba(8, 8, 8, 0.4);
        " alt="baby picture">
        <div class="about-text">
            <h2>About Us</h2>
            <h5>BabyCare <span> </span></h5>
            <p style="font-size:22px; width: 550px;">Trust and safety sets BabyCare apart from the other babysitting sites. You’ll get the quickest response from babysitters in your area. BabyCare provides you with baby sitter reviews written by parents.</p>
               
            <p> </p>
        </div>
    </div>
</section>
</div>



<!-- Footer -->
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