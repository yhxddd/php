<?php
	
	//ѡ������:ÿ�ζ��������������Сֵ���н���λ��
	function selectSort(&$arr){
	
		$temp=0;
		for($i=0;$i<count($arr)-1;$i++){
			
			//����$i����С����
			$minVal=$arr[$i];
			//��¼����Ϊ����С�����±�
			$minIndex =$i;
			for($j=$i+1;$j<count($arr);$j++){
				//������Ϊ����Сֵ������С
				if($minVal>$arr[$j]){
					$minVal=$arr[$j];
					$minIndex=$j;
				}
			}
			//��󽻻�
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