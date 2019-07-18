<?php
?>

<!DOCTYPE html>
<html class="dark">
<head>
<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>
<?php include("includes/api.php");?>
<?php include("includes/config.php");?>


<div class="container" id="main-content">
	<h2>Enter a command.</h2>
<p>
	this will send a Command to the Server(s)<br />
	Please make sure you know what youre doing!<br />
	fires get started very easily...<br />
</p>


<form name="form" action="" method="post">
<?php include("includes/Select.php");?><br/>
	<input type="text" name="command" id="command" value="">
    <input type="submit" name="RUN" id="RUN" value="RealCluster" />
    <input type="submit" name="RUNTEST" id="RUNTEST" value="TestCluster" /><br/>
</form>

<?php
// checks if button is pressed
if(array_key_exists('RUN',$_POST))  {
  $command = $_POST['command'];
  $instanceId = $_POST['Server'];
  echo $instanceId;
  if ($instanceId == "All") {runcommand($command, $token);}
    else {runcommand($command, $token, $instanceId);}
  }

if(array_key_exists('RUNTEST',$_POST))  {
  $command = $_POST['command'];
  $instanceId = $_POST['Server'];
  echo $instanceId;
  if ($instanceId == "All") {runcommandTest($command, $TestToken);}
    else {runcommandTest($command, $TestToken, $instanceId);}
  }
?>

</form>
</div>

<?php include("includes/footer.php");?>

</body>
</html>

