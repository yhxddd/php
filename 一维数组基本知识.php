<?php

	//数组的创建
	// $arr[0]=123; [0]：下标/关键字   arr[0]=123-》数组的一个元素  123：元素对应的值
	//$arr[1]=123;  数组中存放的值可以是任意数据类型
	
	//第二种方法创建数组:
	/*
	$arr=array(1,90,"helllo",89.5);
	  for($i=0;$i<count($arr);$i++){
		  echo "<br/>".$arr[$i];
	  }
		echo "<br/>";*/

	//第三种方法创建数组：（元素下标默认从0开始，但是也可以指定下标的值（字符等））
	/*
	$arr['logo']='beijing';
	 $arr['hsp']=123;*/
	/*
	 
	 $arr1=array("logo"=>"beijing","hsp"=>123);
   
     //遍历
	 foreach($arr1 as $key=>$val){
		echo $key."=".$val."<br/>";
	 }



	 //如果创建数组时没有给某个元素指定下标，php 会自动的用目前最大的那个下标值（整数）加上1作为该元素的下标值
    $arr2=array(5=>"logo",567,90);
	//访问 logo：
	echo $arr2[5];
	//访问 567：
	echo "<br/>".$arr2[6];
	*/

/*
	//如果数组的下标(键值)用 true 来写 遍历时写 true 或者1才能读出来
	$arr[true]="hello";
	$arr[false]="world";
	$arr[null]="hi";
	echo $arr[true]; //或 $arr[1];  其他不行    
	echo $arr[false];//或 $arr[0]
	echo $arr[null]; //或使用  echo $arr[""];


	//如果用小数作为键值  自动截断小数
	$arr[112.4]="hhh";
	echo $arr[112.4];//也可以 $arr[112];
	
	//通常使用print_r来显示数组的具体情况

	echo"<br/>";
	print_r($arr);
	echo"<br/>";
	var_dump($arr);//可以更加详细显示数组的信息  键值、类型、占的字节数
	*/

	//数组可以动态增长  也可以隔几个下标指定数组


	//与数组相关的函数说明
	//count($数组名) 统计该数组共有多少的元素
	//is_array($数组名) 判断该名称对应的是否为数组
	//explode("按照什么拆分"，字符串)  拆分字符串

	$str="hh ni sb zz yyy";
	$arr=explode(" ",$str);
	print_r($arr);

	//删除数组元素
	unset($arr[1]);


?>