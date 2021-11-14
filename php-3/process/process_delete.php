<?
	$conn = mysqli_connect("localhost", "db2018320161", "backgom07@naver.com", "db2018320161");
	
	
	$sql = "
		DELETE from topic WHERE id = {$_POST['id']}
	";
	
	echo $sql;
	
	$result = mysqli_query($conn, $sql);
	if ($result == false)
	{
		echo mysqli_error($conn);
	}
	
	header("Location: /~2018320161/php-practice-3");
?>