<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BabyCare";

$babysitter = $_POST['babysitter'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $query = "SELECT * FROM `Baby_Sitter` WHERE `Email` = '$babysitter' ;";  //to get the babysitter's Info
  $result = mysqli_query($conn,$query);
  $row = mysqli_fetch_array($result);

  $firstName = $row["First_Name"];
  $Last_Name = $row["Last_Name"];
  $Email = $row["Email"];
  $ID_B = $row["ID_B"];
  $Age = $row["Age"];
  $Gender = $row["Gender"];
  $City = $row["City"];
  $Bio = $row["Bio"];
  $imagee = $row["imagee"];
?>

<html>

<head>
  <title> Baby Sitter Profile</title>
  <link rel = "stylesheet" href ="../css/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <style>
    input{
    background-color:transparent ;color: rgb(104, 104, 104);;text-decoration: none; border: 2px solid transparent; border-radius: 30px;
    margin-bottom: 5px;

    }
  .button {
  background-color:#ffe3e3;
  color: rgb(104, 104, 104);
	text-decoration: none;
  border: 1px solid #e2c7c7;
	font-weight: bold;
	padding: 9px 22px;
	border-radius: 30px;
	transition: .4s; 
  margin:auto;
  text-align: center;
  margin-bottom: -100px;
  display: flex;
  display: grid;
  width: 100px;
  margin-top: 100px;
} 

  .divForm{
    margin-left: 60px;
    margin-top: 50px;
   } 
 
   .formLabel{
    font-family:'Courier New', Courier, monospace;
    font-size: 20px;
    font-weight: bold;
    color: rgb(87, 87, 87);  
     }
   
   .formInput{
    font-family:'Courier New', Courier, monospace;
    font-size: 20px;

   }
   .imageiBig {
    margin-top : 10px;
    margin-left: 10px;
    width: 40px;
    cursor:pointer;
    border-radius: 10px;
    z-index: -5;
   }
   .formInputBio
   {

    font-family:'Courier New', Courier, monospace;
    font-size: 20px;
    width:800px ; 
    height:200px ;
     overflow: scroll;  
    
   }

   textarea {
  width: 800px;
  height: 150px;
  padding: 20px 10px;
  position: absolute;
  box-sizing: border-box;
  border: 2px ;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  resize: none;
  font-family:'Courier New', Courier, monospace;
   font-size: 20px;
   background-color:transparent ;color: rgb(104, 104, 104);;text-decoration: none; border: 2px solid transparent; border-radius: 30px;
   margin-bottom: 5px;
   margin-left: 8px;
}

.buttonR{
  background-color:#ffe3e3;
	color: rgb(104, 104, 104);;
  border-radius: 30px; 
  padding:5px;
}


  </style>



</head>

<body>
    <div class="header" >
      <image src="../images/webLogo.jpeg" class="logo">
       <ul>
         <li><a href="HomeParent.html">Home</a></li>
         <li><a href="mailto:BabyCareInfo.sa@gmail.com">Contact Us</a></li>
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

      <p style="background-color: white; color:  rgb(87, 86, 86); font-weight:bolder; font-size: 40px ; margin-left: 50px; font-family: 'Courier New', monospace; margin-top: -10px; text-align: center;">
       Personal Profile:    
       </p>
       
    <div class="cardPP" >
    <div>
      <image src= "<?php echo $imagee ?>"class="imageiBig" style= "margin-left:60px ; height:160px ; width:160px ; margin-top: 40px; hover:none" alt="Profile Image"></image >

    </div>

<div class =" divForm">
<form style="height: 1000px"readonly >

  <!--RateAndRev-->
  <p style="text-align: center; margin-right: -100px; " readonly>
    <a class="buttonR" href="#" style="color: #f7f7f7;;" ><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <span class="fa fa-star checked"readonly></span>
      <span class="fa fa-star checked"readonly></span>
      <span class="fa fa-star checked"readonly></span>
      <span class="fa fa-star checked"readonly></span>
      <span class="fa fa-star checked"readonly></span></a>
  </p>                
  <p style="text-align: below;"readonly>
    <textarea id="w3review" name="w3review" rows="4" cols="50"  style= "text-align:left; resize:none; width:300px; margin-left: 450px; background-color:#ffe3e3;"readonly>the kids LOVED HER!!!!!!</textarea></p>        
  <!--RateAndRev Ends-->



  <lable class="formLabel"> First Name:





    <input class="formInput" name="Fname" type="text" size="20" maxlength="20" value="<?php echo $firstName?>" readonly >
<br><br>

  <lable class="formLabel"> Last Name:
    <input class="formInput"name="Lname" type="text" size="20" maxlength="40" value="<?php echo $Last_Name?>"readonly >
<br><br>


 
  <lable class="formLabel"> Age:
    <input class="formInput" name="age" type="text" size="4" maxlength="40" value="<?php echo $Age?>"readonly >
<br>  <br>

  <lable class="formLabel" > Gender: 
    <input class="formInput" name="gender" type="text" size="20" maxlength="20" value="<?php echo  $Gender?>" readonly >
<br><br>

  <lable class="formLabel" > Email:
    <input class="formInput"  name="email" type="text" size="20" maxlength="40" value="<?php echo $Email?>"readonly >
<br><br>

  <lable class="formLabel" > City: 
    <input class="formInput" name="city" type="text" size="20" maxlength="20" value="<?php echo $City?>" readonly >
   <br>
   <br>
  <lable class="formLabel" readonly > Bio: 
    <textarea name="Bio" id="BioText" cols="25" rows="10"readonly><?php echo $Bio ?></textarea>
   <!-- <input class="formInputBio"  name="bio" type="textarea" size="200" maxlength="500"  value= " I have a bachelor degree of childhood education, i have worked in kindergarden as a teacher for 2 years,and i baby sit as a part time job."  readonly > -->

  
</form>
<br>
<br>
<br>
<a class="button"   href="mailto:<?php echo $Email ?>">Contact</a>

</div><!--div inside card-->      

       
    </div><!--card-->

  
    </div><!--container--> 
   
    <footer>
      <p>Copyright &copy; 2022 BabyCare </p>
      <p><a href="mailto:BabyCareInfo.sa@gmail.com" style="font-size:10px ; color:rgb(255, 255, 255); text-decoration:none;">Contact Us</a></p>
    </footer>  
  
  </body>




</html>