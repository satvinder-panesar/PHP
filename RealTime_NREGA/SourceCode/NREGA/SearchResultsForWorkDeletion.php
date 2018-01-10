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
</table><br>";
$con=mysql_connect("localhost","nrega","password");
mysql_select_db("nrega",$con);
$queryselect="SELECT * FROM work WHERE workid='$_POST[workid]'";
$resultselect=mysql_query($queryselect,$con);
$numrows=mysql_num_rows($resultselect);
if($numrows==0)
echo "<br><center>Search Returned No Results</center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br>";
else {
while($records=mysql_fetch_array($resultselect)){
echo "<div class=CSSTableGenerator><table>";
echo "<form action=SearchResultsForWorkDeletion.php method=post>";
echo "<tr><th>WorkId</th><th>".$records['workid']."</th></tr>";
echo "<tr><td>Name</td><td>" . $records['name'] . "</td></tr>";
echo "<tr><td>Year</td><td>" . $records['year'] . "</td></tr>";
echo "<tr><td>Proposal Date</td><td>" . $records['proposaldate'] . "</td></tr>";
echo "<tr><td>Village</td><td>" . $records['village'] . "</td></tr>";
echo "<tr><td>Plot No</td><td>" . $records['plotno'] . "</td></tr>";
echo "<tr><td>Status</td><td>" . $records['status'] . "</td></tr></table>";
echo "<input type=hidden name=hidden value=" . $records['workid'] .">";
echo "<br><center><input type=submit name=delete value=Delete></center></form><br>";
}
}
if(isset($_POST['delete'])){
$querydelete="DELETE FROM work where workid='$_POST[hidden]'";
$resultdelete=mysql_query($querydelete,$con);
header("location:NotifyDeletedWork.php");
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