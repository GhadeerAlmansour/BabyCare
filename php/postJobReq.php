<?php
require("./test.php");
session_start();


?>


<html>



<head>
    <title> Post Job Request</title>
    <link rel = "stylesheet" href ="../css/home.css">
  
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script>

$(document).ready(function() {
    var max_fields = 100;
    var wrapper = $(".cont1");
    var add_button = $(".add_form_field");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) { 
            x++;
            
            $(wrapper).append('<div>Name:<input type="text" name="name[]" size="12" maxlength="20" value="" required /> Age: <input type="number" name="age[]" size="4" maxlength="10" value="" style="max-width:50px" required/> <a href="#" class="delete"><image src="../images/xicon.png"" alt="X" style="width:20px; margin-left:10px;" ></image></a></div>'); //add input box
        } else {
            alert('You Reached the limits')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
});

$(function(){
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

    var minDate= year + '-' + month + '-' + day;

    $('#ReqDate').attr('min', minDate);
});


    </script>
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

  input{
    background-color:#fbf6ff;
    color: rgb(104, 104, 104);
    text-decoration: none;
    border: 2px solid transparent;
    font-weight: bold;
     border-radius: 30px;
  margin-bottom: 5px;
  
  }
  .icon{

padding-bottom: 20px;

  }

.container2:hover{

transform: scale(1.01);
}
  
  .card .button{
      background-color:#ffe3e3;
      color: rgb(104, 104, 104);;
  
  }

  .add_form_field{
    background-color:#ffe3e3;
	color: rgb(104, 104, 104);;
	text-decoration: none;
	font-weight: bold;
	padding: 5px 10px;
	border-radius: 15px;
	transition: .4s; 
  margin-right:800px;

  font-family: 'Courier New', Courier, monospace;
  }
  .add_form_field:hover{

  margin-bottom: 20px;
  
  }

  select{

    background-color:#fbf6ff;color:
     rgb(104, 104, 104);
     ;text-decoration: none;
     border: 2px solid transparent;
     font-weight: bold;
      border-radius: 30px;
margin-bottom: 5px;
  }

.container2{

    background-image: linear-gradient(#FFB3B3, #ffe3e3 );
    transition: 0.5s ease;
cursor: pointer;
margin-bottom: 40px; 
}

.buttons{
	background-color:#ffe3e3;
	color: rgb(104, 104, 104);;
	text-decoration: none;
	border: 2px solid transparent;
	font-weight: bold;
	padding: 9px 22px;
	border-radius: 30px;
	transition: .4s; 
  margin-right: 3px;

}

.buttons:hover{
	background-color: transparent;
	border: 2px solid  rgb(104, 104, 104);
	cursor: pointer;
}

h5{
	border-radius: 30px;
  padding: 9px 22px;
	background-color:#ffe3e3;
margin-left: -5px;
margin-right: 30px;

}
/*
.dropdown ul li  {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown ul li :hover {background-color: #f1f1f1}
*/
    </style>
  </head>
  
  <body>
    <div class="header" >
      <image src="../images/webLogo.jpeg" class="logo" alt="BABYCARE Logo">
        <ul>
          <li ><a href="../php/HomeParent.php">Home</a></li>
          <li><a href="../php/viewjobreq.php">Job Request</a></li>
          <li style="text-decoration:underline ;" ><a href="../php/postJobReq.php">New Request</a></li>
          <li><a href="../php/offerList.php">Offer List</a></li>
          <li><a href="../php/PreviousBookingPP.php">Previous Booking</a></li>
          <li><a href="../php/CurrentBookingPP.php">Current Booking</a></li>
      
      </ul>
  
  <div class="dropdown">
    <image src="../images/userIcon.png" class="image" alt="User Icon">
    <ul>
    
        <li style="margin-bottom:14px ;" ><a href="ViewParentProfile.html" >View Profile</a></li><br>
        <li><a href="#"><br></a></li>
        <li><a href="signout.php">Sign-Out</a></li>
    
    </ul>
    
    </div>
    </div> 
  
  
    <!--------- Container -------->
  
    <div class="container2" style="height:550px; width: 800px; padding-left: 40px; "> 
      <h5>Please Fill Out The Information Below:</h5>

      <div class=box style="	display: block;">
            <div class="pra" style="  font-family: 'Courier New', monospace;"> 
            <!-----   -->
  <form method="post" action = "JobReq1.php">


<div class="cont1" style="margin-top:40px ;">


  <div> 
    <button class="add_form_field">Add Child &nbsp; 
      <span style="font-size:16px; font-weight:bold;">+ </span>
     </button>
    <lable> Name:<input type="text" name="name" size="12" maxlength="20" value="" required>
    <lable> Age:
      <input name="age" type="text" size="4" maxlength="40" value="" style="max-width:50px" required>
     </div>

</div>



<!--   
    <lable> Number of children:    
        <input name="numberchildren" type="number" size="1"  value="2"  style="max-width:50px">
        <br> <br>      

     
    <lable> Name:
      <input name="name" type="text" size="12" maxlength="20" value=""  >
      <lable> Age:
      <input name="age" type="text" size="3" maxlength="40" value="" >
  <br>
  <lable> Name:
  <input name="name" type="text" size="12" maxlength="20" value=""  >
  <lable> Age:
  <input name="age" type="text" size="3" maxlength="40" value="" >
  -->
   <br>   <br>

   <label for="Service">Choose Service Type:</label>
   <select name="CareType" id="servicetype" style="max-width:350px ;max-height:55px;  ">
    <option value="DayCare">Daytime Babysitting</option>
    <option value="DayCare">Night time Babysitting</option>
    <option value="DayCare">Infant Care</option>
   <option value="DayCare">Newborn care</option>
   <option value="DayCare">Special needs care</option>
   <option value="Full Day">Mother's helper</option>
   <option value="DayCare">After-school Babysitting</option>
   <option value="HelpinHomeWork">Help with HomeWork</option>

</select>

  <lable> 
<!---
  <label for="day">   -   Day:</label>
  <select name="day" id="day" style="max-width:150px ;max-height:55px;  ">
  <option value="Saturday">Saturday</option>
  <option value="Sunday">Sunday</option>
  <option value="Monday">Monday</option>
  <option value="Tuesday">Tuesday</option>
  <option value="Wednesday">Wednesday</option>
  <option value="Thursday">Thursdayy</option>
  <option value="Friday">Friday</option>
-->
</select>
<br><br><br>
<label for="date">Date:</label>
  <input name="Date" type="date" id="ReqDate" required>
  <label for="Time">   -   From:</label>
  <input name="time1" type="time"  required>
  
  <label for="Time">   -   To:</label>
  <input name="time2" type="time" required >
  <br><br> <br><br>

  </lable>

  <input class="Buttons" type="submit" value="Submit" style="  margin-left: 270px; color: rgb(104, 104, 104); font-family: 'Courier New', Courier, monospace;">
    <input class="Buttons" type="reset" value="Clear" style="  color: rgb(104, 104, 104);font-family: 'Courier New', Courier, monospace;">
  </form> 
   
      </div>
    </div>
      </div>
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