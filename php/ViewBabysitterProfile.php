<?php 

session_start();


//$email_singIn = $_SESSION['email_singIn'];
$email_singIn = "NorahX@outlook.com";


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
  

  $query_Babysitter = "SELECT * FROM baby_Sitter WHERE Email= '$email_singIn'";

  $result_Babysitter = mysqli_query($conn,$query_Babysitter);


  if (mysqli_num_rows($result_Babysitter) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result_Babysitter)) {
     // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        $firstName = $row["First_Name"];
        $Last_Name = $row["Last_Name"];
        $Email = $row["Email"];
        $Passwordd = $row["Passwordd"];
        $ID_B = $row["ID_B"];
        $Age = $row["Age"];
        $Gender = $row["Gender"];
        $City = $row["City"];
        $Bio = $row["Bio"];
        $phone_number = $row["phone_number"];
      $imagee = $row["imagee"];
        $error_message="";


    }
  } else {
        $firstName = "";
        $Last_Name = "";
        $Email = "";
        $Passwordd = "";
        $ID_B = "";
        $Age = "";
        $Gender = "";
        $City = "";
        $Bio = "";
        $phone_number = "";

        $error_message = "system go wrong";
   // echo "0 results";
  }

?>


<html>

<head>
  <title> View babysitter Profile</title>
  <link rel = "stylesheet" href ="../css/home.css">
  <script src="../js/viewBabySitterProfile.js"></script>
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


.card{ width:800px; height:75%; margin-left: 215px;
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
  background-color:#e6e2e8; 
  color: rgb(104, 104, 104);;
  text-decoration: none;
  border: 2px solid transparent;
  font-weight: bold; 
  border-radius: 30px;
margin-bottom: 5px;
}

.card {
	background-color:#ffe3e3;
	color: rgb(104, 104, 104);
  height: 850px;

}
.button{
	background-color:#ffe3e3;
	color: rgb(104, 104, 104);;
    width:25%;
    margin:1px;
    border: 0;
  width: 170px;
  padding: 10px;

  -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
           border-radius: 5px; 
  display: block;
  text-decoration: none;
   text-align: center;
  font-family:'Courier New', monospace;; 
  font-size: 1.2em;

}


h5{
	border-radius: 30px;
  padding: 9px 22px;
	background-color:#ffe3e3;
margin-left: -5px;
margin-top: -42px;
}
.deleteForm{
    display:flex;
    justify-content:center;
}
  </style>
</head>

<body>

    <!--------- Header -------->

  <div class="header" >
    <image src="../images/webLogo.jpeg" class="logo">
<ul>
    <li><a href="HomeBabySitter.html">Home</a></li>
    <li><a href="mailto:BabyCareInfo.sa@gmail.com">Contact Us</a></li>
    <li style="text-decoration:underline ;"><a href ="ViewBabysitterProfile.php"> My Profile</a></li>
</ul>
<div class="dropdown">
    <image src="../images/userIcon.png" class="image">
    <ul>

        <li><a href="signout.php">Sign-Out</a></li>
    </ul>
    </div> 
  </div>



  <!--------- Container -------->
  <a href="#" class="back">
    <image src="..\images\back.png" class="back" alt="back" style="width:40px ; margin-left: 30px; margin-top: 30px;" onclick="history.go(-1);"></image>
  </a>

  <div class="container2" style=height:1000px;> 
    <!-- 
<a href="#newreq"> <img src="../images/newReqIcon.png" style=" width: 60px; height: 60px;  position: absolute;padding: 20px 35px;
  "/> </a> -->
      <div class=box style="	display: block; margin-left: -65px ;">
 

  <!--------- Card 1 -------->

        <div class="card" style="padding-top: 70px; text-align:left;"  >
          <h5>My Profile:</h5> <label style="color:red;"><?php echo $error_message?></label>
          <div class="pra" style="  font-family: 'Courier New', monospace;">
        <br>
            <img src="<?php echo $imagee?>"  id = "imagee" name="imagee"style="width:100px ; height: 100px; padding-left: 340px;">

            <form id="sign-up-form-parent" class="parent" style="padding-left:100px ;" action="../php/updateBabysitterProfile.php" method="post">
               
                  
                    <input type="text" id="firstName"  name="firstName" value="<?php echo $firstName?>" style="background-color:#fbf6ff;"readonly required />
                    <input type="text" id="lastName"  name="lastName" value="<?php echo $Last_Name?>" style="background-color:#fbf6ff;" readonly required/>
                    <input type="email" id="email"   name="email" value="<?php echo $Email?>" style="background-color:#fbf6ff;" readonly required/>
                    <input type="password" id="password"  name="password" value="<?php echo $Passwordd?>" style="background-color:#fbf6ff;" readonly required/>
                    
                    <input type="text" id="id"  name="id" value="<?php echo $ID_B?>" style="background-color:#fbf6ff;" readonly required/>
                    <input type="number" id="age"  name="age" value="<?php echo $Age?>" style="background-color:#fbf6ff;" readonly required/>
                    <input type="text" id="phoneNumber" name="phoneNumber" value="<?php echo $phone_number?>" style="background-color:#fbf6ff;" readonly required/>
                    <select name="gender" id="gender"   name="gender" style="border-radius:30px ; background-color:#fbf6ff;" disabled>
                      <option value="none" >none</option>
                      <option value="male" <?php  if($Gender == 'male')echo'selected="selected"'; ?>>Male</option>
                      <option value="female" <?php  if($Gender == 'female')echo'selected="selected"'; ?> >Female</option>
                    </select>
            
                    <input type="text" id="city"  name="city" value="<?php echo $City?>" style="background-color:#fbf6ff;"  readonly required/> <br>
                   
           
            
                    <textarea name="Bio" id="bio" cols="25" rows="10" style="border-radius :30px; resize: none; width:560px ; height: 150px; background-color:#fbf6ff;" readonly>  <?php echo $Bio?> </textarea>
                 

                    <div style="text-align: center; display:flex;">
                        <button id="submit_button"class="button" type="submit" style="color:rgb(104, 104, 104); display:none; margin-left: 120px;">save</button>
                        
                        <div class="button"  onclick="unlock()" href="#" style="color:rgb(104, 104, 104); margin-right: 120px; " >Edit</div>
                        
                       
                      
                    </div>
                   
                    
            
                       

              </form >

              <form class="" action="../php/deleteBabysitterAccount.php" method="post" >
                            <input type="hidden" name="deleted_email" value='<?php echo $Email ?>'>
                            <input type="hidden" name='confirm_Delete' id="confirmDelete" value="false">
                            <button class="button"   type="submit" style="color:#ff5b5b; margin-left: 300px;" onclick='checkDelete()'>Delete Account!</button>
            </form> 
             <!--<p style="text-align: center;">
                <a class="button" href="#" style="color:rgb(104, 104, 104);" >save</a> 
                  <a class="button"  onclick="unlock()" href="#" style="color:rgb(104, 104, 104);" >Edit</a>
                  <a class="button"  href="#" style="color:#ff5b5b;">Delete Account!</a>
                 

              </p> -->
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





</html>


   