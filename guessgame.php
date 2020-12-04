<html>
<head>
<title>猜拳游戏</title>
<script language="javascript">
		function mychange(obj){
			var val = obj.value;
			var myimgg=document.getElementById("myimg");
			//window.alert(val);
			if(val=='st'){
				myimgg.src="st.png";
			}else if(val=="jd"){
				myimgg.src="jd.png";
			}else if(val="b"){
				myimgg.src="b.png";
			}
		}
</script>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
你出拳<br/>
<select name='you' onchange="mychange(this);">
<option value="请选择">请选择</option>
<option value="st">石头</option>
<option value="jd">剪刀</option>
<option value="b">布</option>
</select>
<img src='1.png' width="60px" height="70px" id="myimg"/>
</html>