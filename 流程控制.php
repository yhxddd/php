<?php

	//一、顺序控制
	//就是不加控制的流程，按照顺序执行书写的代码




	//二、分支控制
	//有选择的执行代码
	//单分支  双分支  多分支（else if  和 switch）
	/*if(条件表达式){
		语句;
	}*/
	//单分支
	/*$age =23;
	if($age>18){
		echo"你已经过了18岁了！";
	}
	
	双分支
	$age=23;
	if($age>18){
		echo"你的年龄大于18岁";
	}
	else{
		echo"你的年龄小于18岁";
	}*/

	/*多分支
	$age=23;
	if($age>18){
		echo"你的年龄大于18岁";
	}else if($age>10 && $age<=18){
		echo"少管所！";
	}else{
		echo"下次注意";
	}*/


	//switch语句 整数、字符、布尔、小数、null都可以进行匹配
	/*
	$mychar="a";
	switch($mychar){
		case "a":
			echo "Monday";
			break;
		case "b":
			echo "Tuesday";
			break;
		case "c":
			echo "Wednesday";
			break;// break不能少  switch 是 遇到break 就停止 否则会输出所有
		default:
			echo "default";

		//default 可有可无 主要看代码的逻辑   
		//并且位置无所谓 只有在所有的case匹配不到时 则执行default语句，直到碰见break才跳出switch语句 
	}

	$pychar="13";
	switch($pychar){
		case "10":
			echo "10";
			break;
		case "1.1":
			echo "11";
			break;

		default:
			echo "default";

		case "12":
			echo "12";
			break;
		}*/


	//多分支下 if和switch的应用场景：

	// if   elseif 是对一个范围的判断   switch 是对某个点的判断




   //三、循环控制

	/*
	for($i=0;$i<10;$i++){
		echo"<br/>hello,world!";
	}
	

	//while循环
	$i =0;
	while($i<10){
		echo"<br/>hello,world!".$i;
		$i++;
	}*/



	//do while循环
	/*$i=0;
	do{
		echo"<br/>hello,world!".$i;
		$i++;
	}while($i<10);
	*/

	//案例 外层控制层数  内层控制*个数
	for($i=1;$i<=5;$i++){
		for($j=1;$j<=$i;$j++)
		{
			echo'*';
		}
		echo'<br/>';
	}
	

	//     *
	//    ***
	//   *****
	$n=20;
	for($i=1;$i<=$n;$i++){
		for($k=1;$k<=$n-$i;$k++){
			echo"&nbsp;";
		}
		for($j=1;$j<=($i-1)*2+1;$j++)
		{
			echo'*';
		}
		echo'<br/>';
	}

	$n=4;
	for($i=1;$i<=$n;$i++){
		for($k=1;$k<=$n-$i;$k++){
			echo"&nbsp;";
		}
		for($j=1;$j<=($i-1)*2+1;$j++)
		{
			if($i==1 || $i==$n){
				echo'*';
			}else{
				if($j==1||$j==($i-1)*2+1){
					echo'*';
				}else{
					echo"&nbsp;";
				}
			}
			
		}
		echo'<br/>';
	}

	
	//continue 结束这次循环 继续下一次循环 可以加数字
	for($i=0;$i<2;$i++)
	{
		for($j=1;$j<4;$j++)
		{
			if($j==2){
				continue;
			}
			echo'$i='.$i."||".'$j='.$j."<br/>";
		}
	}


	//goto语句 将程序跳转到指定位置执行
	goto a;
	echo"aa";
	a:
		echo"bb";
		echo"<br/>";
	
	for($i=0,$j=50;$i<100;$i++){
		while($j--){
			if($j==17)
				goto end;
		}
	}//for 循环开始后  进入while 循环 j变化 i不会发生变化
	 // goto跳到end 后 输出i的值不执行  所以只输出 j=17
	echo"i=$i";
	end:
		echo 'j=17';

	//goto只能在同一个文件和作用域中跳转，无法跳出一个函数或一个方法，常见用于跳出循环或switch 可代替多层break
?>