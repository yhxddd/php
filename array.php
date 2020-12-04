<?php

	$grades=$_REQUEST['grade'];
	//echo 'grade='.$grades;
	//分割成绩
	$grades=explode(" ",$grades);

	$allgrade =0;
	foreach($grades as $k=>$v){

		$allgrade+=$v; //隐藏string转float
		//echo "<br/>$k=$v";
	}
	echo"平均=".$allgrade/count($grades);



?>