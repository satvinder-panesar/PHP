<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>NREGA</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta http-equiv="Content-Type"
 content="text/html; charset=iso-8859-1">
  <link href="css/style.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="table.css" type="text/css"/>
</head>
<body>
<div class="main-out">
<div class="main">
<div class="page">
<div class="top">
<div class="header">
<div class="header-top">
<h1>NREGA   <span>National Rural Emplyment Guarantee Act</span></h1>

</div>
<div class="topmenu">
<ul>
  <li><a href="HomePage.php">Home</a></li>
  <li><a href="HomePage.php">About&nbsp;Us</a></li>

  <li><a href="HomePage.php">Contacts</a></li>
 <li><a href="HomePage.php">Site Map</a></li>
  <li><a href="WorkDetails.php">Work Details</a></li>
  <li><a href="WorkerLogin.php">Workers</a></li>
  <li><a href="AdminLogin.php">Admin</a></li>
</ul>

</div>
<?php
echo "<table>
<tr>
<td><a href=AdminOptions.php ><center><<<   Go Back To Options</center></a></td>
</tr>
</table>";
$con=mysql_connect("localhost","nrega","password");
$querydb="CREATE DATABASE nrega";
$resultdb=mysql_query($querydb,$con);
mysql_select_db("nrega",$con);
$date = date('Y-m-d');
$querytable="CREATE TABLE applicant(
jobid varchar(15),
name varchar(30),
age integer(3),
gender varchar(6),
dob varchar(15),
address varchar(200),
preference varchar(20),
dateofreg varchar(15),
dateofjoin varchar(15),
allotedto varchar(20),
password varchar(25),
bank varchar(20),
bankaccountno integer(15),
image blob,
totalattendance integer(3),
totalcashpayment integer(7))";
$resulttable=mysql_query($querytable,$con);
echo "<br><center><strong>Enter the Applicant Details</strong></center>";
echo "<form action=AddApplicant.php method=post enctype=multipart/form-data><div class=CSSTableGenerator>
<table>
<tr><th>Content</th><th>Entry Field</th><tr>
<tr><td>Name:</td><td><input type=text name=name></td></tr>
<tr><td>Age :</td><td><input type=text name=age></td></tr>
<tr><td>Gender:</td><td><input type=text name=gender></td></tr>
<tr><td>Date Of Birth:</td><td><input type=text name=dob> Ex:- 25-dec-2010</td></tr>
<tr><td>Address :</td><td><input type=text name=address></td></tr>
<tr><td>Job Preference:</td><td><input type=text name=preference></td></tr>
<tr><td>Date Of Registration :</td><td><input type=text name=dor > Ex:- 25-dec-2010</td></tr>
<tr><td>Password :</td><td><input type=text name=password></td></tr><br>
<tr><td>Bank :</td><td><input type=text name=bank></td></tr><br>
<tr><td>Bank Account No:</td><td><input type=text name=bankaccno></td></tr>
<tr><td>Image :</td><td><input type=file name=image></td></tr><br></table><br><center>
<input type=reset value=Reset><br><br><input type=submit name=submit value=Submit></center>
</form>";
if(isset($_POST['submit'])){
if(empty($_POST['name']) or empty($_POST['age']) or empty($_POST['gender'])
or empty($_POST['dob']) or empty($_POST['address']) or empty($_POST['preference'])
or empty($_POST['dor']) or empty($_POST['password']) 
or empty($_POST['bank']) or empty($_POST['bankaccno']) or empty($_FILES['image']))
echo "Please Fill All The Details</center>";
else{
$jobid=uniqid('E');
$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
$queryinsert="INSERT INTO applicant
(jobid,name,age,gender,dob,address,preference,dateofreg,dateofjoin,allotedto,password,
bank,bankaccountno,image,totalattendance,totalcashpayment) VALUES 
('$jobid','$_POST[name]','$_POST[age]','$_POST[gender]','$_POST[dob]','$_POST[address]',
'$_POST[preference]','$_POST[dor]','NA','NA','$_POST[password]','$_POST[bank]'
,'$_POST[bankaccno]','$image',0,0)";
$resultinsert=mysql_query($queryinsert,$con);
header("location:NotifyAddedApplicant.php");
}
}
mysql_close($con);
?>
<div class="bottom">
<ul>
   <li><a href="HomePage.php">Home</a></li>
  <li><a href="HomePage.php">About&nbsp;Us</a></li>

  <li><a href="HomePage.php">Contacts</a></li>
  <li><a href="HomePage.php">Site Map</a></li>
  <li><a href="WorkDetails.php">Work Details</a></li>
  <li><a href="WorkerLogin.php">Workers</a></li>
  <li><a href="AdminLogin.php">Admin</a></li>
</ul>
<p>Copyright &copy; 2013. </p>

</div>
</div>
</div>
</div>

</body>
<html>