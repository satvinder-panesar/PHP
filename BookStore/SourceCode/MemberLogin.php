


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
	 <br>
	 <form action=MemberLogin.php method=post>
	 Username:-<input type=text name=musername><br>
	 Password:- <input type=password name=mpassword><br><br>
	 <input type=submit name=submit value=Submit>
	 <input type=reset name=Reset>
	 </form>
	  <?php
	  if(isset($_POST['submit']))
	  {
	  if(empty($_POST['musername']) or empty($_POST['mpassword']))
	  echo "Details Cannot Be Empty";
	  else
	  {
	  $con=mysql_connect("localhost","bookstore","password");
	  mysql_select_db("bookstore",$con);
	  $query1="SELECT * FROM members WHERE username='$_POST[musername]' AND password='$_POST[mpassword]'";
$result=mysql_query($query1,$con);
if(mysql_num_rows($result)==0)
echo "Incorrect Details";
else
header("location:MemberFeedback.php?user=$_POST[musername]");
	  }
	  }
	?>
	 </div>
	  <div id="bar">
        	<div class="link"><a href="#">Home</a></div>
            <div class="link"><a href="#">About</a></div>
            <div class="link"><a href="#">ContactUs</a></div>
            <div class="link"><a href="BookOptions.php">Books</a></div>
            <div class="link"><a href="MembersArea.php">Members Area</a></div>
            <div class="link"><a href="AdminLogin.php">Admin </a></div>
      </div></div>
        <div id="footer">Copyrights @ 2013</h2></div>

		</body>
</html>
