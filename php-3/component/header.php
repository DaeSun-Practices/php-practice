<?
	$conn = mysqli_connect("localhost", "db2018320161", "backgom07@naver.com", "db2018320161");
	
	//list
	$sql = "SELECT * FROM topic";
	$result = mysqli_query($conn, $sql);
	
	$list = '';
			
	while($row = mysqli_fetch_array($result)) 
	{
		$list = $list."<li><a href='index.php?id={$row['id']}'>{$row['title']}</a></li>";
	}
	
	//title & description
	$article = array(
		'title' => "Welcome",
		'description' => "Welcome to the practice part!"
	);
	
	if(isset($_GET['id'])){
		$sql = "SELECT * FROM topic WHERE id={$_GET['id']}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
		
		$article['title'] = $row['title'];
		$article['description'] = $row['description'];
	}
	
?>

<!doctype html>

<head>
    <title><?WEB?></title>
    <meta charset="utf-8">
    
</head>

<body>
	<div id="grid">
    	<h1>Web<h1>
        <ol>
        	<?=$list?>
        </ol>
    </div>