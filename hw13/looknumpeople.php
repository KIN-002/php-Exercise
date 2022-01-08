<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>
<?
	$numpeople = fopen("numpeople.txt","r");
	$numecho=fgets($numpeople);
	fclose($numpeople);
	$numecho++;
	$numpeople = fopen("numpeople.txt","w");
	fwrite($numpeople,$numecho);
	fclose($numpeople);
?>
<body>
參觀人數：
<? 
	$string = strlen($numecho);
	for ($i=0 ;$i<$string;$i++)
	{
		echo '<img src='.substr($numecho,$i,1).'.GIF width=14 height=19/>';
	}
?>
</body>
</html>