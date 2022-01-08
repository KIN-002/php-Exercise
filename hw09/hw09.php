<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php
$ans=0;
$s=1;
$x=1;
for($x;$x<=100;$x++)
{
	$ans=$ans+$x*$s;
    $s=$s*-1;
}
?>
<p>
請計算1-2+3-4+5.......+99-100=?
</p>
<p>答案是:<? echo $ans; ?></p>
</body>
</html>