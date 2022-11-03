
<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
  include '../php/test.php';   
    
  $First_Name = $_POST['First_Name'];
  $Last_Name = $_POST['Last_Name'];
  $Email = $_POST['Email'];
  $password = $_POST['password'];
  $city = $_POST['city'];  
  $location = $_POST['location'];  
 $filename =$_File["image"]['tmp_name'] ;  
 $filetmpname = $_FILES['image']['name']; 

 $folder = 'image/';
 move_uploaded_file($filetmpname, $folder.$filename);
  $sql = "INSERT INTO `Parent` (First_Name, Last_Name, Email, password, city , location , image) values('$First_Name', '$Last_Name', '$Email', '$password', '$city', '$location' ,'$image')";

  $result = mysqli_query($conn, $sql);
 /*
if($conn->connect_error){
  echo "$conn->connect_error";
  die("Connection Failed : ". $conn->connect_error);
} else {
  $stmt = $conn->prepare("INSERT INTO Parent(First_Name, Last_Name, Email, password, city , location , image) values(?, ?, ?, ?, ?, ?,?)");
  $stmt->bind_param("sssssss", $First_Name, $Last_Name, $Email, $password, $city, $location ,$image);
  $execval = $stmt->execute();
  echo $execval;
  echo "Registration successfully...";
  $stmt->close();
  $conn->close();
}
*/
}
?>

<!doctype html>
<html>
    <head>
        <title> Baby Care</title>
  
        
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
.container{
    width: var(--form-width);
    height: 1100px;
    position: relative;
    margin: auto;
    box-shadow: 2px 10px 40px rgba(8, 8, 8, 0.4);
    border-radius: 10px;
    margin-top: 50px;
    margin-bottom: 50px;
   
  }

  :root{
    --form-height:1100px;
    --form-width: 900px;
    
    --left-color:#FFB3B3;
    
    --right-color: #FFDBA4;
  }
  


        </style>

    </head>
    <body>

<div>

</div>






      <div class="header" >
        <image src="../images/webLogo.jpeg" class="logo" alt="BabyCare Logo">
    <ul>
        <li><a href="mailto:BabyCareInfo.sa@gmail.com">Contact Us</a></li>
        
        <li><a href="#sign-in">Sign-in & Sign-up</a></li>

    </ul>

      </div> 



        <section id="aboutus" class="about">
          <div class="main" style="border-top:0px ; margin-top: -70px; width: 1300px;">
              <img src="../images/babysitterHomepic.jpeg" alt="Baby and Babysitter Image" style="border-radius:20px ;   box-shadow: 2px 5px 12px rgba(8, 8, 8, 0.4);  height: 500px; width: 700px;
              " alt="baby picture">
              <div class="about-text">
                  <h2>BabyCare</h2>
                  <h5>BabyCare <span> </span></h5>
                  <p style="font-size:25px"> We are there for the hardworking parents, for the parents who need some time for themselves and for the people who are there to support them with childcare.</p>
                  <p> </p>
              </div>
          </div>
      </section>
    

        <div class="container">
            <div class="overlay" id="overlay">
              <div class="sign-in" id="sign-in">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="switch-button" id="slide-right-button">Sign In</button>
              </div>
              <div class="sign-up" id="sign-up">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start a journey with us</p>
                <button class="switch-button" id="slide-left-button">Sign Up</button>
              </div>
            </div>
            <div class="form">
              <div class="sign-in" id="sign-in-info">
                <h1>Sign In</h1>
                
                <form id="sign-in-form">      
                  <input type="email" placeholder="Email" required/>
                  <input type="password" placeholder="Password" required/>
                  
                  <button class="control-button in">Sign In</button>
                </form>
              </div>
              <div class="sign-up" id="sign-up-info" >
                <h1>Create Account</h1>
                
                <div class="switch-buttonin-signUp-container">
                    <button id="babysitterButton" class="switch-buttonin-signUp">Babysitter</button>
                    <button id="parentButton" class="switch-buttonin-signUp">Parent</button>
                </div>

                <!------- BABY SITTER SIGNUP ---------->
                  <form id="sign-up-form-babtsitter" class="babysitter"  >  
                    <h3>sign up as babysitter</h3>
                    <input type="text" placeholder=" First Name" required/>
                    <input type="text" placeholder=" Last Name" required/>
                    <input type="email" placeholder="Email" required/>
                    <input type="text" placeholder="Phone" required/>
                    <input type="password" placeholder="Password" required/>
                    <input type="text" placeholder=" ID" required/>
                    <input type="number" placeholder=" Age" required/>

                    <select name="gender" >
                      <option value="none" selected >Gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>

                    <input type="text" placeholder="City" required/> <br>
                    
                    <label for="img" style="margin-left:-50px; font-size: 13px;color: rgb(56, 56, 56); font-weight: 200;">
                      Select your profile image: (optional)
                    </label><br>
                    <input type="file" id="img" name="img" accept="image/*">
   
                    <input type="text" placeholder="Bio" required/>

                    <button class="control-button up">Sign Up</button>
                  </form>
                 
                       <!------- PARENT SIGNUP ---------->

                  
                  <form id="sign-up-form-parent" class="parent"  action="home.php" method="post" enctype="multipart/form-data">
                      <h3>sign up as parent</h3>
                      <input type="text" placeholder="First Name" required name="First_Name"/>
                      <input type="text" placeholder="Last Name" required name="Last_Name"/>
                      <input type="email" placeholder="Email" required name="Email"/>
                      <input type="password" placeholder="Password" required name="password"/>
                      <input type="text" placeholder="City" required name="city"/> <br>
                      <input type="text" placeholder="Location" required name="location"/> <br>

                      <label for="img" style="margin-left:-50px; font-size: 13px;color: rgb(56, 56, 56); font-weight: 200; " optional name="image">
                        Select your profile image: (optional)
                      </label><br>

                      <input type="file" id="img" name="img" accept="image/*">

                      <button class="control-button up" type="submit">Sign Up</button>
                    </form>
                </div>
              </div>
            </div>


                            <!------- FOOTER ---------->

                            <footer>
                              <p>Copyright &copy; 2022 BabyCare </p>
                              <p><a href="mailto:BabyCareInfo.sa@gmail.com" style="font-size:10px ; color:rgb(255, 255, 255); text-decoration:none;">Contact Us</a></p>
                               <!------------  BACK TO TOP   ----------->
    <a href="#" class="to-top">
      <image src="..\images\to top.png" class="ToTop" alt="toTop"></image>
    </a>
                           
                            </footer>   
           
      </body>
      <script src="../js/home.js"></script>
  
  </html>
  
