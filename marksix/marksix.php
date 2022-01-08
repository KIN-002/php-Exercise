<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>
<body>
<p>今期六合彩攪珠的結果是:</p>
<br>
<?
	$mark[0] = "true";
	for($x=1;$x<=49;$x++)
	{
		$mark[$x] = "true";
	}
	
	while($math != 8)
	{
		if ($math == 6) 
		{
			echo "<img src='plus.jpg'>";
			$math++;
		}
		$m = rand(1,49);
		if ($mark[$m]=="true") 
		{
			echo "<img src='".$m.".jpg'>";
			$math ++;
		}
	}
?>
</p>
</body>
</html>