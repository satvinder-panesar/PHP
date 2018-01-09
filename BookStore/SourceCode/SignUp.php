<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />

</head>

<body>
    <div id="page">
		
        <div id="header">
        	<h1>MyBooks.com</h1>
            <h2>Best place to buy books online.</h2>
            
      </div>
  <div id="bar">
        	<div class="link"><a href="#">Home</a></div>
            <div class="link"><a href="#">About</a></div>
            <div class="link"><a href="#">ContactUs</a></div>
            <div class="link"><a href="BookOptions.php">Books</a></div>
            <div class="link"><a href="MembersArea.php">Members Area</a></div>
            <div class="link"><a href="AdminLogin.php">Admin </a></div>
      </div>
	 <div class="contentText">
	 <form action=SignUp.php method=post>
	 <table border="0" bordercolor="#000000" style="background-color:#DDDDDD" width="100%" cellpadding="3" cellspacing="3">
	<tr>
		<td>Name</td><td><input type=text name=name></td>
	</tr>
	<tr>
		<td>Username</td><td><input type=text name=username></td>
	</tr>
	<tr>
		<td>Age</td><td><input type=text name=age></td>
	</tr>
	<tr>
		<td>Gender</td><td><select name=gender><option value=Male>Male</option><option value=Female>Female</option></select></td>
	</tr>
	<tr>
		<td>Password</td><td><input type=password name=password></td>
	</tr>
	<tr>
		<td>Re-Enter Password</td><td><input type=password name=repassword></td>
	</tr>
	<tr>
		<td>Address</td><td><input type=text name=address></td>
	</tr>
	
</table>
<input type=submit name=submit value=Submit>
	 <input type=reset name=Reset>
	 </form>
	 
	  <?php 
	  
	if(isset($_POST['submit']))
	{
	if(empty($_POST['name']) or empty($_POST['username']) or empty($_POST['age']) or empty($_POST['password'])
	or empty($_POST['repassword']) or empty($_POST['address']))
	echo "Details Cannot Be Empty";
	else if($_POST['password']!=$_POST['repassword'])
	echo "Passwords Dont Match";

else
{

$con=mysql_connect("localhost","bookstore","password");
	  mysql_select_db("bookstore",$con);
	  $query1="SELECT * FROM members WHERE username='$_POST[username]'";
$result=mysql_query($query1,$con);
if(mysql_num_rows($result)!=0)
echo "Username Already Exists";
else
{
$query2="INSERT INTO members VALUES
('$_POST[name]','$_POST[username]','$_POST[age]','$_POST[gender]','$_POST[password]','$_POST[address]')";
mysql_query($query2,$con);
echo "Sign Up Successful";
}
}	
	}	  ?>
	 
	  </div>
	   <div id="bar">
        	<div class="link"><a href="#">Home</a></div>
            <div class="link"><a href="#">About</a></div>
            <div class="link"><a href="#">ContactUs</a></div>
            <div class="link"><a href="BookOptions.php">Books</a></div>
            <div class="link"><a href="MembersArea.php">Members Area</a></div>
            <div class="link"><a href="AdminLogin.php">Admin </a></div>
      </div>
	  </div>
        <div id="footer">Copyrights @ 2013</h2></div>

		</body>
</html>

	 