<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<title>表单</title>
	<link rel="stylesheet"type="text/css" href="css.css"/>
	<link rel="stylesheet" type="text/css"href="./css/index.css">
</head>
<body>
	<div id="all">
		<div id="img">
			<img src="./img/1.png" alt="抬头">
		</div>
		<div id="form">
			<form action="login.php" method="post">
			姓名：<input type="text" name="name"> <br />
			学号: <input type="text" name="id">  <br />
			<input type="submit" value="提交">
			<input type="reset" value="重置">
		</form>
		</div>
	</div>
</body>
</html>