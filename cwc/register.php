<?php require 'basic_bg.php'; ?>
<div class="div_bg"style="background-color: burlywood; opacity:0.7; width:90%;  ;border-radius:10px;alignment-adjust: central; " >
<pre>
<?php require 'emer_contact.html'; ?>


Welcome ,$user_name.
<fieldset>
<legend><h1>Registration</h1></legend>

  
 
 <form method="POST" action="">
 
 <table align="center" width="80%">

 
 <tr><td> User name:</td><td><input type="text" name="uname" required onvalid="Set Custom validity('User name required')"/></td></tr>
 <tr><td> Password:</td><td><input type="password" name="upwd"/></td></tr>
 <tr><td> Email:</td><td><input type="email" name="uemail" autocomplete="off"/></td></tr>
 <tr><td> Mobile number:</td><td><input type="text" name="umobile" pattern="\d{10}" maxlength="10"/></td></tr>
 <tr><td> Gender:</td><td><input type="radio" name="ugender" value="male"/>Male<input type="radio" name="ugender" value="female"/>Female</td></tr>
 <tr><td> Full Name:</td><td><input type="text" name="uf_name"/></td></tr>
 <tr><td> Address:</td><td><textarea name="uaddr" "cols="15" rows="8"></textarea></td></tr>
 </table>
 <input type="submit" name="btnsubmit" value="SUBMIT"/>

 
 
 </form>
 </fieldset>
</pre>

</div>
 <?php
 if(isset($_POST['btnsubmit']))
 {
  $uname=($_POST['uname']);
 $pwd=($_POST['upwd']);
 $fname=($_POST['uf_name']);
 $umob=($_POST['umobile']);
 
 $addr=$_POST['uaddr'];
 $gender=$_POST['ugender'];
 settype($gender,"string");
 
$umail=$_POST['uemail'];
   
require 'config.php'; 
 $qry="insert into login_master values('$uname','$pwd','$fname',$umob,'$addr',0,'$gender','$umail')";
 mysql_query($qry)or die(mysql_error());
 mysql_close($db);
 }
 ?>
</body>
</html>