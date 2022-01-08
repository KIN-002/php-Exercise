 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
	<P>Please input your Password</P>
	<form id="form1" name="form1" method="post" action="3page.php">
		<label>
			<input name="password" id="password"/>
		</label>
		<label>
			<input type="submit"name="button"id="button"value="送出"/>
			
		</label>
		<input name="id" type="hidden"id="id"value="<? echo $_POST['id']?>">
	</form>
	
</body>
</html>