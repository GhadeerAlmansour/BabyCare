<?php
    session_start();

?>
<html>

<head>
  <title>BabySitter HomePage</title>
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
  




</style>


</head>

<body>
  <div class="header" >
    <image src="../images/webLogo.jpeg" class="logo" alt="BabyCare Logo">
<ul>
    <li style="text-decoration:underline ;"><a href="..\php\HomeBabySitter.php">Home</a></li>
    <li><a href="..\php\jobOffers.php">Job offers</a></li>
    <li><a href="..\html\jobStatus.html">Job status</a></li>
    <li><a href="..\php\CuurentBabysitter.php">Current job</a></li>
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
  <div class="container2" style=" height: 1350px;"> 
   <div class="option">
    <div class="title">
        <h2>Your Baby Is In Safe Hands </h2>
    </div>

    <div class="box">
        <!------------  VIEW JOB OFFERS   ----------->
        <div class="card">
            <image src="..\images\job.png" alt="Request icon" class="icon">
            <h5 style="margin-left: -10px;">View job offers</h5>
            <div class="pra">
                <p>view the new offers and see the status of it</p>

                <p style="text-align: center;" >
                    <a class="button" href="jobOffers.php" >view</a>
                    <a class="button" href="../html/jobStatus.html" >status</a>

                </p>
            </div>
        </div>

         <!------------  MY JOBS   ----------->
       
        <div class="card">
            <image src="..\images\check-list.png" alt="job icon" class="icon">
                <h5 style="    margin-left: -10px;">My jobs</h5>
            <div class="pra">
                <p>view current and previous jobs</p>

                <p style="text-align: center;">
                    <a class="button" href="CuurentBabysitter.php" >current </a>
                    <a class="button" href="PreviousBabysitter.php">previous</a>

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
            <p style="font-size:22px; width: 550px;">Trust and safety sets BabyCare apart from the other babysitting sites. You’ll get the quickest response from babysitters in your area.<br> BabyCare provides you with baby sitter reviews written by parents.</p>            <p> </p>
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