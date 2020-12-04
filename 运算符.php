<?php
	//算数运算符：+ - * / %
	//自加自减 ++  -- 注意运算顺序
	//+= -+ *= /= %=
	$a=7/3;
	echo"a=".$a; //共14位   
	echo'<br/>';
	//判断两个数是否能够整除
	$a=90;
	$b=5;
	if($a%$b==0){
		echo'可以整除';
	}
	else{
		echo'不能整除';
	}
	echo'<br/>';


	//比较运算符 
	//==等于（仅值相等）  ===全等（值相等且类型相同） ！=不等(值不等)  <>不等  ！==非全等 （值不同 或 类型不同） 
	// >大于     <小于  >=大于等于  <=小于等于
	$c=2;
	$d=2.0;
	if($c==$d){ // 值相等
		echo'$c==$d';
	}
	/*if($c===$d)  //值相等且类型相等
		echo'$c===$d';*/


     //逻辑运算符
	 //and (与，同1为1)	or（或，有1就为1）  xor（抑或，任一为1，但不能同时为1）  ！（非）  &&（与） ||(或)
	 $a=10;
	 $b=7;
	 if($a++>10 && $b++>7){
		 echo'ok!';
	 }
	 echo'$a='.$a.'$b='.$b;//ok 不显示  a=11 b=7  &&前面一个为假 后面一个条件就不会被执行	

	 //两个逻辑与 和 逻辑或 
	 //  and -> &&    or -> ||
	 // || 优先级高于 or     or 的优先级低于 =	
	 // && 优先级高于 and    and 的优先级低于 =
	 $e = false || true;
	 $f = false or true; //or 低于=  相当于先将 false 赋值给f 再和true 进行or
	 var_dump($e,$f);  

	 $g = false && true;
	 $h = true and false;  //and 低于=  相当于先将 true 赋值给h 再和true 进行and
	 var_dump($g,$h); 


	 //三元运算符
	 // 表达式1？表达式2：表达式3  1为真 取表达式2 为假 取3


	 //字符串运算符
	 //连接运算符 .   两个变量（基本数据类型），若用连接运算符连接 ，则不论类型 将其当作字串拼接起来
	 $a="hello!";
	 $b="world";
	 $d="123";
	 $c=$a.$b.$d;
	 echo $c;


	//类型运算符
	//instanceof 用于确定一个php变量是否属于某一class类的实例
	//不能用于判断基本数据类型
	class Cat{}
	class Dog{}
	$cat1 = new Cat;
	//var_dump($cat instanceof Cat);//判断cat1 是否为Cat类型
	if($cat1 instanceof Cat){
		echo'$cat1 是只猫';
	}

?>