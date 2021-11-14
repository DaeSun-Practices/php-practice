<?
	$conn = mysqli_connect("localhost", "db2018320161", "backgom07@naver.com", "db2018320161");
	
	$sql = "INSERT INTO topic (title, description, created) VALUE ('CSS', 'CSS is ...', NOW())";
	

	$result = mysqli_query($conn, $sql);
	if ($result == false)
	{
		echo mysqli_error($conn);
	}

?>