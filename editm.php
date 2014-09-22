<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SCM Project</title>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>

<body>
		<div class="container">			
			<header>
				<h1>SCM PROJECT<span>Implementation of Ragnarok
                 Architecture</span></h1>
				</header>
                <section class="color-1" style="padding: 3em 3em">
                	<nav class="cl-effect-1">
					<a href="createpro.php">CREATE PROJECT</a>
					<a href="projects.php">PROJECTS</a>
					
				</nav><br/><br/>
                
                
<?php 
$conn = mysql_connect("localhost","root","") or die("could not connect ".mysql_error());
mysql_select_db("scm") or die("cannot select db");
if ( isset($_POST["submit"]))
{
	$lver = $_POST["lver"];
	$ldata = $_POST["ldata"];
	$mid = $_POST["mid"];
	

$s1 = "SELECT lver,ldata FROM modules WHERE mid='$mid'";
$result = mysql_query($s1);
$row = mysql_fetch_array($result);







$s = "UPDATE modules SET lver = '$lver',ldata = '$ldata',pver='$row[0]',pdata='$row[1]' WHERE mid ='$mid'";
$result = mysql_query($s);
if($result)
{
	
	header('Location:projects.php');
}
else
{
	echo "unable to update";
}
}
?>





</section>
		</div>
</body>
</html>