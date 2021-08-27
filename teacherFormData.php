<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher_details</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
<?php

if(isset($_POST['submit'])){

    $checkbox1=$_POST['timeSlot'];  
    $chk="";  
    foreach($checkbox1 as $chk1)  
       {  
          $chk .= $chk1."  ||  ";  
       }  
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $contact = $_POST['contact'];
    $grade = $_POST['grade'];
    $type = $_POST['type'];
 



?>
<?php

$conn = mysqli_connect("localhost","root","","scheduler")or die("ERROR : Unable to connct$conn".mysqli_connect_error());

$sql = "INSERT INTO teacherdetail(TeacherName,TeacherContact,TeacherEmail,type,subjects,Grade) VALUES('$name','$email','$contact','$type','$chk','$grade')";

$result = mysqli_query($conn,$sql);

if($result){
    echo "successful";
}
else{
    echo "not inserted";
}


}
?>