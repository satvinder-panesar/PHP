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
	<form action=SearchBook.php method=post>
	 Enter Book Name , Author Or Publication :-
	<br>
	 <input type=text name=keyword>
	 <input type=submit name=Search value=Search>
	 </form>
	 <?php
	 if(isset($_POST['Search']))
	 {
	 if(empty($_POST['keyword']))
	 echo "Please Enter Any Book Name , Author Or Publication";
		else
		{
		
		$con=mysql_connect("localhost","bookstore","password");
	  mysql_select_db("bookstore",$con);
	 
	  $query="SELECT * FROM books WHERE name LIKE '%$_POST[keyword]%' OR author LIKE '%$_POST[keyword]%' OR publication
	  LIKE '%$_POST[keyword]%'";
	  $result=mysql_query($query,$con);
	  if(mysql_num_rows($result)==0)
	  echo "Search Returned No Results";
	  else
	  {
	  echo "<table border=0 bordercolor=#000000 style=background-color:#DDDDDD width=100% cellpadding=3 cellspacing=3>
	  <tr><td>Name</td><td>Author</td><td>Publication</td><td>Action</td></tr>";
	  while($records=mysql_fetch_array($result))
	  {
	  echo "<tr>
	  <td>$records[name]</td>
	  <td>$records[author]</td>
	  <td>$records[publication]</td>
	  <td><a href=BuyBook.php?bookid=$records[id]>Buy</a></td>
	  </tr>";
	  }
	  echo "</table>";
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
