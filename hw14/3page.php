<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<body><form id="form1" name="form1" method="post" action="4page.php">
  <label>please input your User email:
    <br />
    <input type="text" name="email" id="email" />
  </label>
  <label>
    <input type="submit" name="button" id="button" value="送出" />
  </label>
	<?
	session_start();
	session_register("pwd");
	$_SESSION["pwd"]=$_POST['pass'];
	?>
</form>
</body>
</html>