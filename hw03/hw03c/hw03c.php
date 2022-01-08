<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<?
	$x=$_GET["x"];
	$y=$_GET["y"];
?>
<table width="361" border="1">
  <tbody>
    <tr>
      <td colspan="2" style="text-align: center; font-size: 36px; color: #54B308;">hw03c</td>
    </tr>
    <tr>
      <td width="186">$x</td>
      <td width="159"><? echo $x; ?></td>
    </tr>
    <tr>
      <td>$y</td>
      <td><? echo $y; ?></td>
    </tr>
    <tr>
      <td><img src="擷取3.png" width="209" height="52" alt=""/></td>
      <td><? echo (($x+5*$x*$y)*2*$y)/(2); ?></td>
    </tr>
  </tbody>
</table>
</body>
</html>