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
$jobid=$_REQUEST['jobid'];
$workname=$_REQUEST['workname'];
$querywork="SELECT * FROM work WHERE name='$workname'";
$resultwork=mysql_query($querywork,$con);
echo "<br><div class=CSSTableGenerator><table>";
echo "<tr><th>WorkID</th><th>Work Name</th><th>Village</th><th>Proposal Date</th></tr>";
while($recordswork=mysql_fetch_array($resultwork))
{
echo "<tr><td>".$recordswork['workid']."</td>
<td>".$recordswork['name']."</td>
<td>".$recordswork['village']."</td>
<td>".$recordswork['proposaldate']."</td></tr>";
}
echo "</table>";
$query="SELECT * FROM applicant where jobid='$jobid'";
$result=mysql_query($query,$con);
echo "<form action=SearchResultsForWorkAllocation.php method=post>";
echo "<br><table>";
while($records=mysql_fetch_array($result))
{
echo "<tr><th>JobId</th><th>".$records['jobid']."</th></tr>";
echo "<tr><td>Name</td><td>" . $records['name'] . "</td></tr>";
echo "<tr><td>Age</td><td>" . $records['age'] . "</td></tr>";
echo "<tr><td>Gender</td><td>" . $records['gender'] . "</td></tr>";
echo "<tr><td>Date Of Birth</td><td>" . $records['dob'] . "</td></tr>";
echo "<tr><td>Address</td><td>" . $records['address'] . "</td></tr>";
echo "<tr><td>Preference</td><td>" . $records['preference'] . "</td></tr>";
echo "<tr><td>Date Of Registration</td><td>" . $records['dateofreg'] . "</td></tr>";
echo "<tr><td>Date Of Joining</td><td><input type=text name=dateofjoin value=" . $records['dateofjoin'].">Ex:- 25-dec-2010</td></tr>";
echo "<tr><td>Alloted To</td><td>
<select name=allotedto><option value=Select>Select</option>";
$queryworkid="SELECT workid FROM work WHERE name='$workname'";
$resultworkid=mysql_query($queryworkid,$con);
while($workid=mysql_fetch_array($resultworkid)){
echo "<option value=".$workid['workid'].">".$workid['workid']."</option>";
}
echo "</select></td></tr>";
echo "<input type=hidden name=hidden value=" . $records['jobid'] .">";
}
echo "</table><br>
<center><input type=submit name=update value=Update></center></form>";
if(isset($_POST['update'])){
$queryupdate="UPDATE applicant SET dateofjoin='$_POST[dateofjoin]',allotedto='$_POST[allotedto]'
WHERE jobid='$_POST[hidden]'";
$resultupdate=mysql_query($queryupdate,$con);
header("location:NotifyAllotedWork.php");
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