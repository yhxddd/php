<?php
	
	
	//排序分为两大类：内部排序  外部排序（数据量过大需借助外部存储）
	//内部：交换式排序法（冒泡、快速）、选择排序法、插入排序法
	//效率比较： 冒泡排序<选择排序<插入排序

	//冒泡：
	$arr=array(0,5,-1,50,-100,90,34,-39);//从小到大
	
	/*
	$temp=0;//中间变量

	for($i=0;$i<count($arr)-1;$i++){

		for($j=0;$j<count($arr)-1-$i;$j++){
			//每排完一次 大数都放在后面 无需再次进行排序要减去$i
			//前面数比后面的数大，就交换
			if($arr[$j]>$arr[$j+1]){
			
				$temp=$arr[$j];
				$arr[$j]=$arr[$j+1];
				$arr[$j+1]=$temp;
			}
		}
	}*/

	//封装为函数
	function bubbleSort(&$myarr){
		//若参数不加&符 则myarr有序，传的arr无序。加&是让两个数组指向同一个地址空间
		$temp=0;//中间变量

	    for($i=0;$i<count($myarr)-1;$i++){

			for($j=0;$j<count($myarr)-1-$i;$j++){
			//每排完一次 大数都放在后面 无需再次进行排序要减去$i
			//前面数比后面的数大，就交换
				if($myarr[$j]>$myarr[$j+1]){
			
					$temp=$myarr[$j];
					$myarr[$j]=$myarr[$j+1];
					$myarr[$j+1]=$temp;
			}
		}
	}
}
	$arr=array(0,5,-1);


	//调用排序函数
	bubbleSort($arr);//数组默认传递的是值 不是地址 所以需要加上&符让形参实参指向同一地址空间


	print_r($arr);

	


?>