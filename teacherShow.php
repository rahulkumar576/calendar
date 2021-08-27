<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher_Show</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
<?php

$conn = mysqli_connect("localhost","root","","scheduler")or die("ERROR : Unable to connect $conn".mysqli_connect_error());

$sql = "SELECT * FROM teacherdetail";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table table-striped table-hover'><tr><th>ID</th><th>TeacherName</th><th>TeacherContact</th><th>TeacherEmail</th><th>Grade</th><th>subjects</th></tr><br>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["id"]."</td><td>".$row["TeacherName"]."</td><td> ".$row["TeacherContact"]."</td><td> ".$row["TeacherEmail"]."</td><td> ".$row["Grade"]."</td><td> ".$row["subjects"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }



?>

    
</body>
</html>