<head>
<meta charset="utf-8" />
<title>無標題文件</title>
</head>
<body>
<?
$a =$_GET["math"];

function fib($f)
{
    if ($f == 0) return 0;
    if ($f == 1) return 1;
    return fib($f - 1)+ fib($f - 2);
}
for ($i = 0; $i <= $a; $i++) 
{
    echo fib($i).' ';
}
?>
</body>
</html>