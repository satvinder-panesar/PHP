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

echo "<form action=SearchResultsForBookDeletion.php method=post>
<input type=hidden name=bookid value='$_POST[bookid]'>
<table border=0 bordercolor=#000000 style=background-color:#DDDDDD width=100% cellpadding=3 cellspacing=3>";
while($records=mysql_fetch_array($result))
{
echo "<tr>
		<td>Name</td><td>$records[name]</td>
	</tr>
	<tr>
		<td>Publications</td><td>$records[publications]</td>
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
	</tr>";
}
echo "</table>
<input type=submit name=delete value=Delete>
</form>";
if(isset($_POST['delete']))
{


	$query="DELETE FROM books WHERE id='$_POST[bookid]'";
mysql_query($query,$con);
echo "Book Deleted";
	

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

	 