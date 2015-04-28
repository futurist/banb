<?php

$rate = $_GET["rate"];


$str="";
if($rate!=""){
	$fp = fopen("rate.txt", "w");
	fwrite($fp, $rate);
	fclose($fp);
	$str = "设置成功";
}
sleep(2);
$old = file_get_contents("rate.txt");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>设置</title>
</head>
<body>

<form>
	比率(填 10 代表<i>10%</i>, 0代表不中)：<br><input type="text" name="rate" value="<?php echo $old; ?>">
	<input type="submit" value="提交">
</form>
<?php echo $str;?>


</body>
</html>



