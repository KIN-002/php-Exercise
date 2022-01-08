<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?
echo "今天是:". date("Y")."年". date("m")."月". date("d")."日(". date("l") .")<br>";
echo "你的出生日期是:".$_GET["year"]."年". $_GET["month"]."月".$_GET["day"]."日";
echo "(".$date = date('l',strtotime(0,0,0,$_GET["year"].$_GET["month"].$_GET["day"])).")";

echo "<br>數起來你也差不多";
echo date('Y')-$_GET['year'];
echo "歲了!";
?>
</body>
</html>