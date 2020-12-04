<?php
	
	//常量一旦被定义就不能改变或者取消定义
	//常量前没有 $
	//常量使用define()定义  没有作用域限制  常量的值是基本数据类型
	//常量名称一般全部大写，用下划线间隔
	define("MAX",0.001);
	echo MAX;
	echo"<br/>";
	const MIN=0.02;
	echo MIN;

?>