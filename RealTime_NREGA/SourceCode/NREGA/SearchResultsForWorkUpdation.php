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
$queryselect="SELECT * FROM work WHERE workid='$_POST[workid]'";
$resultselect=mysql_query($queryselect,$con);
$numrows=mysql_num_rows($resultselect);
if($numrows==0)
echo "<br><center>Search Returned No Results</center>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>";
else {
while($records=mysql_fetch_array($resultselect)){
echo "<div class=CSSTableGenerator><table>";
echo "<form action=SearchResultsForWorkUpdation.php method=post>";
echo "<tr><th>Content</th><th>Entry Field</th></tr><tr><td>WorkID</td><td><input type=text name=workid value=" . $records['workid'] . "></td></tr>";
echo "<tr><td>Name</td><td>";?>
<input type="text" name="name" value="<?php echo $records['name'];?>">
<?php
echo "</td></tr>";
echo "<tr><td>Year</td><td><input type=text name=year value=" . $records['year'] . "></td></tr>";
echo "<tr><td>Proposal Date</td><td><input type=text name=proposaldate value=" . $records['proposaldate'] ."></td></tr>";
echo "<tr><td>Village</td><td><input type=text name=village value=" . $records['village'] . "></td></tr>";
echo "<tr><td>Plot No</td><td><input type=text name=plotno value=" . $records['plotno'] . "></td></tr>";
echo "<tr><td>Status</td><td><input type=text name=status value=" . $records['status'] . "></td></tr>";
echo "</table>";
echo "<input type=hidden name=hidden value=" . $records['workid'] .">";
echo "<br><center><input type=submit name=update value=Update></form></center>";
}
}
if(isset($_POST['update'])){
if(empty($_POST['workid']) or empty($_POST['name']) or empty($_POST['year']) 
or empty($_POST['proposaldate']) or empty($_POST['village']) or empty($_POST['plotno'])
or empty($_POST['status']))echo "Please Fill All Details";
else{
$queryupdate="UPDATE work SET name='$_POST[name]',year='$_POST[year]',proposaldate='$_POST[proposaldate]',
village='$_POST[village]',plotno='$_POST[plotno]',status='$_POST[status]'";
$resultupdate=mysql_query($queryupdate,$con);
header("location:NotifyUpdatedWork.php");
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