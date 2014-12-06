<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<title>结果展示</title>
	<style>
	#content{
		margin: 100px auto;
		width: 50px;
        text-align: center;
	}
	</style>
</head>
<body>
	<div id="content">
<?php 
$link=mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if($link){
	mysql_select_db(SAE_MYSQL_DB,$link);
	$result = mysql_query("SELECT * FROM Persons");
echo "<table border='1'>
<tr>
<th>Name</th>
<th>ID</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['ID'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
mysql_close($link);
}
?>
	</div>	
</body>
</html>