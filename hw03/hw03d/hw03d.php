<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<?
	$a=$_GET[a];
	$b=$_GET[b];
	$c=$_GET[c];
	$d = sqrt($b*$b-4*$a*$c);
	$e = (-$b + $d)/(2*$a);
	$f = (-$b - $d)/(2*$a);
	
?>
<table width="385" height="180" border="1">
  <tbody>
    <tr>
      <td colspan="2" style="text-align: center; color: #F670FF; font-size: 36px;">hw03d</td>
    </tr>
    <tr>
      <td width="223">$a</td>
      <td width="146"><? echo $a; ?></td>
    </tr>
    <tr>
      <td>$b</td>
      <td><? echo $b; ?></td>
    </tr>
    <tr>
      <td>$c</td>
      <td><? echo $c; ?></td>
    </tr>
    <tr>
      <td><img src="擷取4.png" width="254" height="58" alt=""/></td>
      <td><? echo $e;?>,<? echo $f;?></td>
    </tr>
  </tbody>
</table>
</body>
</html>