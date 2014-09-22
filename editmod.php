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
if ( isset($_GET["pid"]) && isset($_GET["mid"]))
{
	$pid = $_GET["pid"];
	$mid = $_GET["mid"];
	if($pid == NULL || $mid == NULL )
	{
		header('Location:projects.php');
	}
	else
	{

$s1 = "SELECT pname FROM PROJECTS WHERE pid=\"".$pid."\"";
$result = mysql_query($s1);
$pname = mysql_fetch_array($result);






$s = "SELECT * FROM modules WHERE mid='$mid'";

echo "<center><table width=\"980px\"><form name=\"editmod\" method=\"post\" action=\"editm.php\"><tr><th colspan=\"6\">".$pname[0]."</th></tr><tr><th>id</th><th>project id</th><th>module name</th><th>Latest Version</th><th>Latest Data</th><th>EDIT</th></tr>";
$result = mysql_query($s);
$row = mysql_fetch_array($result);
	echo "<tr><td align=\"center\">".$row["mid"]."</td><td align=\"center\">".$row["pid"]."</td><td align=\"center\">".$row["modname"]."</td><td align=\"center\"><input type=\"text\"  name=\"lver\" value=\"".$row["lver"]."\" /></td><td align=\"center\"><textarea name=\"ldata\">".$row["ldata"]."</textarea></td><td align=\"center\"><input type=\"hidden\" value=\"".$row["mid"]."\" name=\"mid\"/><input type=\"submit\" name=\"submit\" class=\"button\"/></td></tr>";

echo "</form></table></center>";
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