<form method="POST">
Add News
News Serial Number<input type="number" />
News Title<input type="text" name="title"/>
Description <textarea name="description" cols="15" rows="8"></textarea>
 <input type="submit" name="btn_news" value="Add News"/>
 
 
 //verify if update,delete reqdbtn_news
 </form>
 <?php
 if(isset($_POST['btn_news']))
 {
  $title=($_POST['title']);
  $des=$_POST['description'];
   
require 'config.php'; 
 $qry="insert into emergency(description,title) values('$des','$title')";
mysql_query($qry)or die(mysql_error());
 mysql_close($db);
 }
 ?>