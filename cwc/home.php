<html>
<head>
<link rel="stylesheet" href="style1.css" type="text/css"/>
</head>


<body style="background-image: url(images/p3.jpg); ">


<?php
require 'header.html';

require 'header_m.php';
require 'menu.php';
?>
<br /><br />

<br /> <br />
<br /> <br />
<div style="background-color: burlywood; opacity:0.7; width:80%; float:left ;border-radius:10px;">
<pre>
<?php require 'emer_contact.html';
echo "<br/>";

 ?>




</pre>

</div>


<div style="background-color: burlywood; opacity:0.8; width:230px; float:right ;border-radius:10px;">
<center>
<br />
<img src="images\create.jpg" align="center" width="90%"><br /><br />
                        
                        <label><h4>
                                           USER ID:</h4> </label>
					
                        <input type="text"  name="textname"  value="" /><br/><br/>
						<label><h4> 
                        
                        PASSWORD:</h4> </label>
                      
						
                        <input type="password"  name="pass"  value=""/><br/><br/>
						
					
            
                        <input type= "submit" value="LOGIN"  name="login" />
                        <br /><br />



</center>

</div>
<br /><br />
</body>

</html>