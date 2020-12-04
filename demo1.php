<html>
<head>我的第一个php程序</head>
<body>
<br/>
<?php
	$i=9+9;/*  给变量赋值 用 $   */
	echo'结果是：'.$i;

	$a=890;
	echo"<br/>";
	var_dump($a);//显示变量信息
	$a=1.1;
	echo"<br/>";
	var_dump($a);
	echo"<br/>";


	echo"php区分大小写：";
	$a=90;
	$A=99;
	echo"a=".$a;
	echo"<br/>";
	echo"A=".$A;


	echo"<br/>";
	echo"变量名需要以字母或下划线开头！！ 不能以数字开头 也不能用特殊字符"

?>
</body>
</html>