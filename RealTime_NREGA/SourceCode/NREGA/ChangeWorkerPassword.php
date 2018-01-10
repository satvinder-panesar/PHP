<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>NREGA</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta http-equiv="Content-Type"
 content="text/html; charset=iso-8859-1">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  
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
$jobid=$_REQUEST['jobid'];
echo "<table>
<tr>
<td><a href=WorkerOptions.php?jobid=$jobid ><center><<<   Go Back To Options</center></a></td>
</tr>
</table><center>";
$con=mysql_connect("localhost","nrega","password");
mysql_select_db("nrega",$con);
$query="SELECT password FROM applicant WHERE jobid=$jobid";
$result=mysql_query($query,$con);
$records=mysql_fetch_array($result);
$password=$records['password'];
echo "<br><form action=ChangeWorkerPassword.php?jobid=$jobid method=post>
Enter Current Password :- <input type=password name=currpass><br><br>
Enter New Password :- <input type=password name=newpass><br><br>
<input type=submit name=submit value=Change>
</form>";
if(isset($_POST['submit']))
{
if(empty($_POST['newpass']) or empty($_POST['currpass']))
echo "<br><br><strong>Please Fill All Details</strong><br><br><br><br><br><br><br><br><br><br><br>";
else
{
if($password==$_POST['currpass'])
{
$newpass=$_POST['newpass'];
$queryupdate="UPDATE applicant SET password='$newpass' where jobid=$jobid";
$resultupdate=mysql_query($queryupdate,$con);
echo "<br><br><strong>Password Changed</strong><br><br><br><br><br><br><br><br><br><br><br>";
}
else
echo "<br><br><strong>Incorrect Password<strong></center><br><br><br><br><br><br><br><br><br><br>";
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