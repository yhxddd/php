<?php

	$grades=$_REQUEST['grade'];
	//echo 'grade='.$grades;
	//�ָ�ɼ�
	$grades=explode(" ",$grades);

	$allgrade =0;
	foreach($grades as $k=>$v){

		$allgrade+=$v; //����stringתfloat
		//echo "<br/>$k=$v";
	}
	echo"ƽ��=".$allgrade/count($grades);



?>