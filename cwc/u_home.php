<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>Untitled 4</title>
</head>
<body>
Welcome , $user_name. 
<hr />
<h1>News Update</h1>

<?php
    require'config.php';
    $qry="select * from emergency order by emer_no desc limit 5;";
    $res=mysql_query($qry)or die(mysql_error());
    if($row=mysql_fetch_row($res))
    {}
    else
    echo "<script>alert('No news was found.')</script>";
    echo "<table align=center border='1'>";
    echo "<tr><td>Title</td><td>Details</td></tr>";
   while($row = mysql_fetch_array($res)) 
   {
        echo "<tr>";
        echo "<td>$row[1]</td><td>$row[2]</td>";
        echo "</tr>";
   }
   echo "</table>";
   mysql_close($db);
?>

<input type="submit" name="btn_u_logout" value="Logout"/>
<br />
<h5>Online Compalint Centre</h5>
<br />
<a href="">Register New Complaint</a>
<br />
<a href="">View Complaint Status</a>
<br />
<br />
<frameset>
<pre>
Emergency Contact
Police Helpline:100
Women Helpline:1091
Senior Citizen Helpline:1291
</pre>
</frameset>

</body>
</html>