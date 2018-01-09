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
$query="SELECT * FROM books WHERE id='$_POST[bookid]'";
$result=mysql_query($query,$con);
if(mysql_num_rows($result)==0)
echo "No Such Book Added";
else
{

echo "<form action=SearchResultsForBookUpdation.php method=post>
<input type=hidden name=bookid value='$_POST[bookid]'>
<table border=0 bordercolor=#000000 style=background-color:#DDDDDD width=100% cellpadding=3 cellspacing=3>";
while($records=mysql_fetch_array($result))
{
echo "<tr>
		<td>Name</td><td><input type=text name=name value='$records[name]'></td>
	</tr>
	<tr>
		<td>Publications</td><td><input type=text name=publications value='$records[publications]' ></td>
	</tr>
	<tr>
		<td>Year</td><td><input type=text name=year value='$records[year]'></td>
	</tr>
	<tr>
		<td>Description</td><td><input type=text name=description value='$records[description]'></td>
	</tr>
	<tr>
		<td>Category</td><td><input type=text name=category value='$records[category]'></td>
	</tr>
	<tr>
		<td>Price</td><td><input type=text name=price value='$records[price]'></td>
	</tr>";
}
echo "</table>
<input type=submit name=update value=Update>
</form>";
if(isset($_POST['update']))
{
if(empty($_POST['name']) or empty($_POST['publications']) or empty($_POST['year']) or empty($_POST['description'])
	or empty($_POST['category']) or empty($_POST['price']))
	echo "Details Cannot Be Empty";
else
{
	$query="UPDATE books 
SET name='$_POST[name]',publications='$_POST[publications]',year='$_POST[year]',description='$_POST[description]',
category='$_POST[category]',price='$_POST[price]' WHERE id='$_POST[bookid]'";
mysql_query($query,$con);
echo "Book Updated";
	
}
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

	 