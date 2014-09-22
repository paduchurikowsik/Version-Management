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
				<h1>SCM PROJECT<span>Implementation of Ragnarok Architecture</span></h1>
				</header>
                <section class="color-1" style="padding: 3em 3em">
                	<nav class="cl-effect-1">
					<a href="createpro.php">CREATE PROJECT</a>
					<a href="projects.php">PROJECTS</a>
					
				</nav><br/><br/>
                
                
<?php 
$conn = mysql_connect("localhost","root","") or die("could not connect ".mysql_error());
mysql_select_db("scm") or die("cannot select db");
if ( isset($_GET["pid"]))
{
	$pid = $_GET["pid"];
	if($pid == NULL)
	{
		header('Location:projects.php');
	}
	else
	{

$s1 = "SELECT pname FROM PROJECTS WHERE pid=\"".$pid."\"";
$result = mysql_query($s1);
$pname = mysql_fetch_array($result);






$s = "SELECT * FROM modules WHERE pid='$pid'";
echo "<center><table width=\"980px\"><tr><th colspan=\"6\">".$pname[0]."</th></tr><tr><th>ID</th><th>PROJECT ID</th><th>MODULE NAME</th><th>LATEST VERSION</th><th>LATEST DATA</th><th>EDIT OR COMPARE</th></tr>";
$result = mysql_query($s);
while($row = mysql_fetch_array($result))
{
	echo "<tr><td align=\"center\">".$row["mid"]."</td><td align=\"center\">".$row["pid"]."</td><td align=\"center\">".$row["modname"]."</td><td align=\"center\">".$row["lver"]."</td><td align=\"center\"><textarea>".$row["ldata"]."</textarea></td><td align=\"center\"><nav class=\"cl-effect-1\"><a href=\"editmod.php?pid=".$row["pid"]."&&mid=".$row["mid"]."\">EDIT</a><br/><a href=\"comparison.php?pid=".$row["pid"]."&&mid=".$row["mid"]."\">compare</a></nav></td></tr>";
}
echo "</table></center>";
}}
else
{
	header('Location:projects.php');
}
?>

</section>
		</div>
</body>
</html>