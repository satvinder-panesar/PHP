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
$query="SELECT * FROM books";
$result=mysql_query($query,$con);
if(mysql_num_rows($result)==0)
echo "No Books Added";
else
{

echo "

<table border=0 bordercolor=#000000 style=background-color:#DDDDDD width=100% cellpadding=3 cellspacing=3>
<tr>
<th>Name</th><th>Publications</th><th>Year</th><th>Description</th><th>Category</th><th>Price</th>
</tr>
";
while($records=mysql_fetch_array($result))
{
echo "<tr>
		<td>$records[name]</td>
	
	
		<td>$records[publications]</td>

	
		<td>$records[year]</td>
	
	
		<td>$records[description]</td>
	

		<td>$records[category]</td>


		<td>$records[price]</td>
	</tr>";
}
echo "</table>";

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

	 