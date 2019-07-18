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
	<h2>Enter a Message.</h2>
<p>
	this will send a message to the Server(s)<br />
</p>


<form name="form" action="" method="post">
<?php include("includes/Select.php");?><br/>
  <input type="text" name="message" id="message" value="">
	<input type="submit" name="RUN" id="RUN" value="RealCluster" />
  <input type="submit" name="RUNTEST" id="RUNTEST" value="TestCluster" /><br/>
</form>

<?php

// checks if button is pressed
if(array_key_exists('RUN',$_POST))  {
  $message = $_POST['message'];
  $instanceId = $_POST['Server'];
  echo $instanceId;
  if ($instanceId == "All") {runcommand('/silent-command game.print("' . $message . '")', $token);}
    else {runcommand('/silent-command game.print("' . $message . '")', $token, $instanceId);}
  }

if(array_key_exists('RUNTEST',$_POST))  {
  $message = $_POST['message'];
  $instanceId = $_POST['Server'];
  echo $instanceId;
  if ($instanceId == "All") {runcommandTest('/silent-command game.print("' . $message . '")', $Testtoken);}
    else {runcommandTest('/silent-command game.print("' . $message . '")', $TestToken, $instanceId);}
  }
?>

</form>
</div>

<?php include("includes/footer.php");?>

</body>
</html>