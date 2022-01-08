<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
	<p>輸入3個數,並順序(小至大)把3個數寫出來</p>
	<form id="form1" name="form1" method="get" action="">
  <p>
    <label>第一個數字:
      <input name="a" type="text" id="a" size="8" />
    </label><br>
    <label>第二個數字:
      <input name="b" type="text" id="b" size="8" />
    </label><br>
    <label>第三個數字:
      <input name="c" type="text" id="c" size="8" />
    </label><br>
    <input type="submit" name="button" id="button" value="送出" />
  </p>
</form>
<p>
<?
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c']; 
if($a<$b&&$a<$c)
{
	echo "最小值是:",$a;
	if($b<$c)
	{
		echo "<br>其次的是:",$b,"<br>最大值是:",$c;
	}
	else
	{
		echo "<br>其次的是:",$c,"<br>最大值是:",$b;
	}
}
elseif($b<$c)
{
echo "最小值是:",$b;
	if($c<$a)
	{
		echo "<br>其次的是:",$c,"<br>最大值是:",$a;
	}
	else
	{
		echo "<br>其次的是:",$a,"<br>最大值是:",$c;
	} 
	}
	else
	{
	echo "最小值是:",$c;
	if($b<$a)
	{
		echo "<br>其次的是:",$b,"<br>最大值是:",$a;
	}
	else
	{
		echo "<br>其次的是:",$a,"<br>最大值是:",$b;
	}
}
?>
	</p>
	</form>
</body>
</html>