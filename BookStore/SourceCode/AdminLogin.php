


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
	 <form action=AdminLogin.php method=post>
	 Username:-<input type=text name=username><br>
	 Password:- <input type=password name=password><br><br>
	 <input type=submit name=submit value=Submit>
	 <input type=reset name=Reset>
	 </form>
	  <?php
	  if(isset($_POST['submit']))
	  {
	  if(empty($_POST['username']) or empty($_POST['password']))
	  echo "Details Cannot Be Empty";
	  else
	  {
	  if($_POST['username']=='admin' and $_POST['password']=='password')
	  header("location:AdminOptions.php");
	  else
	  echo "Incorrect Details";
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
