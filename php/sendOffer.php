<?php

session_start();
 
Define("host","localhost");
Define("Username", "root");
Define("Password", "");
Define("db", "babycare");
         
$connection = mysqli_connect(host, Username, Password, db);
         
          if(!$connection)
          die();
                      if(isset($_POST['rowval']))
                       $id = $_POST['rowval']; //job request ID that i am sending offer to
                       if(isset($_POST['Price']))
                       $price = $_POST['Price'];

                       $babysitterEmail =  "saraX@outlook.com"; //$_SESSION['Email'];
                      //السطرين احتمال خطا 
                      $query1 = "SELECT * FROM `Baby_Sitter` WHERE `Email` = '$babysitter' ;";  //to get the babysitter's Info
                      $result1 = mysqli_query($connection,$query1);
                      $row1 = mysqli_fetch_array($result1);
                      $firstName = $row1['First_Name'];
                      $pending="pending";
                      //
                       $sql = "INSERT INTO `offers` ( Price , Create_At , Request_Id, Email,  status , BabySitter_Name) VALUES ('$price', now() ,'$id', '$babysitterEmail' , '$pending' , '$firstName')";
                       
                       mysqli_query($connection, $sql);
                       if($sql)
                        print(1);
                       $connection -> close();
                       header("Location: jobOffers.php?success=1");

           ?>
