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
$queryselect="SELECT * FROM applicant WHERE jobid='$_POST[jobid]'";
$resultselect=mysql_query($queryselect,$con);
$numrows=mysql_num_rows($resultselect);
if($numrows==0)
{
echo "<br><center>Search Returned No Results</center>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>";
}
else
{
while($records=mysql_fetch_array($resultselect)){
echo "<div class=CSSTableGenerator><table>";
echo "<form action=SearchResultsForApplicantUpdation.php method=post>";
echo "<tr><th>Content</th><th>Entry Field</th></tr><tr><td>JobId</td>
<td>" . $records['jobid'] . "</td></tr>";
echo "<tr><td>Name</td><td>";?>
<input type="text" name="name" value="<?php echo $records['name'];?>">
<?php
echo "</td></tr>";
echo "<tr><td>Age</td><td><input type=text name=age value=" . $records['age'] . "></td></tr>";
echo "<tr><td>Gender</td><td><input type=text name=gender value=" . $records['gender'] . "></td></tr>";
echo "<tr><td>Date Of Birth</td><td><input type=text name=dob value=" . $records['dob'] . "></td></tr>";
echo "<tr><td>Address</td><td>";?>
<input type="text" name="address" value="<?php echo$records['address'];?>">
<?php
echo "</td></tr>";
echo "<tr><td>Preference</td><td>";?>
<input type="text" name="preference" value="<?php echo $records['preference'];?>">
<?php
echo "</td></tr>";
echo "<tr><td>Date Of Registration</td><td><input type=text name=dateofreg value=" . $records['dateofreg'] . "></td></tr>";
echo "<tr><td>Date Of Joining</td><td><input type=text name=dateofjoin value=" . $records['dateofjoin'] . "></td></tr>";
echo "<tr><td>Alloted To</td><td><input type=text name=allotedto value=" . $records['allotedto'] . "></td></tr>";
echo "<tr><td>Password</td><td><input type=text name=password value=" . $records['password'] . "></td></tr>";
echo "<tr><td>Bank</td><td><input type=text name=bank value=" . $records['bank'] . "></td></tr>";
echo "<tr><td>Bank Account No</td><td><input type=text name=bankaccountno value=" . $records['bankaccountno'] . "></td></tr>";
echo "</table>";
echo "<input type=hidden name=hidden value=" . $records['jobid'] .">";
echo "<br><center><input type=submit name=update value=Update></center></form>";
}
}
if(isset($_POST['update'])){
if(empty($_POST['jobid']) or empty($_POST['name']) or empty($_POST['age']) 
or empty($_POST['gender']) or empty($_POST['dob']) or empty($_POST['address'])
or empty($_POST['preference']) or empty($_POST['dateofreg']) or empty($_POST['dateofjoin'])
or empty($_POST['password']) or empty($_POST['allotedto']) or 
empty($_POST['bank']) or empty($_POST['bankaccountno']))echo "Please Fill All Details";
else{
$queryupdate="UPDATE applicant SET name='$_POST[name]',age='$_POST[age]',gender='$_POST[gender]',
dob='$_POST[dob]',address='$_POST[address]',preference='$_POST[preference]',dateofreg='$_POST[dateofreg]',
dateofjoin='$_POST[dateofjoin]',allotedto='$_POST[allotedto]',password='$_POST[password]',
bank='$_POST[bank]',bankaccountno='$_POST[bankaccountno]' WHERE jobid='$_POST[hidden]'";
$resultupdate=mysql_query($queryupdate,$con);
header("location:NotifyUpdatedApplicant.php");
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