<?php
    session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {        
  include '../php/test.php'; 
 require_once("Connection.php");

  $con = mysqli_connect('localhost','root','BabyCare');

  if(mysqli_connect_errno())
      die("Fail to connect to database :" . mysqli_connect_error());

  


  $First_Name = $_POST['First_Name'];
  $Last_Name = $_POST['Last_Name'];
  $Email = $_POST['Email'];
  $password = $_POST['password'];
  $city = $_POST['city'];  
  $Neighborhood = $_POST['Neighborhood'];  
  $street = $_POST['street'];  
  if($_FILES['profile-img']['size'] > 0){
    $img = $_FILES['profile-img']['tmp_name'];
    $img = addslashes(file_get_contents($img));
  }
  else{
    $img = null;
   } 

  
   $validateEmail = preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $Email);
        $specialChars = preg_match('@[^\w]@', $Password);
        if(!$validateEmail){
            $_SESSION['Sign_up_error'] = "Invalid email address.";
            header("Location: ../signup.php"); 
                exit;
        }
        if( !$specialChars && strlen($Password) < 8) {
            $_SESSION['Sign_up_error'] = 'Password must be at leat 8 characters and contain at least one special character #,&,..';
            header("Location: ../signup.php"); 
            exit;
        }
        if(strlen($Password) < 8){
            $_SESSION['Sign_up_error'] = 'Password should be at leat 8 characters!';
            header("Location: ../signup.php"); 
            exit;
        }
       
        
        if( !$specialChars ) {
            $_SESSION['Sign_up_error'] = 'Password must contain at least one special character #,&,..';
            header("Location: ../signup.php"); 
            exit;
        }
        

        //check if the email exits 
        $query = "SELECT * FROM Parent WHERE Email = '$Email' ";
        $Parent_result = mysqli_query($con,$query);
        
        if (mysqli_num_rows($Parent_result)>0)
        {
            $_SESSION['Sign_up_error'] = 'Email exists!';
            header("Location: ../signup.php"); 
            $con -> close();
            exit;
        }
        
        
        if($img == null)
  $query = "INSERT INTO `Parent` (First_Name, Last_Name, Email, password, city , Neighborhood ,street ) values('$First_Name', '$Last_Name', '$Email', '$password', '$city', '$Neighborhood' ,'$street')";
        else
        $sql = "INSERT INTO `Parent` (First_Name, Last_Name, Email, password, city , Neighborhood ,street , image) values('$First_Name', '$Last_Name', '$Email', '$password', '$city', '$Neighborhood' ,'$street' , '$img' )";
        if (mysqli_query($con, $query)) {
            echo "New record created successfully !";
            $_SESSION['email'] = $Email ; //!sure if email
            header("Location: ../HomeParent.html");
            $con -> close();
            exit;
        } else {
            echo "Error: ".mysqli_error($con);
  }

 /* $showAlert = false; 
 $showError = false;
 $exists=false; 
*/

 /* $sql="select * From 'Parent' where email='$Email';";
 $result = mysqli_query($conn, $sql);

 
  $sql = "INSERT INTO `Parent` (First_Name, Last_Name, Email, password, city , Neighborhood ,street ) values('$First_Name', '$Last_Name', '$Email', '$password', '$city', '$Neighborhood' ,'$street')";
 */


























/*
if (mysqli_num_rows($result) > 0) {
  $exits =  "email already exists";
 
  echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert">
        <strong> email exits!</strong> ''
        <button type="button" class="close" 
            data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
        </button>
       </div> '; 

}
else if (! preg_match('/^[0-9]{10}+$/', $phone)  {
    echo "Invalid Phone Number";   
   
    echo ' <div class="alert alert-danger 
    alert-dismissible fade show" role="alert">
<strong> invalid phone number!</strong> ''
<button type="button" class="close" 
    data-dismiss="alert" aria-label="Close"> 
    <span aria-hidden="true">×</span> 
</button>
</div> ';
}
else{
  $sql = "INSERT INTO `Parent` (First_Name, Last_Name, Email, password, city , Neighborhood ,street ) values('$First_Name', '$Last_Name', '$Email', '$password', '$city', '$Neighborhood' ,'$street')";
 
  echo  '<div class="alert alert-success 
  alert-dismissible fade show" role="alert">

  <strong>Success!</strong> Your account is 
  now created and you can login. 
  <button type="button" class="close"
      data-dismiss="alert" aria-label="Close"> 
      <span aria-hidden="true">×</span> 
  </button> 
</div> '; 
} */

<<<<<<< HEAD
?>


=======
?>
>>>>>>> 1ea9856a2292588824997af2ba1d8cd4b5f59131
