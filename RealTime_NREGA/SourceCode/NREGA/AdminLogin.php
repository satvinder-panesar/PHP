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
echo "<table>
<tr>
<td><a href=HomePage.php ><center><<<   Return To Home Page</center></a></td>
</tr>
</table>";
echo "<center><br><form action=AdminLogin.php method=post>
UserName:<br><input type=text name=username><br><br>
Password:<br><input type=password name=password><br><br>
<input type=reset value=Reset><br><br>
<input type=submit name=submit value=Submit>
</font>
</form><br><br><br><br><br><br><br><br><br>";
if(isset($_POST['submit'])){
if(empty($_POST['username']))
echo "Username cannot be empty<br>";
if(empty($_POST['password']))
echo "Password cannot be empty<br>";
if($_POST['username'] == "admin" and $_POST['password'] == "password")
header("location:AdminOptions.php");
if($_POST['username'] != "admin" and $_POST['username']!="")
echo "Incorrect Username<br>";
if($_POST['password'] != "password"and $_POST['password']!="")
echo "Incorrect Password</center>";
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