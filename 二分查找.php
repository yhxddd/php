<?php
	//二分查找:数组必须是有序数组才能使用二分查找

	function binarySearch($arr,$findVal,$left,$right){
		//left,right为数组左右的下标


		if($left>$right){
			echo"找不到该数";
			return;
		}
		//找到中间的数
		$midIndex=round(($right+$left)/2);


		//如果大于则向后找
		if($findVal>$arr[$midIndex]){
			
			binarySearch($arr,$findVal,$midIndex+1,$right);
		}
		else if($findVal<$arr[$midIndex]){
			binarySearch($arr,$findVal,$left,$midIndex-1);
		}else{
			echo"找到这个数，下标=$midIndex";
		}

	}
	$arr=array(-1,0,50,90,99);
	binarySearch($arr,40,0,count($arr)-1);

?>