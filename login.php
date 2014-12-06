<?php 
	$link=mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	if ($link) {
		mysql_select_db(SAE_MYSQL_DB,$link);
		$sql = "CREATE TABLE Persons IF NOT EXISTS 'Persons'
(
	Name varchar(15),
	ID int
)";
		mysql_query($sql,$link);
		$sql="INSERT INTO Persons (Name,ID)
		VALUES ('$_POST[name]','$_POST[id]')";
		if (!mysql_query($sql,$link))
  {
  		die('Error: ' . mysql_error());
  }
        mysql_close($link);
        
        header("location: http://studentsign.sinaapp.com/show.php");
		
	}
 ?>
		