<?php

	//a->���� b->һ������� c->����������

	$n=$_REQUEST['layer'];//����

	$shape=$_REQUEST['shape'];
	$starNum=5;//*����
	function printShape($n,$shape,$starNum){
	
		switch($shape){
			
			case "a":
				for($i=1;$i<=$n;$i++){
					for($j=1;$j<=$starNum;$j++){
						echo "*";
					}
					//����һ��󣬻���
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