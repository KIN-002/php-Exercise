<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<table width="200" border="1">
  <tr>
    <td>姓名:</td>
    <td><? echo $_POST["name"]; ?></td>
  </tr>
  <tr>
    <td>性別:</td>
    <td><? echo $_POST["gender"]; ?></td>
  </tr>
  <tr>
    <td>血型:</td>
    <td><? echo $_POST["select"]; ?></td>
  </tr>
  <tr>
    <td>婚姻:</td>
    <td><? echo $_POST["marriage"]; ?></td>
  </tr>
  <tr>
    <td>興趣:</td>
    <td>
		<? 
			$inter1=$_POST["inter1"];
			$inter2=$_POST["inter2"];
			$inter3=$_POST["inter3"];
			$inter4=$_POST["inter4"];
			$inter5=$_POST["inter5"];
			$inter6=$_POST["inter6"];
			if(isset($inter1))
			echo $inter1."&nbsp;";
			if(isset($inter2))
			echo $inter2."&nbsp;";
			if(isset($inter3))
			echo $inter3."&nbsp;";
			if(isset($inter4))
			echo $inter4."&nbsp;";
			if(isset($inter5))
			echo $inter5."&nbsp;";
			if(isset($inter6))
			echo $inter6;
		?>
	  </td>
  </tr>
  <tr>
    <td>電話:</td>
    <td><? echo $_POST["phone"]; ?></td>
  </tr>
  <tr>
    <td><p>地址:</p></td>
    <td><? echo $_POST["address"]; ?></td>
  </tr>
  <tr>
    <td>意見:</td>
    <td><? echo $message=nl2br($_POST["opinion"]); ?></td>
  </tr>
</table>
</body>
</html>