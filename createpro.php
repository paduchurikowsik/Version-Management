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
					
				</nav> <br/><br/>
                
                
<?php 
if ( isset($_POST["submit"]))
{
    $pname = $_POST["project"];
	$n = $_POST["numberofm"];
	if($pname == NULL|| $n==NULL)
	{
		header('Location:createpro.php');
	}
?>
<center style="color:#FFF; font-size:25px"><?php echo $pname; ?></center><br />
<form name="insertpro" method="post" action="insertpro.php">
<input type="hidden" value="<?php echo $pname; ?>"  name="project"/>
<input type="hidden" value="<?php echo $n; ?>"  name="numofmod"/>
<?php 
for($i =1 ; $i < $n+1;$i++)
{
	?>
<label>Module<?php echo $i; ?> : </label>&nbsp;&nbsp;<input type="text" name="module[]" />&nbsp;&nbsp;&nbsp;&nbsp;
<label>Module Data<?php echo $i; ?> : </label>&nbsp;&nbsp;<textarea name="mdata[]"/></textarea><br/>

<?php 
}
?>
<input type="submit" name="submit1" class="button"/>
<?php
}
else
{
?>


<form name="createpro" method="post" action="createpro.php">
<label>Project Name : </label><input type="text" name="project"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label>Number of Modules : </label><input type="text" name="numberofm"/><br/>
<input type="submit" name="submit" class="button" />

</form>
<?php } ?>
</section>
		</div>
</body>
</html>