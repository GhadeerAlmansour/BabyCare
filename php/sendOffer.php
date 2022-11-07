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
                       $sql = "INSERT INTO Offers (Price, Request_ID, Email, Create_At , status) VALUES ('$price', '$id', '$babysitterEmail', now() ,'pending')";
                       
                       mysqli_query($connection, $sql);
                       if($sql)
                        print(1);
                       $connection -> close();
                       header("Location: ../jobOffers.php?success=1");

           ?>
