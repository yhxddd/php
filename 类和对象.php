<?php

//堆区存放 对象
 //栈区存放基本数据类型
//入门例子:
/*
	class Cat{
		public $name;//成员属性（一般是基本数据类型，也可以是复合类型（数组、对象））
		public $age;
		public $color;
	}
	
	
	//创建一只猫
	$cat=new Cat();
	$cat->name="小白";
	
	$cat->age=3;           //访问对象属性


	$cat->color="白色";
//只要找到该对象 就可以找到所有相关的属性
	$findname="小白";
	if($cat->name ==$findname){
		echo $cat->name."||".$cat->age."||".$cat->color;
	}
*/

//创建对象的两种方法:
//  $cat=new Cat();
//	$cat=new Cat;   效果上没有区别  
//访问对象属性   $对象名->属性名="";  属性名前不能有$


	class Preson{
		public $age;
		public $height;
		public $weight;
	}
	$a=new Preson();
	$a->age=18;
	$a->height=180;
	$a->weight=120;
	$b=$a; // $a,$b指向同一块区域 a随b的变化而变化
	$b->age=890;
	echo $a->age."||".$b->age;
  

	$c=78;
	//$d=$c;   //此时c不随d的变化而变化
	$d=&$c;   //此时c会随d的变化而变化

	$d=$d+8;
	echo $c."||".$d;
?>