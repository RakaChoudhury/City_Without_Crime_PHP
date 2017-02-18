<?php require 'basic_bg.php'; ?>
<div style="background-color: burlywood; opacity:0.7; width:90%;  ;border-radius:10px;" >
<pre>
<?php require 'emer_contact.html'; ?>


Welcome ,$user_name.

<fieldset>
<legend><h1>Register New Complaint</h1></legend>
<form method="POST">

<input type="submit" name="btn_u_hm" value="Home"/>

Complaint Details

Location: <input type="textbox" name="t_u1" />

Description: <br /><textarea name="t_u2" rows="5" cols="30"></textarea>

<input type="submit" name="btn_u1" value="Report"/>
</form>
</fieldset>
</pre>
<br />
</div>
<?php
if(isset($_POST['btn_u_hm']))
{
    echo "<a href='u_home.php'></a>";
}
if(isset($_POST['btn_u1']))      //insert
 {
  $loc=($_POST['t_u1']);
  $des=$_POST['t_u2'];
   echo "here";
require 'config.php'; 
 $qry="insert into complaint(description,location) values('$des','$loc')";
mysql_query($qry)or die(mysql_error());
$qry="select * from complaint order by complaint_id desc limit 2;";
 $res=mysql_query($qry)or die(mysql_error());
    if($row=mysql_fetch_row($res))
    {
        echo "<script>alert('Your complaint was successfully reported.Your complaint number is  $row[0] .You may use this number for checking status of your complaint.')</script>";
    }
 mysql_close($db);
 }
 ?>

