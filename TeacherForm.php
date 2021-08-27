
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher_Form</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
<section id="cover">
     <div id="cover-caption">
         <div id="container" class="text-center form-group">
             <div class="col-sm-10 col-sm offset-1">
                
                 <div class="info-form">
                 <form action="teacherFormData.php" method="POST" class="form-groupform-control">
                    <div class="form-group">
                       <!-- <label class="sr-only">Name</label>-->
                        <input type="text" class="form-control" name="Name" placeholder="Name">
                    </div><br>
                    <div class="form-group">
                        <!-- <label class="sr-only">Email</label>-->
                        <input type="email" class="form-control" name="Email" placeholder="email-id">
                    </div>
                    <br>
                    <div class="form-group">
                       <!--  <label class="sr-only">contact</label> -->
                        <input type="text" class="form-control" name="contact" placeholder="contact">
                    </div><br>
                    <div class="form-group">
                       <!--  <label class="sr-only">contact</label> -->
                        <input type="text" class="form-control" name="type" placeholder="Type">
                    </div><br>
                     <div class="form-group">
                       <!--   <label class="sr-only">grade</label>-->
                        <input type="text" class="form-control" name="grade" placeholder="grade">
                    </div><br>
                     <div class="form-group"><!--
                        <label class="sr-only">subject</label>
                        <input type="text" class="form-control" name="subject" placeholder="subject">
-->


<!---    EDITING LINES ----->
<table  class="table table-striped">  
<tr>  
      <td colspan="1"  placeholder ="select subject">Select subject</td>  
   </tr>  
   <tr>  
      <td>logiMath</td>  
      <td><input type="checkbox" name="timeSlot[]" value="logiMaths"></td>  
   </tr> 
   
   <tr>  
      <td>leadership communication</td>  
      <td><input type="checkbox" name="timeSlot[]" value="leadership communication"></td>  
   </tr> 
   <tr>  
      <td>STEM</td>  
      <td><input type="checkbox" name="timeSlot[]" value="STEM"></td>  
   </tr> 
   <tr>  
      <td>APPLIED MATHS</td>  
      <td><input type="checkbox" name="timeSlot[]" value="APPLIED MATHS"></td>  
   </tr> 
   <tr>  
      <td>STREAM</td>  
      <td><input type="checkbox" name="timeSlot[]" value="STREAM"></td>  
   </tr> 
   </table> 
</div> <br>





<!---END  EDITING  ---->
                    
                    <button type="submit" name ="submit" class="btn btn-success ">Submit</button>
                </form>
                </div>
                <br>

                <a href="#nav-main" class="btn btn-secondary-outline btn-sm" role="button">&darr;</a>
             </div>
         </div>
     </div>
 </section>
    
</body>
</html>
<?php






?>