<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<style type="text/css">
<!--
.blue {
	color: #00F;
}
.red {
	color: #F00;
}

-->
</style>
</head>

<body>
<?
$num = $_GET["number"];
$name = array("","區家俊","陳舜","曾力","鄭建豪","張震華","張駿威","鍾阮晴","范科棋","林俊瑛","劉詠濠","梁嘉雯","李健源","陸廷政","伍家樂","吳兆鋒","潘昊伸","阮嘉熙","蕭遠杰");
$x = array("",64,19,83,30,56,48,52,44,47,38,66,77,52,38,28,54,57,60);
?>
<table width="200" border="1">
  <tr>
    <td>學號</td>
    <td>姓名</td>
    <td>總成績</td>
    <td>名次</td>
  </tr>
  <tr>
    <td><? echo "$num"?></td>
    <td><? echo $name["$num"]; ?></td>
    <td><? if($x["$num"]>=60){echo "<span class='blue'>".$x["$num"]."</span>";} else{echo "<span class='red'>".$x["$num"]."</span>";}?></td>
    <td><? ?></td>
  </tr>
</table>
</body>
</html>