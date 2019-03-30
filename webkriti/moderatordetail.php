<html>
<head>
	<title>Ambulance Booking</title>
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
            .user {
                  font-family: Helvetica;
                  font-size:  1.2vw;
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
                        top:5px;
                        left:450px;
                        width: 350px;
                        height: 500px; 
                        border-radius: 20px;
                        padding: 30px;
                        background-color:rgba(190,190,190,0.7);
                      }
    </style>
<body>
<?php 
    include('connection1.php');
	$email = $_POST["mail"];
	$query = "SELECT * from h_staff where mail = '$email' ";
	 
	$result = mysqli_query($conn , $query);
	if(mysqli_num_rows( $result ) == 1)
	{
	  $user = mysqli_fetch_assoc($result);	
	  $mail_id = $user['username'];
	}
	else
	{
		echo 'User is not Valid';
	}
?>
<div class = "backimage">
<form class = "container" action = "asubmit.php" method = "POST" target = "_blank">
	<legend class = "heading">Welcome to IIIT-A Healthcentre</legend>
	<br><br>
	<label class = "username">Username : <?= $mail_id ?></label>
	<br><br><br>
	<label class = "user">Ambulance Number</label>
	<br><br>
	<i class="fas fa-ambulance"></i>
		<input type = "text" class = "username" name = "ambno" placeholder = "UP-2073-123" >
		<br><br>
    <label class = "user">Driver Name</label>
    <br><br>
    <i class="fa fa-user"></i>
       <input type = "text" class = "username" name = "dname" placeholder = "Suresh Kumar" >
       <br><br>
    <label class = "user">Mobile Number</label>
    <br><br>
    <i class="fa fa-phone" aria-hidden="true"></i>
        <input type = "tel" name = "number" class = "submit" pattern = "+[0-9]{2}-[0-9]{10}" placeholder = "+91-1234560789" required>
    <br><br><br>
    <i class="fas fa-lock-alt"></i>
        <input type = "submit" value = "Submit" class = "submit">
        <br><br>
     <hr>
     <br>
</form>
</div>
</body>
</html>
