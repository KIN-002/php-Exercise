<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<h1>動物園有小鳥和大象共有36個頭,100隻腳,則有多少隻小鳥和大象?</h1>
<?
for($bird=0;$bird<36;$bird++)
{
for($ele=0;$ele<36;$ele++)
{
if(($ele+$bird==36)&&($bird*2+$ele*4==100))
{
echo "答:<br>大象有:".$ele."隻.<br>小鳥有:".$bird."隻";
}
}
}
?>
</body>
</html>