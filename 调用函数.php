<html>



<?php

//����function01��jisuan()����
	require 'function01.php';

	$num1=20;
	$num2=50;
	$oper="+";
	$res=jisuan($num1,$num2,$oper);

	//$res=jisuan(2,9,"*");  �����б��βΣ����Ը����� ��Ҳ����ֱ�Ӹ�ֵ
	echo"������=".$res;
	

	//phpҳ�滥�����
	//require  require_once���ʹ�ã�  include  include_once

	//require() �÷�����������ǰ�棩
			//require "Ҫ���õ��ļ���.php"; ��˫���ſɵ�����
			//$filepath="wenjian.php";    require  $filepath;
			//require ('���õ��ļ���.php');
		//require()��require_once()������ �� require()�����ظ����룬�����δ�ӡ���� ��
		                                  //require_once()���ж�ǰ����Ƿ����ù���������ù��������ã�������require_once��ֻ������һ��

	//include()�÷���������Ҫ���õĺ�����ǰ�棩
			//include "Ҫ���õ��ļ���.php"; ��˫���ſɵ�����
			//$filepath="wenjian.php";    include $filepath;
			//include ('���õ��ļ���.php');
		//include()��include_once()������ �� include()�����ظ����룬�����δ�ӡ���� ��
		                                  //include_once()���ж�ǰ����Ƿ����ù���������ù��������ã�������require_once��ֻ������һ��



	//inquire ��include ����ͬ��
						//ͬ��������������ҳ��
						//�죺include����������ִ�У�inquire �������ֹ����





//�����ĵ��ã����������һ��ջ��phpִ��ʱһ���������ã��ͻؿ���һ����ջ��ִ�иñ����ú����Ĵ��룬��Ϻ� ���ؼ���ִ�д���

?>
</html>