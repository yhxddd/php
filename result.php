<?php

	//接收从myCal.php 提交的数据
	//接收 num1 num2  运算符

	//$_REQUEST  该方法用于接收用户的post 或 get请求数据
	$num1 = $_REQUEST['num1'];
	$num2 = $_REQUEST['num2'];  // [ ]中 名称需要跟 myCal.php 中 传输的数据名称相同 否则 接收不到
	$oper = $_REQUEST['oper'];
	// echo"接收到".num1."||".num2."||".oper;
	$res=0;
	switch($oper){
		case"+":
			$res=$num1+$num2;
			break;
		case"-":
			$res=$num1-$num2;
			break;

		case"*":
			$res=$num1*$num2;
			break;
		case"/":
			$res=$num1/$num2;
			break;

		default:
			echo"运算符不正确";
	}

	echo'运算结果是：'.$res;
?>

<br/><br/>
<a href='myCal.php'>返回计算器页面</a>