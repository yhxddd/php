<?php

	//基本语法
	//$arr=array(array(1,2,3),array(5,6,7));
	//$arr[0]=array(1,0);
	/*   0 0 0 0 0 0
	     0 0 1 0 0 0
		 0 2 0 3 0 0
		 0 0 0 0 0 0
		*/
	$arr=array(array(0,0,0,0,0,0),array(0,0,1,0,0,0),array(0,2,0,3,0,0),array(0,0,0,0,0,0));
	//遍历二维数组（行）
	for($i=0;$i<count($arr);$i++){

		//遍历每行数据
		for($j=0;$j<count($arr[$i]);$j++){
			echo $arr[$i][$j]."&nbsp;";
		}
		echo "<br/>";
	
	}

 
/*
	//矩阵转置
	$arr=array(array(0,0,0,0,0,0),array(0,0,1,0,0,0),array(0,2,0,3,0,0),array(0,0,0,0,0,0));

	for($i=0;$i<count($arr);$i++){
		for($j=0;$j<count($arr[$i]);$j++){
			$arr1[$j][$i]=$arr[$i][$j];
		}
	}
	for($j=0;$j<count($arr1);$j++){
		for($i=0;$i<count($arr1[$j];$i++)){
			echo $arr1[$j][$i]."&nbsp;";
		}
		echo "<br/>";
	}*/
	
?>