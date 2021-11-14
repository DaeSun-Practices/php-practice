<?
	$conn = mysqli_connect("localhost", "db2018320161", "backgom07@naver.com", "db2018320161");
	
	
	$sql = "
		INSERT INTO topic (title, description, created) VALUES('{$_POST['title']}', '{$_POST['description']}', NOW())
	";
	
	$result = mysqli_query($conn, $sql);
	if ($result == false)
	{
		echo mysqli_error($conn);
	}
	
	header('Location: /~2018320161/php-practice-3');
?>