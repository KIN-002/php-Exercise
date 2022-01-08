<html>
<head>
<meta charset="UTF-8">
<title>无标题文档</title>
</head>
<body>
	<?
		$num = array("abc","cba","bac");
		$Rand = array_rand($num,1);
		echo ($Rand[0]);
		echo $num[$Rand[0]];
	?>
</body>
</html>