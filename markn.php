<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "online";


$conn = mysqli_connect($servername,$username,$password,$database);



$regno = $_POST['regno'];
if($regno){
	$show = "select * from result where regno = '$regno'";
	$result = mysqli_query($conn,$show);
	while($row = mysqli_fetch_assoc($result)){

       
echo '<form action="markn.php" class="modal-content animate" >
                        <img src="kglogo.jpg" alt="kglogo" class="center">
                        <h3 style="text-align:center">KGISL INSTITUTE OF TECHNOLOGY</h3>
                        <h3 style="text-align:center">Coimbatore - 641 035</h3>
                        
                       <h3 style="text-align:center">(Approved by AICTE and Affiliated to Anna University,Chennai)</h3>
                
                        <h2 style="text-align:center">DEGREE EXAMINATION</h2>              
                        <h2 style="text-align:center">GRADE SHEET</h2>
                        <FIELDSET>
                        <LEGEND> STUDENT INFORMATION </LEGEND>
                        <table>
                       

                        <tr>
                                <td><h2>Student Name</h2></td>
                                <td>: <input type=text value=' . $row['student'] . '></td>
                        </tr>

                        <tr>
                                <td><h2>Fathers Name</h2></td>
                                <td>: <input type=text value=' . $row['fname'] . '></td>
                        </tr>

                        <tr>
                                <td><h2>Register number</h2></td>
                                <td>: <input type=text value=' . $row['regno'] . '></td>
                        </tr>

                        <tr>
                                <td><h2>Dob</h2></td>
                                <td>: <input type=text value=' . $row['dob'] . '></td>
                        </tr>

                        <tr>
                                <td><h2>Gender</h2></td>
                                <td>: <input type=text value=' . $row['gender'] . '></td>
                        </tr>
                        </table>
                        </FIELDSET></BR><br><br>
                        <table border="1|0">


                        <TH colspan="8" width="240"> II-SEM EXAM RESULTS </TH>


                        <tr><th><h2>SUBJECT NAME</b></th><th><h2>GRADE</h2></th>

                        <tr>
                                <td><h2>Technical English</h2></td>
                                <td>: <input type=text value=' . $row['english'] . '></td>
                        </tr>

                        <tr>
                                <td><h2>Enginnering Mathematics-2</h2></td>
                                <td>: <input type=text value=' . $row['maths'] . '></td>
                        </tr>

                        <tr>
                                <td><h2>Physics for information science</h2></td>
                                <td>: <input type=text value=' . $row['physics'] . '></td>
                        </tr>

                        <tr>
                                <td><h2>Information technology essentials</h2></td>
                                <td>: <input type=text value=' . $row['ite'] . '></td>
                        </tr>

                        <tr>
                                <td><h2>Basic electrical and measurement engineering</h2></td>
                                <td>: <input type=text value=' . $row['beme'] . '></td>
                        </tr>

                        <tr>
                                <td><h2>programming in C</h2></td>
                                <td>: <input type=text value=' . $row['proc'] . '></td>
                        </tr>

                        

                        
                </table><br><br><br><br>
                <table cellspacing="50">
                <tr>
                <td><h3>Signature of the candidate<h3></td>
                <td><h3 text-align:"right">Controller of Examination<h3></td>
                </table>
                
        </form>';
                
        



	}
}
else
{
	echo "no data";
}
		

?>

<!DOCTYPE html>
<html>
<head>
        <title>result</title>
</head>
<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 20%;
}

.padding-table-columns
{
    padding:0 150px 0 150px; /* Only right padding*/
}
body

{
 border-radius: 20px;
 border-style: ridge;
 border-color: blue;
 position: absolute;
 width: 850px;
 height: 1200px;
 top: 15px;
 left: 45px;
 padding: 30px 30px 50px 30px;
 background-color: seashell;
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
<body>

<button onclick="goBack()" >Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>
</body>
</html>