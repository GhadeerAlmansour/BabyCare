<?php
    session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
  include '../php/test.php';   

  $First_Name = $_POST['First_Name'];
  $Last_Name = $_POST['Last_Name'];
  $Email = $_POST['Email'];
  $password = $_POST['password'];
  $city = $_POST['city'];  
  $Neighborhood = $_POST['Neighborhood'];  
  $street = $_POST['street'];  

  //$filename =$_File["image"]['tmp_name'] ;  
 //$filetmpname = $_FILES['image']['name']; 
 //move_uploaded_file($filetmpname, $folder.$filename);
 $folder = 'image/';

 $showAlert = false; 
 $showError = false;
 $exists=false;

 $sql="select * From 'Parent' where (email='$Email');";
 $result = mysqli_query($conn, $sql);

 if (mysqli_num_rows($result) > 0) {
  $exits =  "email already exists";
 
  echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert">
        <strong> email exits!</strong> ''
        <button type="button" class="close" 
            data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
        </button>
       </div> ' ; 

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
}
  

$con -> close();


?>