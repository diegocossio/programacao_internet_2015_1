<html>
<head>
  <title>Book-O-Rama Book Entry Results</title>
</head>
<body>
<h1>Book-O-Rama Book Entry Results</h1>
<?php
  // create short variable names
  $isbn=$_POST['isbn'];
  $author=$_POST['author'];
  $title=$_POST['title'];
  $price=$_POST['price'];

  if (!$isbn || !$author || !$title || !$price)
  {
     echo 'You have not entered all the required details.<br />'
          .'Please go back and try again.';
     exit;
  }
  
  $isbn = addslashes($isbn);
  $author = addslashes($author);
  $title = addslashes($title);
  $price = doubleval($price);

  @ $db = mysql_pconnect('localhost', 'root', 'jrhs6l04');

  if (!$db)
  {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }

  mysql_select_db('books');
  $query = "insert into books (isbn, author, title, price) values 
            ('".$isbn."', '".$author."', '".$title."', '".$price."')"; 
  $result = mysql_query($query);
  if ($result)
      echo  mysql_affected_rows().' book inserted into database.'; 

  if (!$result) {
    die('Invalid query: ' . mysql_error());
}
?>

</body>
</html>
