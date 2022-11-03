<?php 
    session_start();
    // require_once() function can be used to include a PHP file in another one, when you may need to include the called file more than once. If it is found that the file has already been included, calling script is going to ignore further inclusions.
   // require_once("CONFIG-DB.php");
   //include '../php/test.php'; 
   //require_once("../php/test.php");   
  //  $con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);
 // $conn=  mysqli_connect('localhost','root','','BabyCare');

    if(mysqli_connect_errno($conn))
        die("Fail to connect to database :" . mysqli_connect_error());

    $email = $_POST['email_singIn'];
    $password = $_POST['password_signIn'];

    $query = "SELECT * FROM Parent WHERE Email= '".$email."' AND password= '".$password."'";

    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) ==1 ){
      echo "LoGIN";
        $_SESSION['email_singIn'] = $Email;
        mysqli_close();
        echo "HI";
   header("Location: ../html/HomeParent.html"); //../html/HomeParent.html
    }
    else {
        mysqli_close();
      header("Location: ../html/home.php?error=Wrong Username/Password");
    }
?>
