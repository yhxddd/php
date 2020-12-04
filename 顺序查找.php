<?php

	//顺序查找 ： 按顺序一个一个比较找到想要的数据
	

	function search(&$arr,$findVal){
		//findVal 为想要找的数字

		$flag=false;
		for($i=0;$i<count($arr);$i++){

			if($findVal==$arr[$i]){
				
				echo "<br/>找到了，下标为=$i";
				$flag=true;
				//break;有break 则只找到一个 没有break是找出所有的
			}
		}
		if(!$flag){
			echo "查询不到";
		}
	
	}


	$arr=array(46,90,900,0,-1,-1);
	
	search($arr,-1);


?>