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
<td><a href=WorkDetails.php ><strong><center><<<  Search More</center></strong></a></td>
</tr>
</table>";
$con=mysql_connect("localhost","nrega","password");
mysql_select_db("nrega",$con);
$query="SELECT * FROM work where workid='$_POST[workid]'";
$result=mysql_query($query,$con);
$numrows=mysql_num_rows($result);
if($numrows==0)
echo "<p>&nbsp;</p><p>&nbsp;</p>
<p>&nbsp;</p><p>&nbsp;</p>
<p>&nbsp;</p><p>&nbsp;</p>
<p>&nbsp;</p><p>&nbsp;</p><center>Search Returned No Results</center><p>&nbsp;</p><p>&nbsp;</p>
<p>&nbsp;</p><p>&nbsp;</p>
<p>&nbsp;</p><p>&nbsp;</p>
<p>&nbsp;</p><p>&nbsp;</p>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>";
else
{
echo "	<div class=CSSTableGenerator><table>";
while($records=mysql_fetch_array($result)){
echo "<tr><th>Work ID</th><th>".$records['workid']."</th></tr>";
echo "<tr><td>Name</td><td>".$records['name']."</td></tr>";
echo "<tr><td>Year</td><td>".$records['year']."</td></tr>";
echo "<tr><td>Proposal Date</td><td>".$records['proposaldate']."</td></tr>";
echo "<tr><td>Village</td><td>".$records['village']."</td></tr>";
echo "<tr><td>Plot No</td><td>".$records['plotno']."</td></tr>";
echo "<tr><td>Status</td><td>".$records['status']."</td></tr><br><br>";
}
echo "</table></div>
<p>&nbsp;</p><p>&nbsp;</p>";
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