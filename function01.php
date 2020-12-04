<?php

//一个计算函数 + - * /
//function是关键字不能改变   
//括号内 参数列表 不用写类型 用于接收数据
//函数名不区分大小写 变量名区分大小写

	function jisuan($num1,$num2,$oper){
		//函数主体
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
				echo"运算符有误";
		}

		//返回一个结果
		return $res;
	}

	//为防止全局变量的混用 可以使用unset($var) 来删除一个变量

	//$a = 12;
	/*
	function abc($a){
		unset($a); //表示再abc函数范围内 不再使用全局变量 a的值 在之后重新定义a的值
		$a=45;
	}
	abc($a);
	echo $a;
*/


//php在传递变量时 默认是值传递，如果需要引用（地址）传递  需要使用  &
/*
	$a=213;
	func abc(&$b){
		$b=314;       // 加上地址符之后  $b的值会影响外边abc传入的值 所以 echo $a =>314 
	}
	abc($a);
	echo $a;
*/

?>