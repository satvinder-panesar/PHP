<?php
$con=mysql_connect("localhost","nrega","password");
mysql_select_db("nrega",$con);
$id=addslashes($_REQUEST['id']);
$query="SELECT * FROM applicant where jobid='$id'";
$result=mysql_query($query,$con);
$records=mysql_fetch_array($result);
echo $records['image'];

?>