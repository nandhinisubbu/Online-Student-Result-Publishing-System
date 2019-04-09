<!DOCTYPE html>
<html>
<head>
	<title>marksheet</title>
</head>
<!DOCTYPE html>
<html>
<head>
	<title>result</title>
</head>
<style>
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}

body
{
 border-radius: 30px;
 border-style: double;
 border-color: blue;
 position: absolute;
 width: 850px;
 height: 900px;
 top: 15px;
 left: 300px;
 padding: 30px 30px 50px 30px;
 background-color: #CCC;
}
#tbl,#tbl2
{
border-collapse:collapse;
font-size:18;
font-family:Century Gothic;
}
.demo
{
position:absolute;
left:35px;
top:380px;
font-size:17;
font-family:Arial;
font-weight:bold;
margin-top:35px;
border-collapse:collapse;
}
#demoname
{
font-size:15px
}
.btn
{
position:absolute;
top:355px;
left:720px;
}
</STYLE>
</html>
<body>


	<form action="mark.php" class="modal-content animate" >

		<table>
			<h1 style="text-align:center">STUDENT MARKSHEET </h1>
			<tr>
				<td><h2>Fathers Name</h2></td>
				<td><input type=text name=fname size=50></td>
			</tr>

			<tr>
				<td><h2>Student Name1</h2></td>
				<td><input type=text name=student size=50></td>
			</tr>

			<tr>
				<td><h2>Register number</h2></td>
				<td><input type=text name=regno size=50></td>
			</tr>

			<tr>
				<td><h2>Dob</h2></td>
				<td><input type=text name=dob size=50></td>
			</tr>

			<tr>
				<td><h2>Gender</h2></td>
				<td><input type=radio name=gender size=50 value="Male">Male<input type=radio name=gender size=50 value="Female">Female</td>
			</tr>

			<tr>
				<td><h2>Technical English</h2></td>
				<td><input type=text name=english size=50></td>
			</tr>

			<tr>
				<td><h2>Enginnering Mathematics-2</h2></td>
				<td><input type=text name=maths size=50></td>
			</tr>

			<tr>
				<td><h2>Physics for information science</h2></td>
				<td><input type=text name=physics size=50></td>
			</tr>

			<tr>
				<td><h2>Information technology essentials</h2></td>
				<td><input type=text name=ite size=50></td>
			</tr>

			<tr>
				<td><h2>Basic electrical and measurement engineering</h2></td>
				<td><input type=text name=beme size=50/></td>
			</tr>

			<tr>
				<td><h2>programming in C</h2></td>
				<td><input type=text name=proc size=50></td>
			</tr>

			

			<tr>
				<td><input type=submit></td>
				<td><input type=reset></td>
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

$conn = mysqli_connect($servername,$username,$password,$database);


$fname = isset($_GET['fname']) ? $_GET['fname'] : '';

$student = isset($_GET['student']) ? $_GET['student'] : '';

$regno = isset($_GET['regno']) ? $_GET['regno'] : '';

$dob = isset($_GET['dob']) ? $_GET['dob'] : '';

$gender = isset($_GET['gender']) ? $_GET['gender'] : '';

$english = isset($_GET['english']) ? $_GET['english'] : '';

$maths = isset($_GET['maths']) ? $_GET['maths'] : '';

$physics = isset($_GET['physics']) ? $_GET['physics'] : '';

$ite = isset($_GET['ite']) ? $_GET['ite'] : '';

$beme = isset($_GET['beme']) ? $_GET['beme'] : '';

$proc = isset($_GET['proc']) ? $_GET['proc'] : '';

$sql = "insert into result values('$fname','$student','$regno','$dob','$gender','$english','$maths','$physics','$ite','$beme','$proc')";



mysqli_query($conn,$sql);


?>






