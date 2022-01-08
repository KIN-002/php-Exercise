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
$z=$_GET["z"];
?>
<table width="379" height="64" border="1">
  <tbody>
    <tr>
      <td colspan="2" style="text-align: center; color: #6C98F0; font-size: 36px;">hw03a</td>
    </tr>
    <tr>
      <td style="font-size: 24px">$x</td>
      <td style="font-size: 24px"><? echo $x; ?></td>
    </tr>
    <tr>
      <td style="font-size: 24px">$y</td>
      <td style="font-size: 24px"><? echo $y; ?></td>
    </tr>
    <tr>
      <td style="font-size: 24px">$z</td>
      <td style="font-size: 24px"><? echo $z; ?></td>
    </tr>
    <tr>
      <td width="290"><strong id="docs-internal-guid-6b780108-7fff-9d92-2266-785630d32e81"><img src="擷取.PNG" width="173" height="30" alt=""/></strong></td>
      <td width="170" style="font-size: 24px"><? echo 5*$x+6*$y-5*$z ;?></td>
    </tr>
  </tbody>
</table>
</body>
</html>