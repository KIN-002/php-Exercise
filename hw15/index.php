<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<p>請輸入您的基本資料：</p>
<hr />
<form id="form1" name="form1" method="post" action="display_data.php">
  <table border="1">
    <tr>
      <td>姓名:</td>
      <td><label>
        <input type="text" name="name" id="name" />
      </label></td>
    </tr>
    <tr>
      <td>性別:</td>
      <td><label>
        <input name="gender" type="radio" id="ｍａｌｅ" value="男" checked="checked" />男
		<input type="radio" name="gender" id="Ｆｅｍａｌｅ" value="女" />女
		<input type="radio" name="gender" id="other" value="其他" />其他
	</label></td>
    </tr>
    <tr>
      <td>血型:</td>
      <td><select name="select" id="select">
        <option value="A型">A型</option>
        <option value="B型">B型</option>
        <option value="AB型">AB型</option>
        <option value="O型" selected="selected">O型</option>
      </select></td>
    </tr>
    <tr>
      <td>婚姻:</td>
      <td><label>
        <input type="radio" name="marriage" id="married" value="已婚" />已婚
        <input name="marriage" type="radio" id="unmarried" value="未婚" checked="checked" />未婚
      </label></td>
    </tr>
    <tr>
      <td>興趣:</td>
      <td><p>
        <input type="checkbox" name="inter1" value="運動">運動
        <input type="checkbox" name="inter2" value="音樂">音樂
		<input type="checkbox" name="inter3" value="電影">電影
		<input type="checkbox" name="inter4" value="看海">看海
		<input type="checkbox" name="inter5" value="歌唱">歌唱
		<input type="checkbox" name="inter6" value="閱讀">閱讀
      </p></td>
    </tr>
    <tr>
      <td>電話:</td>
      <td><label>
        <input type="text" name="phone" id="phone" />
      </label></td>
    </tr>
    <tr>
      <td><p>地址:</p></td>
      <td><label>
        <input name="address" type="text" id="address" size="50" />
      </label></td>
    </tr>
    <tr>
      <td>意見:</td>
      <td><label>
        <textarea name="opinion" id="opinion" cols="50" rows="5"></textarea>
      </label></td>
    </tr>
  </table>
  <input type="submit" name="submit" id="submit" value="送出" />
</form>
</body>
</html>