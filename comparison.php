<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SCM Project</title>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="dojo.js"></script>
<script type="text/javascript" src="diffview.js"></script>
<link rel="stylesheet" type="text/css" href="css/diffview.css"/>
<script type="text/javascript" src="difflib.js"></script>


<script language="javascript">

var $=dojo.byId;dojo.require("dojo.io");var url=window.location.toString().split("#")[0];function diffUsingJS(){var base=difflib.stringAsLines($("baseText").value);var newtxt=difflib.stringAsLines($("newText").value);var sm=new difflib.SequenceMatcher(base,newtxt);var opcodes=sm.get_opcodes();var diffoutputdiv=$("diffoutput");while(diffoutputdiv.firstChild)diffoutputdiv.removeChild(diffoutputdiv.firstChild);var contextSize=$("contextSize").value;contextSize=contextSize?contextSize:null;diffoutputdiv.appendChild(diffview.buildView({baseTextLines:base,newTextLines:newtxt,opcodes:opcodes,baseTextName:"Base Text",newTextName:"New Text",contextSize:contextSize,viewType:$("inline").checked?1:0}));window.location=url+"#diff";}function diffUsingPython(){dojo.io.bind({url:"/diff/postYieldDiffData",method:"POST",content:{baseText:$("baseText").value,newText:$("newText").value,ignoreWhitespace:"Y"},load:function(type,data,evt){try{data=eval('('+data+')');while(diffoutputdiv.firstChild)diffoutputdiv.removeChild(diffoutputdiv.firstChild);$("output").appendChild(diffview.buildView({baseTextLines:data.baseTextLines,newTextLines:data.newTextLines,opcodes:data.opcodes,baseTextName:data.baseTextName,newTextName:data.newTextName,contextSize:contextSize}));}catch(ex){alert("An error occurred updating the diff view:\n"+ex.toString());}},error:function(type,evt){alert('Error occurred getting diff data.  Check the server logs.');},type:'text/javascript'});}
</script>
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

$result = mysql_query($s);
$row = mysql_fetch_array($result);
                
                
                
                
                
                
   ?>             
                
                <center><table width="980px">
	<tr><th colspan="2"><h1>Module Difference Comparison</h1></th></tr>
    <tr><th colspan="2"><?php echo $pname[0]; ?> - <?php echo $row["modname"]; ?></th></tr>
    
    <tr><th colspan="2"><strong>Diff View Type:</strong>
	<input type="radio" name="_viewtype" checked="checked" id="sidebyside"/> Side by Side &#160;&#160;
	<input type="radio" name="_viewtype" id="inline"/> Inline
    </th></tr>

    <tr><td><h2>Previous Version</h2></td><td><h2>Latest Version</h2></td></tr>
    <tr><td><textarea id="baseText" style="width:600px;height:300px"><?php echo $row["pdata"]; ?></textarea></td><td><textarea id="newText" style="width:600px;height:300px"><?php echo $row["ldata"]; ?></textarea></td></tr>
    <tr><th colspan="2"><input type="button" value="Submit" onclick="javascript:diffUsingJS();" class="button"/></th></tr>
    
	<input type="hidden" id="contextSize" value=""></input><br/>
	
	
	<tr><th colspan="2" align="center"><a name="diff"> </a><div id="diffoutput" style="width:100%"> </div></th></tr>
    </table></center>
    </section>
		</div>
    
    <?php }}?>
</body>
</html>
