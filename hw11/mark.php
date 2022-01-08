<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?
  $chin =$_GET["chin"];
  $eng =$_GET["eng"];
  $name=$_GET["name"];
  $php=$_GET["php"];
  $pr=$_GET["pr"];
  $maya=$_GET["maya"];
  $math=$_GET["math"];
?>
  <?
  function look($a)
  { if(is_numeric($a))
  	{
	  echo $a;
	  }
  else
  {echo "輸入值錯誤";}}
  function ans1($x,$y,$z)
  {
    $ans=($x + $y + $z)/3;
    return $ans;
  }
  ?>
<p>親愛的<? echo $name; ?>,</p>
<p>你好，你本學年的成績如下:</p>
<table width="200" border="1">
  <tr>
    <td><p>中文</p></td>
    <td><? look($chin); ?></td>
  </tr>
  <tr>
    <td><p>英文</p></td>
    <td><? look($eng);?></td>
  </tr>
  <tr>
    <td>數學</td>
    <td><? look($math); ?></td>
  </tr>
  <tr>
    <td>文化領域平均分</td>
    <td>
    <? echo ans1($eng,$chin,$math);?>
    </td>
  </tr><tr>
    <td>程式</td>
    <td><? look($php); ?></td>
  </tr>
  <tr>
    <td>媒體</td>
    <td><? look($pr); ?></td>
  </tr>
  <tr>
    <td>軟件</td>
    <td><? look($maya); ?></td>
  </tr>
  <tr>
    <td>專業領域平均分</td>
    <td>
    <? echo ans1($php,$pr,$maya); ?>
    </td>
  </tr>
</table>
</body>
</html>