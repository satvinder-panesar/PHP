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
	 $con=mysql_connect("localhost","bookstore","password");
	  mysql_select_db("bookstore",$con);
	  $query1="SELECT * FROM books WHERE name='Head First Java'";
	  $result1=mysql_query($query1,$con);
	  $records=mysql_fetch_array($result1);
	   echo "<table border=0 bordercolor=#000000 style=background-color:#DDDDDD width=100% cellpadding=3 cellspacing=3>
	   <tr>
		<td>Name</td><td>$records[name]</td>
		
	</tr>
	<tr>
	<td>Image</td><td><img src=hfjava.jpg></td>
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
	<tr>

	
</table>
<a href=BuyBook.php?bookid=$records[id]>To Buy $records[name] Click Here </a>";
	  
	  $query1="SELECT * FROM books WHERE name='Head First PHP & MySQL'";
	  $result1=mysql_query($query1,$con);
	  $records=mysql_fetch_array($result1);
	   echo "<table border=0 bordercolor=#000000 style=background-color:#DDDDDD width=100% cellpadding=3 cellspacing=3>
	   <tr>
		<td>Name</td><td>$records[name]</td>
		
	</tr>
	<tr>
	<td>Image</td><td><img src=hfphp.jpg></td>
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
	<tr>

	
</table>
<a href=BuyBook.php?bookid=$records[id]>To Buy $records[name] Click Here </a>";
	  
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
