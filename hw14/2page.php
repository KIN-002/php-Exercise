<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
	
<body><form id="form1" name="form1" method="post" action="3page.php">
  <label>please input your User password:
    <br/>
    <input type="text" name="pass" id="pass" />
  </label>
  <label>
    <input type="submit" name="button" id="button" value="送出" />
  </label>
	<?
	session_start();
	session_register("id");
	$_SESSION["id"]= $_POST['id'];
	?>
</form>
</body>
</html>