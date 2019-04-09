<!DOCTYPE html>
<html>
<head>
	<title>login fac</title>
</head>
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
body
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

body{
	font-family: calibri;
}
.tblLogin {
	border: #95bee6 1px solid;
    background: #d1e8ff;
    border-radius: 4px;
}
.tableheader { font-size: 24px; }
.tableheader td { padding: 20px; }
.tablerow td { text-align:center; }
.message {
	color: #FF0000;
	font-weight: bold;
	text-align: center;
	width: 100%;
}
.login-input {
	border: #CCC 1px solid;
    padding: 10px 20px;
}
.btnSubmit {
	padding: 10px 20px;
    background: #2c7ac5;
    border: #d1e8ff 1px solid;
    color: #FFF;
}
</style>
<body>




<form name="frmUser" method="post" style="text-align:center" action="">
	
		<table border="0" cellpadding="10" cellspacing="1" width="500" align="center" class="tblLogin">
			<tr class="tableheader">
			<td align="center" colspan="2"><img src="img_avatar.png" alt="Avatar" class="avatar"><br>Faculty Login</td>
			
			</tr>
			<tr class="tablerow">
			<td>
				<i class="fa fa-user icon"></i>
			<input type="text" name="userName" placeholder="User Name" class="login-input"></td>
			</tr>
			<tr class="tablerow">
			<td>
				<i class="fa fa-key icon"></i>
			<input type="password" name="password" placeholder="Password" class="login-input"></td>
			</tr>
			<tr class="tableheader">
			<td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
			</tr>
		</table>
</form>


</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "online";



if(count($_POST)) {
	$conn = mysqli_connect($servername,$username,$password,$database);
	$result = mysqli_query($conn,"SELECT * FROM faculty WHERE username='" . $_POST["userName"] . "' and userpass = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo  "Invalid Username or Password!";

	} else {
		echo "You are successfully authenticated!";
		header("location:mark.php");
	}
}
?>


