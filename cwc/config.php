 <?php
 $host='localhost';
 $user='root';
 $password='';
 $db=@mysql_connect($host,$user,$password)or die("Could not connect to MySql Server".mysql_error());
 echo "Database Connection Established";
 mysql_select_db("cwc_db")or die("Could not connect to database.");
 echo "Database selected successfully.";
 
?>