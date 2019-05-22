<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SurfClipse| Troubleshooting</title>
<link href="css/styles.css" type="text/css" rel="stylesheet" />
<style type="text/css">
.stepimg
{
	height:562px;
	width:1000px;
	border:0px;
}
table tr
{
	padding-top:5px;
	padding-bottom:5px;
}

body
{
margin-left:50px;
margin-right:20px;
margin-top:20px;
margin-bottom:10px;
}
code
{
font-size:12px;
color:blue;
}
</style>
</head>

<body>
<form method="post">
<h1>SurfClipse Troubleshooting</h1>
<div class="bighr">&nbsp;</div>
<div>
<p>
Go to <a href="tools.php">tools</a>, <a href="surfclipse_tutorial.php">Surfclipse manual</a> page
</p>
<h2>OS: Ubuntu </h2>
<p>
<p><strong>JDK Version</strong></p>

To find out your JDK version, execute
<br>
<code>
java -version
</code>
<br />
<br />
Please make sure you have <b>JDK 7+</b> installed. The plug-in is not compatible below JDK 7. You can install openjdk 7 and set as default JDK using the following commands.
<p>
<code>
sudo apt-get install openjdk-7-jdk
<br />
sudo update-alternatives --config java
<br />
sudo update-alternatives --config javac
</code>
</p>
<p><strong style="color:red">org.eclipse.swt.SWTError: No more handles [Unknown Mozilla Path (MOZILLA_FIVE_HOME not set)]</strong></p>
This error happens when Mozilla browser does not come with the Linux package. You need to install <code>libwebkitgtk</code> package to get rid of the error using the following command.
<p>
<code>
sudo apt-get install libwebkitgtk-1.0-0
</code>
</p>
<hr />
<p><strong>Got a new issue? Inform me below.</strong></p>
<div>
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="150px"><b>Issue title:</b></td><td>
<textarea name="title" cols="80" rows="1"></textarea>
</td>
</tr>
<tr>
<td width="150px"><b>Description</b></td>
<td>
<textarea cols="80" rows="10" name="desc">
</textarea>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>
<input type="submit" name="submit" value="Submit Issue" />
</td>
</tr>
</table>
<p>
<?php 
if(isset($_POST["submit"]))
{
	if(isset($_POST["title"]) && isset($_POST["desc"]))
	{
		//send the email
		$message="Issue title:".$_POST["title"]."\n"."Description:".$_POST["desc"];
		$header="";
		mail("masudcseku@gmail.com","New Issue about SurfClipse",$message);
		echo "<b>Your issue submitted successfully!</b>";
	} 
}
?>
</p>

</div>
</p>
</div>

</form>
</body>
</html>
