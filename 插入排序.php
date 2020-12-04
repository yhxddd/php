<?php
	
	//插入式排序：插入排序法、希尔排序法、二叉树排序

	//插入排序：将待排序元素分为两个表:有序列表和无序列表  有序列表刚开始只包含一个元素  无序包含n-1个元素  读入无序列表中的元素入有序，进行比较后插入适当的位置
	//arr[-1,-2,9,7]->
	//arr1[-1]   arr2[-2,9,7]
	//arr1[-2,-1]  ar2[9,7];....
	function insertSort(&$arr){
		//从小到大排
		//先默认下标为0的数是有序的 所以排序从下标为1开始
		for($i=1;$i<count($arr);$i++){
		//$insertVal是准备插入的数
			$insertVal=$arr[$i];

			//准备先和insertIndex比较
			$insertIndex=$i-1;

			while($insertIndex>=0 && $insertVal<$arr[$insertIndex]){
				//要插入的值 比已经有序的那个数小

				//把已有序的数后移一个位置
				$arr[$insertIndex+1]=$arr[$insertIndex];
				$insertIndex--;


			}
			//插入(给待插入的值找到适当位置)
			$arr[$insertIndex+1]=$insertVal;
		}
	
	}
	
	$arr=array(0,5,-1,-100,90,34.5);
	//[0,5,-1]->[0,5,-1]->[0,5,5]->[0,0,5]->[-1,0,5]
	insertSort($arr);
	print_r($arr);


	

?>