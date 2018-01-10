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
<tr><td><a href=AdminOptions.php><center><<< Go Back To Options</center></a></td></tr>
</table><br>";
$con=mysql_connect("localhost","nrega","password");
mysql_select_db("nrega",$con);
$query="SELECT * FROM applicant";
$result=mysql_query($query,$con);
$numrows=mysql_num_rows($result);
if($numrows==0)
echo "<center>No Applicants Added</center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
else
{
echo "<div class=CSSTableGenerator><table>
<tr>
<th>JobId</th>
<th>Name</th>
<th>Age</th>
<th>Gender</th>
<th>Address</th>
<th>Preference</th>
<th>Date Of Registration</th>
<th>Date Of Joining</th>
<th>Alloted To</th>
<th>Bank</th>
<th>Bank Account No</th>
<th>Image</th>
</tr>";
while($records=mysql_fetch_array($result)){
echo "<tr>
<td>".$records['jobid']."</td>
<td>".$records['name']."</td>
<td>".$records['age']."</td>
<td>".$records['gender']."</td>
<td>".$records['address']."</td>
<td>".$records['preference']."</td>
<td>".$records['dateofreg']."</td>
<td>".$records['dateofjoin']."</td>
<td>".$records['allotedto']."</td>
<td>".$records['bank']."</td>
<td>".$records['bankaccountno']."</td>
<td><img height=30 width=30 src=DisplayImage.php?id=".$records['jobid']."></td>
</tr>";
}
echo "</table>";
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