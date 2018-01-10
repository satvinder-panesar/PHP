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
mysql_select_db("nrega",$con);
$query="CREATE TABLE work(
workid varchar(20),
name varchar(30),
year integer(4),
proposaldate varchar(15),
village varchar(20),
plotno varchar(10),
status varchar(10))";
$result=mysql_query($query,$con);
echo "<center>Enter The Details</center>";
echo "<form action=AddWork.php method=post><div class=CSSTableGenerator>
<table>
<tr><td>Content</td><td>Entry Field</td></tr>
<tr><td>Name</td><td><input type=text name=name></td></tr>
<tr><td>Year</td><td><input type=text name=year></td></tr>
<tr><td>Proposal Date</td><td><input type=text name=proposaldate>Ex:- 25-dec-2012</td></tr>
<tr><td>Village</td><td><input type=text name=village></td></tr>
<tr><td>Plot No</td><td><input type=text name=plotno></td></tr>
<tr><td>Status</td><td><input type=text name=status></td></tr>
</table><center>
<input type=submit name=submit value=Add></form></center>";
if(isset($_POST['submit'])){
if(empty($_POST['name']) or empty($_POST['year']) or empty($_POST['proposaldate'])
or empty($_POST['village']) or empty($_POST['plotno']) or empty($_POST['status']))
echo "<center><br>Please Fill All The Details</center>";
else {
$workid=uniqid('W');
$queryinsert="INSERT INTO work VALUES
('$workid','$_POST[name]','$_POST[year]','$_POST[proposaldate]','$_POST[village]','$_POST[plotno]',
'$_POST[status]')";
$resultinsert=mysql_query($queryinsert,$con);
header("location:NotifyAddedWork.php");
}
}
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