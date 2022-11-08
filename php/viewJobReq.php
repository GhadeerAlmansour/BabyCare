<?php


session_start();
$parent = $_SESSION['email_singIn'];


/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "babycare";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM `request` WHERE Email LIKE '$parent' ";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)){

    $Request_Id = $row['Request_Id'];
    //$Parent_Name = $row['$result2'];
  $ChildsNames = $row['ChildsNames'];
  $ChildsAges = $row['ChildsAges'];
  $Service = $row['Service'];
  $datee = $row['datee'];
  $From_Time = $row['From_Time'];  
  $To_Time = $row['To_Time'];  
  $Status = $row['Status']; 
  $error_message = "wrong";
  }
}

else {
  $Request_Id = "";
  $Parent_Name =  "";
$ChildsNames =  "";
$ChildsAges =  "";
$Service =  "";
$datee =  "";
$From_Time = ""; 
$To_Time =  "";
$Status =  "";

  $error_message = "system go wrong";

}

*/
?>

<html>
<script>

function unlock(){
    document.getElementById("firstName").removeAttribute('readonly');
    document.getElementById("lastName").removeAttribute('readonly');
    //document.getElementById("email").removeAttribute('readonly');
    document.getElementById("password").removeAttribute('readonly');
    var ps = document.getElementById("password");
    ps.setAttribute("type","text");
   
    document.getElementById("image").removeAttribute('disabled');    

    document.getElementById("city").removeAttribute('readonly');
    document.getElementById("Neighborhood").removeAttribute('readonly');
    document.getElementById("street").removeAttribute('readonly');

    document.getElementById("submit_button").style.display="block";

}


</script>


<head>
  <title> Job Request</title>
  <link rel = "stylesheet" href ="../css/home.css">

  <style>

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


.card{ width:720px; height:300px; margin-left: 215px;
	padding: 20px 35px;
	background: linear-gradient(to bottom right,#FFB3B3,#ffdede);
	border-radius: 20px;
	position: relative;
	overflow: hidden;
	text-align: center;
  box-shadow: 2px 10px 40px rgba(8, 8, 8, 0.4);
  transition: 0.5s ease;
cursor: pointer;
margin-bottom: 40px;
}
.card:hover{
	background: linear-gradient(to bottom right,#ff9f9f,#ffcdcd);
	background: linear-gradient(to bottom right,#ffdede,#FFB3B3);
transform: scale(1.01);
}
input{
  background-color:#fbf6ff;color: rgb(104, 104, 104);;text-decoration: none;border: 2px solid transparent;font-weight: bold; border-radius: 30px;
margin-bottom: 5px;
}

.card .button{
	background-color:#ffe3e3;
	color: rgb(104, 104, 104);;

}
h5{
	border-radius: 30px;
  padding: 9px 22px;
	background-color:#ffe3e3;
margin-left: -5px;
margin-top: -42px;
}

  </style>
</head>

<body>

    <!--------- Header -------->

  <div class="header" >
    <image src="../images/webLogo.jpeg" class="logo" alt="BABYCARE Logo">
      <ul>
        <li ><a href="HomeParent.php">Home</a></li>
        <li  style="text-decoration:underline ;" ><a href="../php/viewjobreq.php">Job Request</a></li>
        <li><a href="../php/postJobReq.php">New Request</a></li>
        <li><a href="../php/offerList.php">Offer List</a></li>
        <li><a href="../php/PreviousBookingPP.php">Previous Booking</a></li>
        <li><a href="../php/CurrentBookingPP.php">Current Booking</a></li>
    
    </ul>


<div class="dropdown">
  <image src="../images/userIcon.png" class="image" alt="User Icon">
  <ul>
  
      <li><a href="ViewParentProfile.html">View Profile</a></li><br>
      <li><a href="#"><br></a></li>
      <li><a href="signout.php">Sign-Out</a></li>
  
  </ul>
  
  </div>
</div>

  <!--------- Container -------->

  <div class="container2" style=height:1200px;> 
    <!-- 
<a href="#newreq"> <img src="../images/newReqIcon.png" style=" width: 60px; height: 60px;  position: absolute;padding: 20px 35px;
  "/> </a> -->
      <div class=box style="	display: block;">
 

  <!--------- Card 1 

        <div class="card" style="padding-top: 70px; text-align:left;"  >
          <h5>Request Information:</h5>
          <div class="pra" style="  font-family: 'Courier New', monospace;">
  
<form method = "post" action="../php/updateRequest.php" >
<br>
  <lable> Name:
    <input name="name" type="text" size="12" maxlength="20" value="<?php echo $ChildsNames?>" readonly >
    <lable> Age:
    <input name="age" type="text" size="3" maxlength="40" value="<?php echo $ChildsAges?>"readonly >
<br>


<lable> Type of Service: 
<input name="service" type="text" size="22" maxlength="30" value="<?php echo $Service?>" readonly >
 
<br><br>
<lable> Time:

<input name="Date" type="text" size="12" maxlength="20" value="<?php echo $datee?>" readonly >
<input name="time" type="text" size="15" maxlength="20" value="<?php echo $To_Time?> - <?php echo $From_Time?>" readonly >

<br><br>

</form>
              <p style="text-align: center;">
                  <a class="button" href="#" style="color:rgb(87, 86, 86);" >Edit</a>
                  <a class="button" href="#" style="color:rgb(87, 86, 86)">Cancel</a>
                  <a class="button" href="offerList.php" style="color:rgb(87, 86, 86);">View Offers</a>

              </p>
            </div>
          </div>









          <div class="card" style="padding-top: 70px; text-align:left;"  >
            <h5>Request Information: </h5>


            <div class="pra" style="  font-family: 'Courier New', monospace;">
   <br> 
  <form  method = "post" action="updateRequest.php" >
  <br>
  <lable> Name:
    <input name="name" type="text" size="12" maxlength="20" value="<?php echo $ChildsNames?>" readonly >
    <lable> Age:
    <input name="age" type="text" size="3" maxlength="40" value="<?php echo $ChildsAges?>"readonly >
<br>


<lable> Type of Service: 
<input name="service" type="text" size="22" maxlength="30" value="<?php echo $Service?>" readonly >
 
<br><br>
<lable> Time:

<input name="Date" type="text" size="12" maxlength="20" value="<?php echo $datee?>" readonly >
<input name="time" type="text" size="15" maxlength="20" value="<?php echo $To_Time?> - <?php echo $From_Time?>" readonly >
  
  <br><br>
  
  </form>

    <p style="text-align: center;">
                  <a class="button" href="#" style="color:rgb(87, 86, 86);" >Edit</a>
               
                  <a class="button" href="offerList.php" style="color:rgb(87, 86, 86);">View Offers</a>

  <form class="" action="cancelRequest.php" method="post" >
                            <input type="hidden" name="deleted_request" value='<?php echo "hi" ?>'>
                            <input type="hidden" name='confirm_Delete' id="confirmDelete" value="false">
                            <a class="button" href="#" style="color:rgb(87, 86, 86)">Cancel</a>



                <p style="text-align: center;">
                    <a class="button" href="CurrentBookingPP.php" style="color:rgb(87, 86, 86);" >Booking Connfirmed - Click here to view your Booking</a>
                </p>
              </div>
            </div>

            -------->

            <?php

$parent = $_SESSION['email_singIn'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "babycare";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM `request` WHERE Email LIKE '$parent' ";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0) {  
  while($row = mysqli_fetch_assoc($result)){ 
    $Request_Id = $row['Request_Id']; 
    //$Parent_Name = $row['$result2'];
  $ChildsNames = $row['ChildsNames'];
  $ChildsAges = $row['ChildsAges'];
  $Service = $row['Service'];
  $datee = $row['datee'];
  $From_Time = $row['From_Time'];  
  $To_Time = $row['To_Time'];  
  $Status = $row['Status']; 
  
print('<div class="card" style="padding-top: 70px; text-align:left;"  >
<h5>Request Information: </h5>')  ;
print( '<div class="pra" style="  font-family: Courier New, monospace;"><br> ');
print('  <form  method = "post" action="updateRequest.php" >');

print('
    <br>
    <lable> Name:
      <input name="name" type="text" size="45" maxlength="200" value='.$ChildsNames.' readonly >
      <lable> Age:
      <input name="age" type="text" size="30" maxlength="30" value='.$ChildsAges.' readonly >
  <br>
  
  
  <lable> Type of Service: 
  <input name="service" type="text" size="22" maxlength="30" value='.$Service.' readonly >
   
  <br><br>
  <lable> Time:
  
  <input name="Date" type="text" size="12" maxlength="20" value='.$datee.' readonly >
  <input name="time" type="text" size="15" maxlength="20" value='.$To_Time.' - '.$From_Time.'readonly >
  
  <br><br>
  
  </form>
                <p style="text-align: center;">

                    <form class="" action="updateReq.php" method="post" >'.
                                  '<input type="hidden" name="request" value='.$Request_Id.'>'.
                                  '<button class="button" type="submit" style="color:rgb(87, 86, 86); margin-left:210px;margin-top:20px; width: 130px; font-family: Courier New, monospace; font-size: 15px; ">Edit</button> </form> 
                                 
                                  <form class="" action="cancelReq.php" method="post" >'.
                                  '<input type="hidden" name="request" value='.$Request_Id.'>'.
                                  '<button class="button"  type="submit" style="color:rgb(87, 86, 86); margin-left:370px;margin-top:-40px; width: 130px; font-family: Courier New, monospace; font-size: 15px; ">Cancel</button> </form> 

                    
                    <a class="button" href="offerList.php" style="color:rgb(87, 86, 86); margin-left:290px; ">View Offers</a>
  
                </p>


');

print('</form>');

print( '</div></div>');

}}

?>

  <!--------- Card 3 NEW REQ -------->

  <!-- <a href="postJobReq.html" style="text-decoration: none;">-->
  <div id="newreq" class="card" style="background: linear-gradient(to bottom right,#93b7cd,#ffffff); height: 150px;" >
<!---
    <h5 style=" padding-top: 70px; text-align: left; font-size: 35px; border: none; margin-right: 50px; margin-left: -20px; background: none;">
      Post A New Babysitting Request</h5>   --> <br><br>
      <a class="button" href="postjobreq.php" style="color: rgb(104, 104, 104); background-color: transparent;
       margin-top: 100px; font-size: 33px;   font-family: 'Courier New', monospace; font-weight: 700; margin-left: -12px;" >Post A New Babysitting Request</a>

    <div class="pra">
    </a>

    </div>
  </div>




    </div>
  </div>



  <!--------- footer -------->

  <footer>
    <p>Copyright &copy; 2022 BabyCare </p>
    <p><a href="mailto:BabyCareInfo.sa@gmail.com" style="font-size:10px ; color:rgb(255, 255, 255); text-decoration:none;">Contact Us</a></p>
      <!------------  BACK TO TOP   ----------->
      <a href="#" class="to-top">
        <image src="..\images\to top.png" class="ToTop" alt="toTop"></image>
      </a>
  </footer>    

</body>


<?php

//mysqli_close($conn);

?>



</html>