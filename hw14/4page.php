<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<?
	session_start();
	session_register("em");
	$_SESSION["em"]=$_POST["email"];
?>
<body>
<p>your input data is</p>
<p>user id：<? echo $_SESSION['id']; ?>
<br/>
password：<? echo $_SESSION['pwd']; ?>
<br/>
email：<? echo $_SESSION['em']; ?>
</p>
<? session_destroy();?>
</body>
</html>