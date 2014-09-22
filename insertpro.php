
<?php 
if ( isset($_POST["submit1"]))
{
    $pname = $_POST["project"];
	$n = $_POST["numofmod"];
	$modules = $_POST["module"];
	$mdata = $_POST["mdata"];
$conn = mysql_connect("localhost","root","") or die("could not connect ".mysql_error());
mysql_select_db("scm") or die("cannot select db");

$s5 = "SELECT pid FROM PROJECTS WHERE pname=\"".$pname."\"";
$r5 = mysql_query($s5);
$pi = mysql_fetch_array($r5);
if($pi!=NULL)
{
	echo "project name exits select other";
}
else
{
$s = "INSERT INTO PROJECTS VALUES ('',\"".$pname."\",\"1.0\")";
$rq=mysql_query($s);
if(!$rq)
{
	echo "cannot insert into db";
}
else
{

$s1 = "SELECT pid FROM PROJECTS WHERE pname=\"".$pname."\"";
$result = mysql_query($s1);
$pid = mysql_fetch_array($result);
$i=0;
foreach($modules as $m)
{
	$s2 = "INSERT INTO modules VALUES ('',".$pid[0].",\"".$m."\",\"1.0\",\"1.0\",\"".$mdata[$i]."\",\"".$mdata[$i]."\")";
	$i++;
	if(!mysql_query($s2))
{
	echo "cannot insert into db";
}
else
{
	header('Location:projects.php');
}
}
}}




}
?>
