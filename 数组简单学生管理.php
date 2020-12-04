<?php
	
	$arr=array(10,30,40,55,9,11,67);
	
	

	
	//查找成绩
	function showStuGrade($stuNo,&$arr){
		return $arr[$stuNo];
	}
	
	function showStuNo($grade,&$arr){
		$flag=false;
		for($i=0;$i<count($arr);$i++){
			if($grade==$arr[$i]){
				echo "<br/>学号为".$i."的学生成绩：".$grade;
				$flag=true;
			}
			
		}
		if($flag==false){
			echo "没有学生考出这个成绩";
		}
	}
	
	
	$doing=$_REQUEST['doing'];//接收doing 判断点击哪个按钮查询哪个数据
	if($diong=="seaGrade"){
		$stuNo=$_REQUEST['stuNo'];//学号
		echo "学生编号是".$stuNo."的成绩是：".showStuGrade($stuNo,$arr);
	}else if($doing=="seaStuNo"){
		$grade=$_REQUEST['grade'];
		showStuNo($grade,$arr);
	}else if($doing=="stuState"){
		//0-59不及格 60-69差 70-79中 80-89良 90-100优
		$arr1=array(0,0,0,0,0);
		for($i=0;$i<count($arr);$i++){
			if($arr[$i]>=0&&$arr[$i]<=59){
				$arr1[0]+=1;
			}else if($arr[$i]>=60&&$arr[$i]<=69){
				$arr1[1]+=1;
			}else if($arr[$i]>=70&&$arr[$i]<=79){
				$arr1[2]+=1;
			}else if($arr[$i]>=80&&$arr[$i]<=89){
				$arr1[3]+=1;
			}else if($arr[$i]>=90&&$arr[$i]<=100){
				$arr1[4]+=1;
			}	
		}
		echo "统计结果：<br/>不及格:".$arr1[0]."<br/>差:".$arr1[1]."<br/>中:".$arr1[2]."<br/>良:".$arr1[3]."<br/>优:".$arr1[4];
		
	}
	
?>