<?php
session_start(); // Must start session first thing

$toplinks = "";
if (isset($_SESSION['id'])) {
	// Put stored session variables into local php variable
  print_r($_SESSION['id']);
  print_r($_SESSION['name']);
    $userid = $_SESSION['id'];
    $name = $_SESSION['name'];

	$toplinks = '<a href="simple2/index.php?id=' . $userid . '">' . $name . '</a> &bull; 
	<a href="simple2/index.php">Account</a>';
} else {
	$toplinks = '<a href="register.php">Registrera</a> &bull; <a href="login.php">Logga in</a>';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hampus Haaranen</title>
<style type="text/css">
<!--
body {margin: 0px}
-->
</style></head>

<body>
<table style="background-color: #CCC" width="100%" border="0" cellpadding="12">
  <tr>
    <td width="78%"><h1>Hampus Haaranen</h1></td>
    <td width="22%"><?php echo $toplinks; ?></td>
  </tr>
</table>
<div style="padding:12px">
  <h2>Välkommen till min blogg</h2>
</div>
</body>
</html>