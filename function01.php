<?php

//һ�����㺯�� + - * /
//function�ǹؼ��ֲ��ܸı�   
//������ �����б� ����д���� ���ڽ�������
//�����������ִ�Сд ���������ִ�Сд

	function jisuan($num1,$num2,$oper){
		//��������
		$res=0;
		switch($oper){
			case"+":
				$res=$num1+$num2;
				break;
			case"-":
				$res=$num1-$num2;
				break;
			case"*":
				$res=$num1*$num2;
				break;
			case"/":
				$res=$num1/$num2;
				break;
			default:
				echo"���������";
		}

		//����һ�����
		return $res;
	}

	//Ϊ��ֹȫ�ֱ����Ļ��� ����ʹ��unset($var) ��ɾ��һ������

	//$a = 12;
	/*
	function abc($a){
		unset($a); //��ʾ��abc������Χ�� ����ʹ��ȫ�ֱ��� a��ֵ ��֮�����¶���a��ֵ
		$a=45;
	}
	abc($a);
	echo $a;
*/


//php�ڴ��ݱ���ʱ Ĭ����ֵ���ݣ������Ҫ���ã���ַ������  ��Ҫʹ��  &
/*
	$a=213;
	func abc(&$b){
		$b=314;       // ���ϵ�ַ��֮��  $b��ֵ��Ӱ�����abc�����ֵ ���� echo $a =>314 
	}
	abc($a);
	echo $a;
*/

?>