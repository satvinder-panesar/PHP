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
<td><a href=AdminOptions.php ><center><<<   Go Back To Options</center></a></td>
</tr>
</table>";
echo "<center>The List Of Work</center><br>";
$con=mysql_connect("localhost","nrega","password");
mysql_select_db("nrega",$con);
$query="SELECT name FROM work GROUP BY name";
$result=mysql_query($query,$con);
echo "<div class=CSSTableGenerator><table><tr><th>Work Name</th><th>Action</th></tr>";
while($records=mysql_fetch_array($result))
{
echo "<tr><td>$records[name]</td>
<td>";?>
<a href=DisplayListOfWorkersForWorkSelected.php?workname=<?php echo urlencode($records['name']);?>>Allot</a>
<?php
echo "</td></tr>";
}
echo "</table><center>";
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