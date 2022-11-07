<?php
include 'Connection.php';
$connection = mysqli_connect(host,Username,Password,db);

if(!$connection)
   die();

$query = "SELECT * FROM 'Requests' WHERE Status = 'Pending';";

$result = mysqli_query($connection,$query);

if($result){
   if($result -> num_rows > 0){
      
    print('<div class="box mb-5">
      <table id="requests_table">
         <thead>
         <tr>
           <th class="text-center pt-4 pb-2">Parent name:</th>
           <th class="text-center pt-4 pb-2">child1 name\Age:</th>
           <th class="text-center pt-4 pb-2">child2 name\Age:</th>
           <th class="text-center pt-4 pb-2">child3 name\Age:</th>
           <th class="text-center pt-4 pb-2">child4 name\Age:</th>
           <th class="text-center pt-4 pb-2">Type of Service</th>
           <th class="text-center pt-4 pb-2">Date</th>
           <th class="text-center pt-4 pb-2">From</th>
           <th class="text-center pt-4 pb-2">To</th>
           <th class="text-center pt-4 pb-2"> price</th>
         </tr>
         </thead>
         
         <tbody id="jobs"></tbody></table></div>');
         while($row = mysqli_fetch_array($result)){ 
           
            //$query = "SELECT * FROM 'Requests' WHERE status = 'Pending';";
            //$pet_result = mysqli_fetch_array(mysqli_query($connection,$query));   
            echo "<script> document.getElementById('jobs').innerHTML +='" ;
            echo "<tr name= ".$row['Parent_name']."\'>" ;
            //echo "<td><button class=\'btns\' onclick=\'showPetProfile(this)\'><img class=\'t-img\' src=\'data:image/png;charset=utf8;base64,".base64_encode($pet_result['Photo'])."\' alt=\'Pet Photo\'></button></td>";
            echo "<td>".$row['Child1_name1'].$row['Age1']"</td>";
            echo "<td>".$row['Child1_name2'].$row['Age2']"</td>";
            echo "<td>".$row['Child1_name3'].$row['Age3']"</td>";
            echo "<td>".$row['Child1_name4'].$row['Age4']"</td>";
            echo "<td>".$row['Service']."</td>";
            echo "<td>".dateFormat($row['Date'])."</td>";
            echo "<td>".$row['Time1']."</td>";      
            echo "<td>".$row['Time2']."</td>";
            echo "<td> <input price = "price" type="text" size="17" maxlength="20" placeholder="price SR" >";
            echo "<td><a class="button" href="" >send offer</a></td>";

            //echo "<td><button class=\'btns\' onclick=\'showNote(this)\'>";
           // echo "<i class=\'bi bi-chat-square-dots-fill noteIcon\'></button></td>";          
          //  echo "<td><i class=\'bi bi-check-circle-fill accept\'></i><i class=\'bi bi-x-circle-fill decline\'></i></td>";
            echo "</tr>'";           
            echo "</script>";      
         }
   }
   else{
    //  print('<div class="d-flex text-center noAppt pt-5">
            //<div class="d-flex flex-column">
           //  <img src="../Images/undraw_no_data.png" height="330px">
           //  <p class="fs-4 mt-5 w-100">No Appointment Requests</p>
         //   </div></div>');
   }
}
function timeFormat($time){
   $time = explode(":",$time);
   if($time[0] < 12){
     if($time[0] == 0)
       $time = ($time[0]+12).":".$time[1]." AM";
     else{
       $time = $time[0].":".$time[1]." AM";
     }
   }
   else{
       if($time[0] == 12){
           $time = $time[0].":".$time[1]." PM";
       }
       else{
           $time = ($time[0]-12).":".$time[1]." PM";
       }
   }
   return $time;
}
function dateFormat($date){
   $date = explode("-",$date);
   $date = $date[2]."/".$date[1]."/".$date[0];
   return $date;
}

$connection -> close();
?>
