


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <style>
        body{
            background-color: lightyellow;
        }
        .container{
            height:100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color:black;
            top:200px;
        }
        .box{
            display:flex;
            flex-direction: column;
            font-size: 16px;
            font-weight: bold;
            height:350px;
            width:300px;
            margin:20px;
            padding:20px;
            background-color:lightgrey;
            margin-left:20px; 
            box-shadow: 10px 10px 15px grey;  
        }
        input[type=text],input[type=password]{
            width:240px;
            height: 30px;
            border-radius: 20px;
            border: 1px solid blue;
        }

        input[type=text]:focus,input[type=password]:focus{
            border-radius: 20px;
            border: 1px solid blue;

            outline:none;
            color:blue;
        }
        button{
            margin-top: 20px;
            width:250px;
            height: 40px;
            border-radius: 20px;
            background-color: lightseagreen;
        }
        button:focus{

            border-radius: 20px;
            border: 1px solid blue;
            outline:none;
            color:blue;
        }
        h2{
            font-size:24px;
            font-weight: bold;
        }
        #myInput{
            margin-left:0px;
        }
        #showpassword{
            font-size: 14px;
            font-style: italic;
            font-weight: normal;
            color:black;
            
            
        }
    </style>
</head>
<body>
    
<div class="container"> 
    <div class="box">
        <form action="#" method="POST">
        <?php

if(isset($_POST['submit'])){
    if(isset($_GET['user_id']) && isset($_GET['password'])){
      echo  $userId= $_GET['user_id'];
      echo  $userId= $_GET['password'];


    }
}



?>
    <h2 class="text-center">Login form</h2><br>

    <label for ="user_id">User_id :</label>
    <input type ="text" placeholder="user_id" name="user_id" value="<?php echo $userId;  ?>" required><br>
    <label for ="password">Password :</label>
    <input type ="password" placeholder ="password" name ="password" value="<?php echo $password;  ?>" id="myInput"    required><br>
    <input type="checkbox"  onclick="myFunction()" placeholder="show password">
  <div class="label" id="showpassword">  
    <label for="show password" ></label> show password </div>


     <button type ="submit" name="submit" value="submit"> Login </button>
     </form>
    </div>
</div>


<script>
    function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>


</body>
</html>




