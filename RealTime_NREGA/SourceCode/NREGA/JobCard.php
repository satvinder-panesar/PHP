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
$jobid=$_REQUEST['jobid'];
echo "<table>
<tr>
<td><a href=WorkerOptions.php?jobid=$jobid ><center><<<   Go Back To Options</center></a></td>
</tr>
</table>";
$con=mysql_connect("localhost","nrega","password");
mysql_select_db("nrega",$con);
$query="SELECT * FROM applicant WHERE jobid=$jobid";
$result=mysql_query($query,$con);
while($records=mysql_fetch_array($result)){
echo "<div class=CSSTableGenerator><table>";
echo "<tr><th>JobId</th><th>" .$records['jobid']. "</th></tr>";
echo "<tr><td>Name</td><td>" . $records['name'] . "</td></tr>";
echo "<tr><td>Image </td><td><img height=60 width=60 src=DisplayImage.php?id=".$records['jobid']."></td></tr>";
echo "<tr><td>Age</td><td>" . $records['age'] . "</td></tr>";
echo "<tr><td>Gender</td><td>" . $records['gender'] . "</td></tr>";
echo "<tr><td>Date Of Birth</td><td>" . $records['dob'] . "</td></tr>";
echo "<tr><td>Address</td><td>" . $records['address'] . "</td></tr>";
echo "<tr><td>Preference</td><td>" . $records['preference'] . "</td></tr>";
echo "<tr><td>Date Of Registration</td><td>" . $records['dateofreg'] . "</td></tr>";
echo "<tr><td>Date Of Joining</td><td>" . $records['dateofjoin'] . "</td></tr>";
echo "<tr><td>Alloted To</td><td>" . $records['allotedto'] . "</td></tr>";
echo "<tr><td>Password</td><td>" . $records['password'] . "</td></tr>";
echo "<tr><td>Bank</td><td>" . $records['bank'] . "</td></tr>";
echo "<tr><td>Bank Account No</td><td>" . $records['bankaccountno'] . "</td></tr>";
}
echo "</table>";
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