<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/v4-shims.css">
	<style>
           .backimage{
                      background-image:url("laptop.jpg");
                      height:100%;
                      background-position:center;
                      background-repeat: no-repeat;
                      background-size: cover;
                      padding:0;
                      margin:0;   
                   }
           .username{
          	       border: 2px solid black;
                   padding: 10px;
                   margin-left:  10px;
                   border-radius: 5px;
                   width:220px;
                   }
            .username1{
          	       border: 4px solid black;
                   padding: 10px;
                   margin-left:  10px;
                   border-radius: 5px;
                   width:220px;
                   }
            .user {
                  font-family: Helvetica;
                  font-size:  1.2vw;
                  }
            .user1 {
                  font-family: Helvetica;
                  font-size:  1.35vw;
                  }
           .heading{
                     font-family: Helvetica;
                     font-size: 1.8vw;
                   }
            .submit{
            	   border: 2px solid black;
                   height:40px;
                   width:180px;
                   margin-left:  25px;
                   border-radius: 6px;
                   }
            .container{
                        position:relative;
                        border:4px solid black;
                        text-align:left;
                        top:80px;
                        left:450px;
                        width: 350px;
                        height: 380px; 
                        border-radius: 20px;
                        padding: 30px;
                        background-color:rgba(190,190,190,0.7);
                      }
       </style>
    </head>
<body>
<?php
   include('connection3.php');
   $ambname = $_POST['ambno'];
   $drname = $_POST['dname'];
   $mob = $_POST['number'];
   $query = "INSERT into amb VALUES('$ambname' , '$drname' , '$mob')";
   
   $result = mysqli_query($conn , $query);

   if($result)
   {
   	  $success = "New Record Successfully Added";
   }
   else
   {
   	  $success = "There is problem in connecting it to Database";
   }
?>
<div class = "backimage">
<form class = "container">
	<legend class = "heading">Welcome to IIIT-A Healthcentre</legend>
	<br>
	<label class ="user1">Your Details</label>
	<br><br><br>
	<label class = "username">Ambulance Number : <?= $ambname ?></label>
	<br><br><br><br>
	<label class = "username">Driver Name : <?= $drname ?></label>
	<br><br><br><br>
	<label class ="username">Contact Number : <?= $mob ?></label>
	<br><br><br><br>
	<label class = "username1"><?= $success ?></label>
	<br><br>
</form>
</div>
</body>
</html>
