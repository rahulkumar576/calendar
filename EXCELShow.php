<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <titl></title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>

<?php


$conn = mysqli_connect("localhost","root","","scheduler") or die("ERROR : Unable to connect $conn".mysqli_connect_error());


$output = "";

if(isset($_POST["export_excel"]))
{
    $sql = "SELECT * FROM bookings ORDER BY ID DESC";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0) {

        $output .= '
         <>table class ="table" bordered = "1">
         <tr>
         <th>ID</th>
         <th>CODE</th>
         <th>NAME</th>
         <th>TIME_SLOT</th>
         </tr>          
         
        ';
        while($row = mysqli_fetch_array($result)){
            $output .='
             <tr>
             <td>'.$row["ID"].'</td>
             <td>'.$row["CODE"].'</td>
             <td>'.$row["NAME"].'</td>
             <td>'.$row["TIME_SLOT"].'</td>

             </tr>
            ';
        }
        $output .='</table>';

        header ("content-Type:application/xls");
        header("content-Disposition:attachment,filename :filename.xls");

        echo $output;
    }

}


?>
    
</body>
</html>