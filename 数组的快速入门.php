<?php
	$hens[0]=3;
	$hens[1]=2;
	$hens[2]=2.3;
	$hens[3]=4;
	$hens[4]=5.6;
	$hens[5]=10;
	$hens[6]=11;
	$allweight=0;

	//要知道数组中有多少个元素  可以用系统函数 count
	echo"共有".count($hens)."只鸡<br/>";

	//遍历数组
	for($i=0;$i<count($hens);$i++){
		echo"第".$i."只鸡的体重是".$hens[$i]."<br/>";
		$allweight+=$hens[$i];
	}
	echo"<br/>总体重是：".$allweight."<br/>平均体重是:".$allweight/count($hens);

?>