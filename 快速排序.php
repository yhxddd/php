<?php


	function quickSort($left,$right,&$array){

		$l=$left;
		$r=$right;
		$pivot=$array[($left+$right)/2];
		$temp=0;

		while($l<$r){
		
			while($array[$l]<$pivot) $l++;
			while($array[$r]>$pivot) $r--;

			if($l>=$r) break;

			$temp=$array[$l];
			$array[$l]=$array[$r];
			$array[$r]=$temp;

			if($array[$l]==$pivot) --$r;
			if($array[$r]==$pivot) --$l;
		}
		if($l==$r){
		
			$l++;
			$r--;
		}
		if($left<$r) quickSort($left,$r,$array);
		if($right>$l) quickSort($l,$right,$array);
	}
	$arr=array(0,5,-1,-10,8);
	quickSort(0,count($arr)-1,$arr);
	print_r($arr);

?>