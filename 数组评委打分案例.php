<?php

	//8个评委打分 去掉一个最低分去掉一个最高分 6人得平均为最终得分
	//如果值向知道最低分是多少 则排序
	//找出给最低分得裁判：

	function findMin($arr){
		$minFen=$arr[0];
		$minIndex=0;
		for($i=0;$i<count($arr);$i++){
			if($minFen>$arr[$i]){
				$minFen=$arr[i];
				$minIndex=$i;
			}
		}
		return $minIndex;//返回下标
	
	}

	function findMax($arr){
			$maxFen=$arr[0];
			$maxIndex=0;
			for($i=0;$i<count($arr);$i++){
				if($minFen<$arr[$i]){
					$maxFen=$arr[i];
					$maxIndex=$i;
				}
			}
			return $maxIndex;//返回下标
		
		}

	$arr=array(85,86,70,90,93);
	$minIndex=findMin($arr);
	$maxIndex=findMax($arr);
	echo "第".$minIndex."位评委给分最低，为：".$arr[$minIndex];
	echo"<br/>";
	echo "第".$maxIndex."位评委给分最高，为：".$arr[$maxIndex];
	echo"<br/>";
	//计算平均成绩
	$sum=0;
	for($i=0;$i<count($arr);$i++){

		if($i!=$minIndex && $i!=$maxIndex){
			$sum+=$arr[$i];
		
		}
	}
	echo"平均成绩是:".$sum /(count($arr) -2);
	//找最高分就换一下即可


?>