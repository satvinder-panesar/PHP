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
	 <?php
	 $bookid=$_REQUEST['bookid'];
	 $con=mysql_connect("localhost","bookstore","password");
	  mysql_select_db("bookstore",$con);
	 
	  $query="SELECT * FROM books WHERE id='$bookid'";
	  $result=mysql_query($query,$con);
	  
	  while($records=mysql_fetch_array($result))
	  {
	  echo "<table border=0 bordercolor=#000000 style=background-color:#DDDDDD width=100% cellpadding=3 cellspacing=3>
	<tr>
		<td>Name</td><td>$records[name]</td>
		
	</tr>
	<tr>
		<td>Author</td><td>$records[author]</td>
	</tr>
	<tr>
		<td>Publication</td><td>$records[publication]</td>
	</tr>
	<tr>
		<td>Year</td><td>$records[year]</td>
	</tr>
	<tr>
		<td>Description</td><td>$records[description]</td>
	</tr>
	<tr>
		<td>Category</td><td>$records[category]</td>
	</tr>
	<tr>
		<td>Price</td><td>$records[price]</td>
	</tr>
	
</table>";
	  
	  }
	  echo "<form action=BuyBook.php?bookid=$bookid method=post><table border=0 bordercolor=#000000 
	  style=background-color:#DDDDDD width=100% cellpadding=3 cellspacing=3>
	  <tr><td>
	  Username :- </td><td><input type=text name=username>
	  </td></tr><tr><td>
	  Password :- </td><td><input type=password name=password>
	  </td></tr><tr><td>
	  Credit Card No :- </td><td><input type=text name=ccn>
	  </td></tr></table>
	  <input type=submit name=submit value=Buy>
	  </form>";
	  if(isset($_POST['submit']))
	  {
	  if(empty($_POST['username']) or empty($_POST['password']) or empty($_POST['ccn']))
	  echo "Please Fill All Details";
	  else
	  {
	  $con=mysql_connect("localhost","bookstore","password");
	  mysql_select_db("bookstore",$con);
	  $query="SELECT * FROM members WHERE username='$_POST[username]' AND password='$_POST[password]'";
	  $result=mysql_query($query,$con);
	  if(mysql_num_rows($result)==0)
	  echo "Incorrect details";
	  else
	  echo "Book Bought !";
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
      </div>
	  </div>
        <div id="footer">Copyrights @ 2013</h2></div>

		</body>
</html>
