<?php
	
	//����ʽ���򣺲������򷨡�ϣ�����򷨡�����������

	//�������򣺽�������Ԫ�ط�Ϊ������:�����б�������б�  �����б�տ�ʼֻ����һ��Ԫ��  �������n-1��Ԫ��  ���������б��е�Ԫ�������򣬽��бȽϺ�����ʵ���λ��
	//arr[-1,-2,9,7]->
	//arr1[-1]   arr2[-2,9,7]
	//arr1[-2,-1]  ar2[9,7];....
	function insertSort(&$arr){
		//��С������
		//��Ĭ���±�Ϊ0����������� ����������±�Ϊ1��ʼ
		for($i=1;$i<count($arr);$i++){
		//$insertVal��׼���������
			$insertVal=$arr[$i];

			//׼���Ⱥ�insertIndex�Ƚ�
			$insertIndex=$i-1;

			while($insertIndex>=0 && $insertVal<$arr[$insertIndex]){
				//Ҫ�����ֵ ���Ѿ�������Ǹ���С

				//���������������һ��λ��
				$arr[$insertIndex+1]=$arr[$insertIndex];
				$insertIndex--;


			}
			//����(���������ֵ�ҵ��ʵ�λ��)
			$arr[$insertIndex+1]=$insertVal;
		}
	
	}
	
	$arr=array(0,5,-1,-100,90,34.5);
	//[0,5,-1]->[0,5,-1]->[0,5,5]->[0,0,5]->[-1,0,5]
	insertSort($arr);
	print_r($arr);


	

?>