<html>



<?php

//调用function01的jisuan()函数
	require 'function01.php';

	$num1=20;
	$num2=50;
	$oper="+";
	$res=jisuan($num1,$num2,$oper);

	//$res=jisuan(2,9,"*");  参数列表（形参）可以给参数 ，也可以直接赋值
	echo"计算结果=".$res;
	

	//php页面互相调用
	//require  require_once（最常使用）  include  include_once

	//require() 用法：（放在最前面）
			//require "要引用的文件名.php"; 可双引号可单引号
			//$filepath="wenjian.php";    require  $filepath;
			//require ('引用的文件名.php');
		//require()与require_once()的区别 ： require()可以重复引入，引几次打印几次 ，
		                                  //require_once()会判断前面个是否引用过，如果引用过则不再引用，即包含require_once的只能引用一次

	//include()用法：（放在要调用的函数的前面）
			//include "要引用的文件名.php"; 可双引号可单引号
			//$filepath="wenjian.php";    include $filepath;
			//include ('引用的文件名.php');
		//include()与include_once()的区别 ： include()可以重复引入，引几次打印几次 ，
		                                  //include_once()会判断前面个是否引用过，如果引用过则不再引用，即包含require_once的只能引用一次



	//inquire 和include 的异同：
						//同：都可以引入别的页面
						//异：include出错则会继续执行，inquire 出错会终止程序





//函数的调用：程序入口是一个栈。php执行时一旦遇到调用，就回开辟一个新栈，执行该被调用函数的代码，完毕后 返回继续执行代码

?>
</html>