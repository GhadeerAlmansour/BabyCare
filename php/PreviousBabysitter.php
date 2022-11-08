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
  INNER JOIN reviews ON offers.BSoffer_Id = reviews.Baby_Sitter_offer_Id
  AND offers.Email= '$email_singIn' AND (offers.status != 'accepted' AND offers.status != 'pending')";

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

        $review = $row["review"];

        $firstName = $row["First_Name"];
        $LastName = $row["Last_Name"];
        

        $Parent_name = $row["Parent_Name"];

        $Service = $row["Service"];
        $Datee = $row["datee"];

        $ChildsNames = $row["ChildsNames"];
        $ChildsAges = $row["ChildsAges"];
        

        


        $error_message="";
        
        $cards .=  ' <div class="cardOL1">
        <image src="../images/userIcon.png" class="imagei" alt="userIcon" style= "hover:none; "></image>
         
        
        <h5>'.$Parent_name.'</h5>
          <p class="price">
        <p style="margin-left: 680px; ">
          '.$Price.' SR<i class="fa fa-money"  style="font-size:24px"></i> <small> Per Hour</small>
         </p>


        <div class="praOL">
            <p><strong>details:</strong><br>
                <strong>Name:</strong>'. $ChildsNames .' <strong>  Age: </strong> '.$ChildsAges.' <br>
               
                <strong>Type of Service:</strong> '.$Service.' <br>
                <strong>Date: </strong> '. date('Y/m/d', strtotime($Datee)) .' 
             </p>
             
          </div>
          <div class="stars">
          <input type="radio" name="stars" id="a" />
          <label for="a"></label>
    
          <input type="radio" name="stars" id="b" />
          <label for="b"></label>
    
          <input type="radio" name="stars" id="c" />
          <label for="c"></label>
    
          <input type="radio" name="stars" id="d" />
          <label for="d"></label>
    
          <input type="radio" name="stars" id="e" />
          <label for="e"></label>
        </div>
        </p> 
        <p style="text-align: below;" readonly> 
            <textarea id="w3review" name="w3review" rows="4" cols="50"  style="text-align:left; resize:none; " readonly>'.$review.'</textarea></p>
  
          
          </p>
          
         
         
         
      </div>';
    }
  } else {
        

        $error_message = "system go wrong";
   // echo "0 results";
  }

?>




<html>

<head>
  <title>Previous jobs</title>
  <link rel = "stylesheet" href ="../css/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Static Template</title>

  <style>

.stars {
  display: flex;
  align-items: center;
  gap: 0px;
  direction: rtl;
  margin-right : 300px;

}
.stars input[type="radio"] {
  display: none;
}

.stars label::before {
  content: "\f005";
  font-family: "FontAwesome";
  font-size: 30px;
  color: #bbb;
  color: orange;
  cursor: pointer;
  transition: color 0.4s ease-in-out;
}
.stars label:hover::before {
  color: orange;
}

.stars input[type="radio"]:checked ~ label::before {
  color: orange;
  transition: color 0.4s ease-in-out;
}


/*---------------*/
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
        <li ><a href="..\html\jobStatus.html">Job status</a></li>
        <li><a href="..\php\CuurentBabysitter.php">Current job</a></li>
        <li  style="text-decoration:underline ;"><a href="..\php\PreviousBabysitter.php">Previous job</a></li>
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
       My previous jobs :   
       </p>


       <?php
echo $cards;
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