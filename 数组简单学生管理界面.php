<html>
<h1>学生成及管理mini系统</h1>

<form action="数组简单学生管理.php" method="post">

请输入10个学生得成绩：<input type="text" name="grades"/><br/>
请输入学生得学号0-9：<input type="text" name="stuNo"/><br/>
<!--隐藏控件-->
<input type="hidden" name="doing" value="seaGrade"/>
<input type="submit" value="查询成绩"/>
</form>


<hr/>
<form action="数组简单学生管理.php" method="post">
请输入要查询的成绩：<input type="text" name="grade"/><br/>
<!--隐藏控件-->
<input type="hidden" name="doing" value="seaStuNo"/>
<input type="submit" value="查询学生学号"/><br/>

</form>
<hr/>


<form action="数组简单学生管理.php" method="post">
<!--隐藏控件-->
<input type="hidden" name="doing" value="stuState"/>
<input type="submit" value="查询各分数段学生人数"/>
</form>
</html>