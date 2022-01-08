<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>
<?
	$i=$_POST["id"];
	$pw=$_POST["password"];
	$e=$_POST["email"];
?>

<body>
	<p> please input date is;</p><br>
	<p>user id:<? echo $i;?></p>
	<p>password:<? echo $pw?></p>
	<p>email:<input name="email"type="hidden"id="email"value="<?echo $_POST['email']?>"><? echo $e ?></p>
</body>
</html>	