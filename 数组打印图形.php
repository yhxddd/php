<?php

	//a->矩形 b->一半金字塔 c->完整金字塔

	$n=$_REQUEST['layer'];//层数

	$shape=$_REQUEST['shape'];
	$starNum=5;//*个数
	function printShape($n,$shape,$starNum){
	
		switch($shape){
			
			case "a":
				for($i=1;$i<=$n;$i++){
					for($j=1;$j<=$starNum;$j++){
						echo "*";
					}
					//打完一层后，换行
					echo "<br/>";
			    }
				break;
			case "b":
				for($i=1;$i<=n;$i++){
					for($j=1;$j<=$i;$j++){
						echo "*";
					}
					echo "<br/>";
			}

		}
	}

	printShape($n,$shape,$starNum);


?>