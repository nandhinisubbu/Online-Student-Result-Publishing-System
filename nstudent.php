<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 50px;
}

.icon {
  padding: 15px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}


body,

.bg-img {
  /* The image used */
  background-image: url(https://static.careers360.mobi/media/presets/720X480/colleges/social-media/media-gallery/4007/2018/11/9/Campus%20View%20of%20KGISL%20Institute%20of%20Technology%20Coimbatore_Campus-View.png);

  min-height: 380px;

 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}


input[type=text], input[type=password] {
  width: 20%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 15%;
  opacity: 0.9;
}

</style>
</head>
<body>


<div class="bg-img">

<img src="kglogo.jpg" alt="LOGO" class="center" width="400" height="150">
  <form action="markn.php" method="POST" style="text-align:center">
    <h2>ONLINE RESULT PUBLISHING</h2><br><br>
    <img src="img_avatar.png" alt="Avatar" class="avatar" ><br><br>

   <label for="student name"><h3>Name</h3></label>
     <i class="fa fa-user icon"></i>
    <input type="text" placeholder="Enter Name" name="name" required>



    <form action="markn.php" method="POST">
     
    <label for="Reg_no"><h3>Register Number</h3></label>
      <i class="fa fa-envelope icon"></i>
    <input type="text" name="regno" placeholder="Enter Reg_no"><br><br>


    
    <label for="DOB"><h3>DOB</h3></label>
      <i class="fa fa-key icon"></i>
    <input type="text" placeholder="Enter DOB" name="dob" required><br>

    

    <button type="submit"  name= "search" class="btn">Login</button>

     
   </form>

     <div class="col">
  <div class="hide-md-lg">
  </div>
 <marquee><br><p>ONLY BY ADMIN</p> </marquee>
<form action ="nfac.php" style="max-width:4000px;margin:auto" method="POST">
  <button type="submit" class="btn">Faculty login</button>

  </form>
</div>
</body>
</html>






<?php


$servername = "localhost";
$username = "root";
$password = "";
$database ="online";

$conn = mysqli_connect($servername,$username,$password,$database);



$name = isset($_GET['name']) ? $_GET['name'] : '';
$regno = isset($_GET['regno']) ? $_GET['regno'] : '';
$dob = isset($_GET['dob']) ? $_GET['dob'] : '';








?>



