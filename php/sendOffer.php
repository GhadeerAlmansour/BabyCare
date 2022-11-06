<?php

session_start();
 
Define("host","localhost");
Define("Username", "root");
Define("Password", "");
Define("db", "BabyCare");
         
$connection = mysqli_connect(host, Username, Password, db);
         
          if(!$connection)
          die();
                      if(isset($_POST['rowval']))
                       $id = $_POST['rowval']; //job request ID that i am sending offer to
                       if(isset($_POST['price']))
                       $price = $_POST['price'];
                       //$babysitterid = $_SESSION['babysitterID'];
                       $sql = "INSERT INTO Offers (price, requestID, babysitterOfferID, createdAt) VALUES ('$price', '$id', '$babysitterid', now())";
                       
                       mysqli_query($connection, $sql);
                       if($sql)
                        print(1);
                       $connection -> close();
                       header("Location: ../ jobOffers.php?success=1");

           ?>
