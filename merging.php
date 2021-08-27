
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <style>
/*
.table-bordered {
  border-collapse: separate;
  border-spacing: 7px ;
}

 */
 
 table th{
   
 background-color:rgb(250, 100, 45);
 text-align: center;
 color:rgb(14, 5, 97); 
 }</style>
</head>
<body>
  



<?php

error_reporting('0'); 

$con = mysqli_connect("localhost","root","","scheduler") or die("ERROR :Unable to connect--Rahul $con". mysqli_connect_error());

if($con){
?>
<script>// window.confirm("connection established")</script>
<?php
}


$sql = "SELECT td.* , b.time_Slot, b.date FROM teacherdetail td left join bookings b on td.id = b.code";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table  table-striped table-bordered table-hover'><tr><th>ID</th><th>TeacherName</th><th>TeacherContact</th><th>TeacherEmail</th><th>Grade</th><th>subjects</th><th>Date</th><th>Time_SLots</th></tr><br>";
    // output data of each row

    $dt = strtotime($row["subjects"]);
    $day = date("D", $dt);
   
    while($row = $result->fetch_assoc()) {
      echo "<tr class='text-center'><td >".$row["id"]."</td><td>".$row["TeacherName"]."</td><td> ".$row["TeacherContact"]."</td><td> ".$row["TeacherEmail"]."</td><td> ".$row["Grade"]."</td><td> ".$row["subjects"]."</td><td>".$day."</td><td> ".$row["time_Slot"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }



?>

</body>
</html>
