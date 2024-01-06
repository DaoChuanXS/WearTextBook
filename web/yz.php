<html>
<head>
<meta charset="utf-8">
<title>腕上教材验证</title>
</head>
<body>
<?php
$dz = $_POST['zh'].".txt";
if(file_exists($dz))
{
	$a =fopen($dz,"r");
	echo fread($a,"10000000");
}
else
{
	echo "【你还未激活腕上教材Pro】";
}

?>
</body>
</html>