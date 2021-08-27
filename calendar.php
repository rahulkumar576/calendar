<?php 

function build_calendar($month , $year){

// creating array containing all days
$daysOfWeek = array(' Sunday ',' Monday ',' Tuesday ','Wednesday','Thursday',' Friday ',' Saturday');

$firstDayOfMonth = mktime(0,0,0,$month,1,$year);

$numberDays = date('t',$firstDayOfMonth);

$dateComponents = getdate($firstDayOfMonth);

$monthName = $dateComponents['month'];

$dayOfWeek = $dateComponents['wday'];

// current date

$datetoday = date('Y-m-d');


$calendar = "<table class='table table-bordered text-center'>";
$calendar .="<center><h2>$monthName $year</h2>";
///// editing karna hai yahan

$calendar .= "<a class = 'btn btn-primary btn-xs' href ='?month=".date('m', mktime(0,0,0,$month-1,1,$year))."&year=".date('Y', mktime(0,0,0,$month-1,1,$year))."'>Prev Month</a>&nbsp";

$calendar .= "<a class = 'btn btn-primary btn-xs' href ='?month=".date('m')."&year=".date('Y')."'>&nbspCurrent Month</a>&nbsp";

$calendar .= "<a class = 'btn btn-primary btn-xs ' href ='?month=".date('m', mktime(0,0,0,$month+1,1,$year))."&year=".date('Y', mktime(0,0,0,$month+1,1,$year))."'>Next Month</a> </center><br />";


$calendar .="<tr>";
//creting the calendar header

foreach($daysOfWeek as $day){
$calendar .="<th class='header text-center'>$day</th>";

}
$calendar .="</tr><tr>";

$currentDay = 1;

if($dayOfWeek > 0){

    for($k =0; $k < $dayOfWeek; $k++)   
    {
          $calendar .="<td class='empty'></td>";
    }

} 



$month = str_pad($month ,2,"0",STR_PAD_LEFT);

while($currentDay <= $numberDays){
   if($dayOfWeek==7){
        $dayOfWeek = 0;
        $calendar .="</tr><tr>";
     }
$currentDayRel = str_pad($currentDay ,2,"0",STR_PAD_LEFT);
$date = "$year-$month-$currentDayRel";
/*/////

if($dateToday ==$date)*/
$dayname = strtolower(date('l',strtotime($date)));

$eventNum= 0;
    
$today = $date == date('Y-m-d')?"today" : "";

if($date < date('Y-m-d'))
{
    $calendar .="<td ><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'>N/A</button></td>";
}else
{
    $calendar .="<td class='$today'><h4>$currentDay</h4><a href='book.php?date=".$date."' class ='btn btn-success btn-xs'>Book</button></td> ";

}

/* trial of bookingf
$dayname = strtolower(date('l',strtotime($date)));

$eventNum= 0;
    
$today = $date == date('Y-m-d')?"today" : "";

if($date < date('Y-m-d')){
    $calendar .="<td><h4>$currentDay</h4><button class='btn btn-danger btn-xs'>N/A</button>";
}else{
    $calendar .="<td class ='$today'><h4>$currentDay</h4><a href='book.php?date=".$date."' class = 'btn btn-success btn-xs'> Book</a></td>";

}
//*/

$currentDay++;
$dayOfWeek++;


}
// for counting the number of days in a week to continue the columns of a row ;
if($dayOfWeek < 7){

    $remainingDays = 7- $dayOfWeek;

    for($i=0; $i<$remainingDays; $i++)
    {
         
        $calendar .="<td class='empty'></td>";
    }
}

$calendar .="</tr>";
$calendar .="</table>";

echo $calendar;

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>

<div class="container">
  <div class="row">
     <div class="col-md-9">
         
         <?php
 
 $dateComponents = getdate();
 if(isset($_GET['month']) && isset($_GET['year'])){

    $month = $_GET['month'];
    $year = $_GET['year'];

 }else{

    $month = $dateComponents['mon'];
    $year = $dateComponents['year'];

 }

 echo build_calendar($month , $year);

         ?>

     </div>
   </div>
</div>
    
</body>
</html>