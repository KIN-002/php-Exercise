<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body><P>Please input your email;</P>
	<form id="form1"name="form1" method="post"action="4page.php">
		<input type="text"name="email" id="email"/>
		
		
		<label>
	<input type="submit" name="button"id="button"value="送出"/></label>
		<input name="id" type="hidden"id="id"value="<? echo $_POST['id']?>">
		<input name="password" type="hidden"id="password"value="<? echo $_POST['password']?>">
	</form>
		<p>&nbsp;</p>
</body>
</html>