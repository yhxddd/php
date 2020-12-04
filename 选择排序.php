<?php
	
	//选择排序:每次都是找这个数组最小值进行交换位置
	function selectSort(&$arr){
	
		$temp=0;
		for($i=0;$i<count($arr)-1;$i++){
			
			//假设$i是最小的数
			$minVal=$arr[$i];
			//记录我认为的最小数的下标
			$minIndex =$i;
			for($j=$i+1;$j<count($arr);$j++){
				//我们认为的最小值不是最小
				if($minVal>$arr[$j]){
					$minVal=$arr[$j];
					$minIndex=$j;
				}
			}
			//最后交换
			$temp=$arr[$i];
			$arr[$i]=$arr[$minIndex];
			$arr[$minIndex]=$temp;

			
		}
	}

	$arr=array(0,5,-1);
//[0,5,-1]->[-1,5,0]->[-1,0,5]
	selectSort($arr);
	print_r($arr);




?>