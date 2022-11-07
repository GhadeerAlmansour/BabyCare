<?php

session_start();
 
Define("host","localhost");
Define("Username", "root");
Define("Password", "");
Define("db", "babyare");
         
$connection = mysqli_connect(host, Username, Password, db);
         
          if(!$connection)
          die();
                      if(isset($_POST['rowval']))
                       $id = $_POST['rowval']; //job request ID that i am sending offer to
                       if(isset($_POST['Price']))
                       $price = $_POST['Price'];
                       $babysitterEmail = $_SESSION['Email'];
                      //السطرين احتمال خطا 
                       $queryN = " SELECT   First_Name , FROM `baby_sitter` WHERE Email= '$babysitterEmail'"; 
                       $resultN = mysqli_query($connection , $queryN);
                      //
                       $sql = "INSERT INTO 'offers' (Price, Create_At , Request_Id, Email, , status , BabySitter_Name) VALUES ('$price', now() ,'$id', '$babysitterEmail' ,'pending' , '$resultN')";
                       
                       mysqli_query($connection, $sql);
                       if($sql)
                        print(1);
                       $connection -> close();
                       header("Location: ../jobOffers.php?success=1");

           ?>
