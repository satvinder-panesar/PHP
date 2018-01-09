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
	 <form action=AddBook.php method=post>
	 <table border="0" bordercolor="#000000" style="background-color:#DDDDDD" width="100%" cellpadding="3" cellspacing="3">
	<tr>
		<td>Name</td><td><input type=text name=name></td>
		
	</tr>
	<tr>
		<td>Author</td><td><input type=text name=author></td>
	</tr>
	<tr>
		<td>Publication</td><td><input type=text name=publication></td>
	</tr>
	<tr>
		<td>Year</td><td><input type=text name=year></td>
	</tr>
	<tr>
		<td>Description</td><td><input type=text name=description></td>
	</tr>
	<tr>
		<td>Category</td><td><input type=text name=category></td>
	</tr>
	<tr>
		<td>Price</td><td><input type=text name=price></td>
	</tr>
	
</table>
<input type=submit name=submit value=Submit>
	 <input type=reset name=Reset>
	 </form>
	 
	  <?php 
	  
	if(isset($_POST['submit']))
	{
	if(empty($_POST['name']) or empty($_POST['publication']) or empty($_POST['year']) or empty($_POST['description'])
	or empty($_POST['category']) or empty($_POST['price']) or empty($_POST['author']))
	echo "Details Cannot Be Empty";
else
{
$con=mysql_connect("localhost","bookstore","password");
	  mysql_select_db("bookstore",$con);
$id=uniqid('B');
$query2="INSERT INTO books VALUES
('$id','$_POST[name]','$_POST[author]','$_POST[publication]','$_POST[year]','$_POST[description]','$_POST[category]','$_POST[price]')";
mysql_query($query2,$con);
echo "Book Added";
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

	 