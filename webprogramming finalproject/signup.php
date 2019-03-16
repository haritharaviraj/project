<html>
<head>
<title>signup</title>
<link rel="stylesheet" href="login.css"/>
<script>
function checkn()
{
if(f1.username.value.length==0)
{
alert("please enter the user name");
}
}


function check()
{

if(f1.gender.value.length==0)
{
alert("please fill the gender");

}

}


function checkl()
{
if(f1.location.value.length==0)
{
alert("please fill the location");

}

}

function pass()
{
if(f1.emailid.value.length==0)
{
alert("please fill the mail");

}

}
function sub()
{
if(f1.emailid.value.length==0 || f1.location.value.length==0 || f1.gender.value.length==0 || f1.username.value.length==0)
{
alert("Please fill the empty field");
return false;
} 
else
{
alert("thanks for entering  the details");
return true;
}
}
</script>
</head>
<body>

<div id="box">
<br>
<ul>
<li><a href="hom.html">home</a></li>
<li><a href="Aboutus.html">Aboutus</a></li>
<li><a href="bcd.html">indoor</a></li>
<li><a href="asdf.html">outdoor</a></li>
<li><a href="signup.html">signup</a></li>
</ul>
<br>
<br>
<h1 style="padding-left:30%;">REGISTER FORM</h1>
<br>
<br>
<pre>                                         <a href="hom.html"> if you  already registered please click here</a></pre>
<br>
<br>
<form name="f1" method="post">

<pre>                                                name:<input type="text" name="username"  placeholder="username" required  onblur="checkn()"></pre></br>

<pre>                                              gender:<input type="text" name="gender"   placeholder="gender" required onblur="check()"></pre><br>

<pre>                                            location:<input type="text" name="location"  placeholder="location" required onblur="checkl()"></pre><br>

<pre>                                             emailid:<input type="text" name="emailid"  placeholder="emailid" required onblur="pass()"></pre><br> 

<pre>                                                        <input type="submit" name="submit"  onclick="return sub()"></pre>
</form>
</div>
<?php
{
if(isset($_POST["submit"]))
{
	$s=$_POST["name"];
	$f=$_POST["gender"];
	$e=$_POST["location"];
	$g=$_POST["emailid"];
	$conn=mysqli_connect("localhost","root","","students");
	$sql="insert into table(name,gender,location,emailid) values('$s','$f','$e','$g')";
	$res=mysqli_query($conn,$sql);
	$res=mysqli_affected_rows($conn);
	if($res>0)
	{ 
		echo"record inserted";
	}
	
}
}
?>


<div id="footer" align="center">
<p>copyright@2013</p>
</div>
</body>
</html>


 
