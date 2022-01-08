<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?
$chin=$_GET["chin"];
$eng=$_GET["eng"];
$math=$_GET["math"];

function look($x)
{
		if($x>=90 and $x<=100)
			echo "A";
		elseif ($x>=80 and $x<=89)
			echo "B";
		elseif ($x>=70 and $X<=79)
			echo "C";
		elseif ($x>=60 and $X<=69)
			echo "D";
		elseif ($x>=50 and $X<=59)
			echo "E";
		elseif ($X<50)
			echo "F";
		else
		echo "--";
}
?>
<table width="200" border="1">
  <tr>
    <td>科目</td>
    <td>分數</td>
    <td>等級</td>
  </tr>
  <tr>
    <td>中文</td>
    <td><? echo $chin?></td>
    <td><? look($chin)?></td>
  </tr>
  <tr>
    <td>數學</td>
    <td><? echo $math?></td>
    <td><? look($math)?></td>
  </tr>
  <tr>
    <td>英文</td>
    <td><? echo $eng?></td>
    <td><? look($eng)?></td>
  </tr>
</table>
</body>
</html>