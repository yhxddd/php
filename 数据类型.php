<?php

	echo"基本数据类型：整型(int)，小数型(float,double)（浮点型，包含单精度和双精度），布尔类型(bool)（表示 真 假），字符串(string):一个字符占用一个字节";
	echo"<br/>";
	echo"复合类型:数组（arry），对象(object)";
	echo"<br/>";
	echo"特殊数据类型：空(null),资源类型(resource)";
	
	echo"<br/>";

	echo"php的整数(占四个字节，1字节=8位)十进制、八进制（0开头）、十六进制（0x开头），且都是有符号数";
	echo PHP_INT_SIZE;/*整型字长*/
	echo PHP_INT_MAX;/*整型表示的最大整数*/
	$ts=1;/*整型 */
	$ts=true;/*布尔类型*/
	$ts=1.1;/*float*/
	$ts=3.1415926;/*double*/
	$ts="我是好人！";/*字符串*/

	echo"浮点数的精度是14 位 精度从非0那位开始算起";


?>