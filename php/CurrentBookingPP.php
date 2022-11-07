<?php 


session_start();

//$email_singIn = $_SESSION['email_singIn'];
$email_singIn = "Saud_Alx@gmail.com";


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
  
 
 
  $query_Parent = "SELECT * FROM 
  request INNER JOIN parent ON request.Email = parent.Email
  INNER JOIN offers ON request.Request_Id = offers.Request_Id
  AND request.Email= '$email_singIn' AND  (CAST(CURRENT_TIMESTAMP AS DATE) < request.datee)";

  $result_Parent = mysqli_query($conn,$query_Parent);
 
  $cards="";

  if (mysqli_num_rows($result_Parent) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result_Parent)) {
     // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        $price= $row["Price"];
        $Request_Id = $row["Request_Id"];
        $Bsoffer_Id = $row["BSoffer_Id"];
        $Email = $row["Email"];
        $Create_Time = $row["Create_Time"];
        $status = $row["status"];
        $From_Time = $row["From_Time"];
        $To_Time = $row["To_Time"];

        $firstName = $row["First_Name"];
        $LastName = $row["Last_Name"];
        

                 $BabySitter_name = $row["BabySitter_Name"];

        $Service = $row["Service"];
        $Datee = $row["datee"];

        $ChildsNames = $row["ChildsNames"];
        $ChildsAges = $row["ChildsAges"];

        $error_message="";
        
        $cards .= ' <div class="card" style="padding-top: 70px; text-align:left;"  >
        <h5>Current Booking</h5>
        <div class="pra" style="  font-family: "Courier New", monospace;">

<form >
<lable> Baby Sitter Name:
  <input name="name" type="text" size="12" maxlength="20" value='.$BabySitter_name.' readonly>
<br>
<br>
<lable> Kid Name:
  <input name="name" type="text" size="12" maxlength="20" value='.$ChildsNames.' readonly >
  <lable> Age:
  <input name="age" type="text" size="3" maxlength="40" value='.$ChildsAges.' readonly >
<br>


<br><br>

<lable> Type of Service: 
<input name="service" type="text" size="12" maxlength="20" value=' .$Service. ' readonly >
<lable> Price: 
<input name="service" type="text" size="12" maxlength="20" value=' .$price. ' readonly >

<br><br>
<lable> Time:
<input name="day" type="text" size="12" maxlength="20" value='. date('Y/m/d', strtotime($Datee)) .' readonly >

<input name="time" type="text" size="15" maxlength="20" value='.$From_Time.'  readonly >
<input name="time" type="text" size="15" maxlength="20" value='.$To_Time.'  readonly >

<br><br>

</form>

          </div>
        </div>
';
    }
  } else {
    $Price = "";
    $Request_Id = "";
    $Bsoffer_Id = "";
    $Email = "";
    $Create_Time = "";
    $status = "";

    $firstName = "";
    $LastName = "";
    $Age = "";


        $error_message = "system go wrong";
   // echo "0 results";
  }

?>



<html>

<head>
  <title> Current Booking</title>
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

.card{ width:720px; height:250px; margin-left: 215px;
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
  <div class="header" >
    <image src="../images/webLogo.jpeg" class="logo">
<ul>
  <li ><a href="../html/HomeParent.html">Home</a></li>
  <li ><a href="../html/jobRequest.html">Job Request</a></li>
  <li><a href="../html/postJobReq.html">New Request</a></li>
  <li><a href="../html/offerList.html">Offer List</a></li>
  <li><a href="../html/PreviousBookingPP.html">Previous Booking</a></li>
  <li style="text-decoration:underline ;" ><a href="../html/CurrentBookingPP.html">Current Booking</a></li>

</ul>
  
<div class="dropdown">
  <image src="../images/userIcon.png" class="image" alt="User Icon">
  <ul>
  
      <li><a href="ViewParentProfile.php">View Profile</a></li><br>
      <li><a href="#"><br></a></li>
      <li><a href="signout.php">Sign-Out</a></li>
  
  </ul>
  
  </div>
  </div> 


  <!--------- Container -------->
  <a href="#" class="back">
    <image src="..\images\back.png" class="back" alt="back" style="width:40px ; margin-left: 30px; margin-top: 30px;" onclick="history.go(-1);"></image>
  </a>
  <div class="container2" style=height:450px;> 

      <div class=box style="	display: block;">
 

  <!--------- Card 1 ------

        <div class="card" style="padding-top: 70px; text-align:left;"  >
          <h5>Current Booking</h5>
          <div class="pra" style="  font-family: 'Courier New', monospace;">
  
<form >
  <lable> Baby Sitter Name:
    <input name="name" type="text" size="12" maxlength="20" value="Deema Alx" readonly>
<br>
<br>
  <lable> Name:
    <input name="name" type="text" size="12" maxlength="20" value="Yara" readonly >
    <lable> Age:
    <input name="age" type="text" size="3" maxlength="40" value="12"readonly >
<br>

<lable> Name:
<input name="name" type="text" size="12" maxlength="20" value="Nouf" readonly >
<lable> Age:
<input name="age" type="text" size="3" maxlength="40" value="5"readonly >
<br>  

<lable> Name: 
 <input name="name" type="text" size="12" maxlength="20" value="Ahmed" readonly >
<lable> Age:
<input name="age" type="text" size="3" maxlength="40" value="9"readonly >
<br><br>

<lable> Type of Service: 
  <input name="service" type="text" size="22" maxlength="30" value="Daytime Babysitting" readonly >
 
<br><br>
<lable> Time:
<input name="day" type="text" size="12" maxlength="20" value="Friday" readonly >
<input name="Date" type="text" size="12" maxlength="20" value="20/10/2023" readonly >
<input name="time" type="text" size="15" maxlength="20" value="8:00pm - 10:30pm" readonly >

<br><br>

</form>

            </div>
          </div>



-->
<?php
echo $cards;
?>
 
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





</html>