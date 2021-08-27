<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
<div class="table-responsive">
<form action="EXCELShow.php" method="POST">

<input type="submit" name = "export_excel"   value ="export"class = "btn btn-success">

</form>

</div>
<?php

$conn = mysqli_connect("localhost","root","","scheduler")or die("ERROR : Unable to connect $conn".mysqli_connect_error());

$sql = "SELECT * FROM bookings";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table table-striped table-hover'><tr><th>ID</th><th>CODE</th><th>NAME</th><th>Time_Slot</th></tr><br>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["id"]."</td><td>".$row["code"]."</td><td> ".$row["name"]."</td><td> ".$row["time_slot"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }



?>

    
</body>
</html>