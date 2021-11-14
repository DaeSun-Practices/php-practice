<?
	$conn = mysqli_connect("localhost", "db2018320161", "backgom07@naver.com", "db2018320161");
	
	
	// 1 row
	echo "<h1> Single Row </h1>";
	$sql = "SELECT * FROM topic where id = 1";
	

	$result = mysqli_query($conn, $sql);
	print_r($result);
	echo "<br>";


	$row = mysqli_fetch_array($result);//takes row by row
	print_r($row);
	echo "<br>";
	
	
	echo $row['title'];
	echo "<br>";
	
	echo "<h2>".$row['title']."</h2>";
	echo $row['description'];
	

	
	// multiple row
	echo "<h1> Multiple Row </h1>";
	
	$sql = "SELECT * FROM topic";
	

	$result = mysqli_query($conn, $sql);
	
	while($row = mysqli_fetch_array($result)) 
	{
		echo "<h2>".$row['title']."</h2>";
		echo $row['description'];
	}

	
	
	/*
	$row = mysqli_fetch_array($result);//takes row by row
	echo "<h2>".$row['title']."</h2>";
	echo $row['description'];
	
	
	$row = mysqli_fetch_array($result);//takes row by row
	echo "<h2>".$row['title']."</h2>";
	echo $row['description'];
	
	
	$row = mysqli_fetch_array($result);//takes row by row
	echo "<h2>".$row['title']."</h2>";
	echo $row['description'];
	
	var_dump($row);
	*/
?>