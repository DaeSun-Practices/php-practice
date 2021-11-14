<?
	$conn = mysqli_connect("localhost", "db2018320161", "backgom07@naver.com", "db2018320161");
	
	
	$sql = "
		UPDATE topic SET title='{$_POST['title']}', description='{$_POST['description']}' WHERE id = {$_POST['id']}
	";
	

	$result = mysqli_query($conn, $sql);
	if ($result == false)
	{
		echo mysqli_error($conn);
	}
	
	header("Location: /~2018320161/php-practice-3/index.php?id={$_POST['id']}");
?>