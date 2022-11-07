<?php





//$email_singIn = $_SESSION['email_singIn'];
$email_singIn = "saraW@outlook.com";


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
  
  $now = date_create()->format('Y-m-d');
  $query_Parent = "SELECT * FROM 
  request INNER JOIN parent ON request.Email = parent.Email
  INNER JOIN offers ON request.Request_Id = offers.Request_Id
  AND request.Email= '$email_singIn' AND  (request.Datee<$now)";

  $result_Parent = mysqli_query($conn,$query_Parent);
  
  $cards="";

  if (mysqli_num_rows($result_Parent) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result_Parent)) {
     // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        $Price = $row["Price"];
        $Request_Id = $row["Request_Id"];
        $Bsoffer_Id = $row["BSoffer_Id"];
        $Email = $row["Email"];
        $Create_Time = $row["Create_Time"];
        $status = $row["status"];
        $From_Time = $row["From_Time"]
        //$To_Time = $row["To_Time"]

        $firstName = $row["First_Name"];
        $LastName = $row["Last_Name"];
        $Age = $row["Age"];

                 $BabySitter_name = $row["BabySitter_name"];

        $Service = $row["Service"];
        $Datee = $row["Datee"];

        $Child_name1 = $row["Child_name1"];
        $Age1 = $row["Age1"];
        

        $Child_name2 = $row["Child_name2"];
        $Age2 = $row["Age2"];
       

        $Child_name3 = $row["Child_name3"];
        $Age3 = $row["Age3"];
        


        $error_message="";
        
        $cards .=  '  <div class=box style="	display: block;">
         <div class="card" style="padding-top: 70px; text-align:left;"  >
        <h5>Previous Booking</h5>
        <div class="pra" style="  font-family: "Courier New", monospace;">

<form >
<lable> Baby Sitter Name:
  <input name="name" type="text" size="12" maxlength="20" value='.$BabySitter_name.' readonly>
<br><br>
<lable> Kid Name:
  <input name="name" type="text" size="12" maxlength="20" value='.$Child_name1.' readonly >
  <lable> Age:
  <input name="age" type="text" size="3" maxlength="40" value='.$Age1.'readonly >
<br>

<lable> Kid Name:
<input name="name" type="text" size="12" maxlength="20" value='.$Child_name2.' readonly >
<lable> Age:
<input name="age" type="text" size="3" maxlength="40" value='.$Age2.'readonly >
<br>  

<lable> Kid  Name: 
<input name="name" type="text" size="12" maxlength="20" value='.$Child_name3.' readonly >
<lable> Age:
<input name="age" type="text" size="3" maxlength="40" value='.$Age3.'readonly >
<br><br>

<lable> Type of Service: 
<input name="service" type="text" size="12" maxlength="20" value='.$Service.' readonly >

<br><br>
<lable> Duration:
<input name="day" type="text" size="12" maxlength="20" value='. date('Y/m/d', strtotime($Datee)) .' readonly >

<input name="time" type="text" size="15" maxlength="20" value='.$From_Time.' readonly >

<br><br>

</form>
<p style="text-align: center;">
<a class="button" href="#" style="color: #f7f7f7;;" ><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <span class="fa fa-star checked" ></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span></a>
</p>

<p style="text-align: below;">
    <textarea id="w3review" name="w3review" rows="4" cols="50"  style="text-align:left ; resize:none; " resize="none" >the kids LOVED HER!!!!!!</textarea></p>
  
   <p style="text-align: below;">
   <a class="button" href="#" style="color:#9a0000;" >Post</a> 
   </p>
          </div> 
          </div>
        </div>';
    }
  } else {
        

        $error_message = "system go wrong";
   // echo "0 results";
  }

?>


<html>

<head>
  <title> Previous Booking</title>
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


.card{ width:720px; height:450px; margin-left: 215px;
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
  <li style="text-decoration:underline ;" ><a href="../html/PreviousBookingPP.html">Previous Booking</a></li>
  <li><a href="../html/CurrentBookingPP.html">Current Booking</a></li>

    
</ul>
  
<div class="dropdown">
  <image src="../images/userIcon.png" class="image">
  <ul>
  
    <li><a href="ViewParentProfile.php">View Profile</a></li><br>
    <li><a href="#"><br></a></li>
    <li><a href="signout.php">Sign-Out</a></li>
  </ul>
  </div> 
  </div> 

  <a href="#" class="back">
    <image src="..\images\back.png" class="back" alt="back" style="width:40px ; margin-left: 30px; margin-top: 30px;" onclick="history.go(-1);"></image>
  </a>
  <!--------- Container -------->

  <div class="container2" style=height:1300px;> 

     
 

  <!--------- Card 1 --------

        <div class="card" style="padding-top: 70px; text-align:left;"  >
          <h5>Previous Booking</h5>
          <div class="pra" style="  font-family: 'Courier New', monospace;">
  
<form >
  <lable> Baby Sitter Name:
    <input name="name" type="text" size="12" maxlength="20" value="Sara Alx" readonly>
<br><br>
  <lable> Kid Name:
    <input name="name" type="text" size="12" maxlength="20" value="Khalid" readonly >
    <lable> Age:
    <input name="age" type="text" size="3" maxlength="40" value="12"readonly >
<br>

<lable> Kid Name:
<input name="name" type="text" size="12" maxlength="20" value="Sara" readonly >
<lable> Age:
<input name="age" type="text" size="3" maxlength="40" value="8"readonly >
<br>  

<lable> Kid  Name: 
 <input name="name" type="text" size="12" maxlength="20" value="Norah" readonly >
<lable> Age:
<input name="age" type="text" size="3" maxlength="40" value="3"readonly >
<br><br>

<lable> Type of Service: 
<input name="service" type="text" size="12" maxlength="20" value="Night Care" readonly >
 
<br><br>
<lable> Duration:
<input name="day" type="text" size="12" maxlength="20" value="Friday" readonly >
<input name="Date" type="text" size="12" maxlength="20" value="20/10/2023" readonly >
<input name="time" type="text" size="15" maxlength="20" value="8:00pm - 10:30pm" readonly >

<br><br>

</form>
<p style="text-align: center;">
  <a class="button" href="#" style="color: #f7f7f7;;" ><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <span class="fa fa-star checked" ></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span></a>
</p>
 
<p style="text-align: below;">
      <textarea id="w3review" name="w3review" rows="4" cols="50"  style="text-align:left ; resize:none; " resize="none" >the kids LOVED HER!!!!!!</textarea></p>
    
     <p style="text-align: below;">
     <a class="button" href="#" style="color:#9a0000;" >Post</a> 
     </p>
            </div>
          </div>




  ------- Card 2 --------

          <div class="card" style="padding-top: 70px; text-align:left;"  >
            <h5>Previous Booking </h5>
            <div class="pra" style="  font-family: 'Courier New', monospace;">
   <br> 
  <form >
    <lable> Baby Sitter Name:
      <input name="name" type="text" size="12" maxlength="20" value="Norah Alx" readonly >
      <br><br>
    <lable> Kid Name:
      <input name="name" type="text" size="12" maxlength="20" value="Khalid" readonly >
      <lable> Age:
      <input name="age" type="text" size="3" maxlength="40" value="12"readonly >
  <br>
  <lable> Kid Name:
  <input name="name" type="text" size="12" maxlength="20" value="Sara" readonly >
  <lable> Age:
  <input name="age" type="text" size="3" maxlength="40" value="8"readonly >
<br><br>
  <lable> Type of Service: 
  <input name="service" type="text" size="12" maxlength="20" value="Day Care" readonly >
   
  <br><br><br>
  <lable> Duration:
  <input name="day" type="text" size="12" maxlength="20" value="Monday" readonly >
  <input name="Date" type="text" size="12" maxlength="20" value="22/10/2023" readonly >
  <input name="time" type="text" size="15" maxlength="20" value="8:00am - 1:30pm" readonly >
  
  <br><br>
  
  </form>
                <p style="text-align: center;">
                    <a class="button" href="#" style="color: #f7f7f7;;" ><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span></a>
                </p>
                   
                <p style="text-align: below;">
                        <textarea id="w3review" name="review" rows="4" cols="50"  style="text-align:left ; resize:none;" resize="none" > She was an absolutely amazing Babysiter.</textarea></p>
                      
                       <p style="text-align: below;">
                       <a class="button" href="#" style="color:#9a0000;" >Post</a> 
                       </p>
                    
              </div>
            </div>
</div>

-->
<?php
echo $cards;
?>
    
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