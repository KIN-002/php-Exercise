<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<?
$x=$_GET["x"];
?>
<table width="323" height="63" border="1">
  <tbody>
    <tr>
      <td colspan="2" style="text-align: center; font-size: 36px; color: #F49294;">hw03b</td>
    </tr>
    <tr style="font-size: 24px">
      <td>$x</td>
      <td><? echo $x;?></td>
    </tr>
    <tr>
      <td width="189"><img src="擷取2.PNG" width="158" height="28" alt=""/></td>
      <td width="118" style="font-size: 24px"><? echo pow($x,2)+6*$x+3; ?></td>
    </tr>
  </tbody>
</table>
</body>
</html>