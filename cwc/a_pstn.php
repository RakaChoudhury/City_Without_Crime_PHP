
<?php require 'basic_bg.php'; ?>
<div style="background-color: burlywood; opacity:0.7; width:90%;border-radius:10px;" >
<pre>
<?php require 'emer_contact.html'; ?>


Welcome ,$user_name.


<?php 
  if(isset($_POST['find']))           //find
 {
  $id=($_POST['pid']);
  require_once 'config.php';
  $qry="select * from police_stn_master where p_stn_id=$id";
$res=mysql_query($qry)or die(mysql_error());
 if($row=mysql_fetch_row($res))
 {}
 else
    echo "<script>alert('No such record was found')</script>";
 mysql_close($db);
 }
 
  
 if(isset($_POST['btn_a1']))      //insert
 {
  $pname=($_POST['pname']);
  $addr=$_POST['paddr'];
   $p_phn=($_POST['p_phn']);
    $pcontact=($_POST['pmobile']);
    $phead=($_POST['phead']);
  $ppwd=($_POST['ppwd']);
   
require 'config.php'; 
 $qry="insert into police_stn_master(p_stn_name,address,mobilenumber,p_stn_head,password,phone) values('$pname','$addr','$pcontact','$phead','$ppwd','$p_phn')";
mysql_query($qry)or die(mysql_error());
echo "<script>alert('Record successfully inserted!!!')</script>";
 mysql_close($db);
 }
 
 
  if(isset($_POST['btn_a3']))           //delete
 {
  $id=($_POST['pid']);
  require_once 'config.php';
    $qry="delete from police_stn_master where p_stn_id=$id";
mysql_query($qry)or die(mysql_error());
 echo "<script>alert('Record successfully deleted!!!')</script>";
 mysql_close($db);
 }
 
  if(isset($_POST['btn_a2']))      //update
 {
  $pname=($_POST['pname']);
  $addr=$_POST['paddr'];
   $p_phn=($_POST['p_phn']);
    $pcontact=($_POST['pmobile']);
    $phead=($_POST['phead']);
  $ppwd=($_POST['ppwd']);
   $id=($_POST['pid']);
require 'config.php'; 
 $qry="update police_stn_master set p_stn_name='$pname',address='$addr',p_stn_head='$phead',password='$ppwd',mobilenumber='$pcontact',phone='$p_phn' where $id=p_stn_id;";
 
mysql_query($qry)or die(mysql_error());
echo "<script>alert('Record successfully updated!!!')</script>";
 mysql_close($db);
 }
  
 ?>

 
 <center>
 
 
 <input type="submit" name="" value="Home"/>
 <form method="POST" action="">
 <fieldset>
 <legend>Register Police Station</legend>
 <table align="center" width="80%">
<tr><td> Police Station Id:</td><td><input type="text" name="pid" value="<?php if(isset($row)) echo $row[0];?>"/> <input type="submit" name="find" value="Find"/></td></tr>
  <tr><td> Police Station Name:</td><td><input type="text" name="pname" value="<?php if(isset($row))echo $row[1];?>"/></td></tr>
  <tr><td> Address:</td><td><textarea name="paddr" cols="15" rows="8"><?php if(isset($row))echo $row[2];?></textarea></td></tr>
<tr><td> Phone Number:</td><td><input type="text" name="p_phn" value="<?php if(isset($row))echo $row[6];?>"/></td></tr>

<tr><td> Mobile number:</td><td><input type="text" name="pmobile" value="<?php if(isset($row))echo $row[5];?>" pattern="\d{10}" maxlength="10"/></td></tr>
 <tr><td> Police Station Head:</td><td><input type="text" name="phead" value="<?php if(isset($row))echo $row[3];?>" required onvalid="Set Custom validity('User name required')"/></td></tr>
 <tr><td> Password:</td><td><input type="password" name="ppwd" value="<?php if(isset($row))echo $row[4];?>" /></td></tr>


</table>
 <input type="submit" name="btn_a1" value="Add new police station"/><input type="submit" name="btn_a2" value="Update existing police station record" /><input type="submit" name="btn_a3" value="Delete existing police station record"/><input type="submit" name="btn_a4" value="View all" />
 
 </fieldset>
 </form>
 
<?php
 if(isset($_POST['btn_a4']))             //view all
 {
  require 'config.php';
  $qry="select* from police_stn_master";
$res=mysql_query($qry)or die(mysql_error());
    echo "<h1>List Of All Registered Police Stations</h1>";
 echo "<table align=center border='1'>";
 echo "<tr><td>Police Station Id</td><td>Police station Name</td><td>Police Station Head</td><td>Address</td><td>Phone number</td><td>Mobile Number</td> </tr>";
   while($row = mysql_fetch_array($res)) 
   {
  echo "<tr>";
  echo "<td>$row[0] </td><td>$row[1]</td><td>$row[3] </td><td>$row[2]</td><td>$row[6] </td><td>$row[5]</td>";
 
  echo "</tr>";
}
    
 echo "</table><br/><br/>";
mysql_close($db);
}
?>
</pre>

</div>

