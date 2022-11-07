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
                       if(isset($_POST['priceoffer']))
                       $price = $_POST['priceoffer'];
                       //$babysitterEmail = $_SESSION['Email'];
                       $babysitterEmail =  "NorahX@outlook.com"; //$_SESSION['Email'];
                       $babysitterName = "Norah"; //$_SESSION['First_Name'];
                       $pending="pending";


                       $sql = "INSERT INTO 'offers' (Price, Create_At , request_Id, Email , status , BabySitter_Name ) VALUES ('$price', now() , '$id', '$babysitterEmail', '$pending' , '$babysitterName' )";
                       mysqli_query($connection, $sql);
                       if($sql)
                        print(1);
                       $connection -> close();
                       
                       header("Location: ../jobOffersTesttt.php?success=1");

           ?>
$query = "INSERT INTO 'offers' (Price, Create_At , Request_Id, Email, status ,BabySitter_Name) VALUES ('$price', now() ,'$Request_Id ', '$babysitterEmail' , '$pending' , '$babysitterName')";
