<?php

$name ="";
$code ="";
    if(isset($_GET['date'])){
        $date = $_GET['date'];
    }
  
    echo "<center><h2>".$date."</h2><center>";
   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
<style>
#span{
   margin-left:200px;
}
</style>
</head>
<body>
 

<form action="#" method="post" enctype="multipart/form-data">  
   <div style="border-radius:6px;margin:10px 10px"> 
   
   <div class="input">
       <input type="text" placeholder="teacherName" name="teacherName">   &nbsp; <br><br>   
       <input type="text" placeholder="teacherCode" name="teacherCode">


   </div>
   <br>
<table border="1" class="table table-striped">  
   <tr>  
      <td colspan="2">Select TimeSlot:</td>  

   </tr> 
   <tr>  
      <td>Same as Previous Day</td>  
      <td><input type="checkbox" name="timeSlot[]" value=".<?php echo $chk ?>."></td>  
   </tr>  
   
   <tr>  
      <td>9:00<sup>AM</sup> - 10:00<sup>AM</sup></td>  
      <td><input type="checkbox" name="timeSlot[]" value="9:00 AM- 10:00AM"></td>  
   </tr>  
   <tr>  
   <td>10:00<sup>AM</sup> - 11:00<sup>AM</sup></td>  
      <td><input type="checkbox" name="timeSlot[]" value="10:00<sup>AM</sup>- 11:00<sup>AM</sup>"></td>  
   </tr>  
   <tr>  
   <td>11:00<sup>AM</sup> - 12:00<sup>PM</sup></td>   
      <td><input type="checkbox" name="timeSlot[]" value="11:00<sup>AM</sup>- 12:00<sup>PM</sup>"></td>  
   </tr>  
   <tr>  
   <td>12:00<sup>PM</sup> - 1:00<sup>PM</sup></td>   
      <td><input type="checkbox" name="timeSlot[]" value="12:00<sup>PM</sup>- 1:00<sup>PM</sup>"></td>  
   </tr>  <tr>  
   <td>1:00<sup>PM</sup> - 2:00<sup>PM</sup></td>   
      <td><input type="checkbox" name="timeSlot[]" value="1:00<sup>PM</sup>- 2:00<sup>PM</sup>"></td>  
   </tr>  <tr>  
   <td>2:00<sup>PM</sup> - 3:00<sup>PM</sup></td>   
      <td><input type="checkbox" name="timeSlot[]" value="2:00<sup>PM</sup>- 3:00<sup>PM</sup>"></td>  
   </tr>  <tr>  
   <td>3:00<sup>PM</sup> - 4:00<sup>PM</sup></td>   
      <td><input type="checkbox" name="timeSlot[]" value="3:00<sup>PM</sup>- 4:00<sup>PM</sup>"></td>  
   </tr>  <tr>  
   <td>4:00<sup>PM</sup> - 5:00<sup>PM</sup></td>   
      <td><input type="checkbox" name="timeSlot[]" value="4:00<sup>PM</sup>- 5:00<sup>PM</sup>"></td>  
   </tr>  <tr>  
   <td>5:00<sup>PM</sup> - 6:00<sup>PM</sup></td>   
      <td><input type="checkbox" name="timeSlot[]" value="5:00<sup>PM</sup>- 6:00<sup>PM</sup>"></td>  
   </tr>  <tr>  
   <td>6:00<sup>PM</sup> - 7:00<sup>PM</sup></td>   
      <td><input type="checkbox" name="timeSlot[]" value="6:00<sup>PM</sup>- 7:00<sup>PM</sup>"></td>  
   </tr>  <tr>  
   <td>7:00<sup>PM</sup> - 8:00<sup>PM</sup></td>   
      <td><input type="checkbox" name="timeSlot[]" value="7:00<sup>PM</sup>- 8:00<sup>PM</sup>"></td>  
   </tr>  <tr>  
   <td>8:00<sup>PM</sup> - 9:00<sup>PM</sup></td>   
      <td><input type="checkbox" name="timeSlot[]" value="8:00<sup>PM</sup>- 9:00<sup>PM</sup>"></td>  
   </tr>  
   <tr>  
      <td colspan="2" align="center"><input type="submit" value="submit" name="sub"></td>  
   </tr>  
</table>  
</div>  
</form>  

<?php  
if(isset($_POST['sub']))  
{  

    $checkbox1=$_POST['timeSlot'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1." || ";  
   }  


//$host="localhost";//host name  
//$username="root"; //database username  
//$word="";//database word  
//$db_name="sub_db";//database name  
//$tbl_name="request_quote"; //table name  
$con=mysqli_connect("localhost", "root", "","scheduler")or die("cannot connect");//connection string  
$teacherName = $_POST['teacherName'];
$teacherCode = $_POST['teacherCode'];

$checkbox1=$_POST['timeSlot'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1." || ";  
   }  
   //echo $chk."<br />";
   //echo$teacherCode;
   $sql = "INSERT INTO bookings(date,code,name,time_Slot) VALUES ('$date','$teacherCode','$teacherName','$chk')";
    $query=mysqli_query($con,$sql);  

if($query)  
   {  
      header("Location:https://localhost/atul_sir/calendar/calendar.php");  
   }  
else  
   {  
      echo'<br>'.mysqli_connect_error().'<script>alert("Failed To Insert")</script>';  
   } 
}  
?> 
</body>
</html>