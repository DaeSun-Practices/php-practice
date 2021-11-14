<!doctype html>

<head>
    <title>function</title>
    <meta charset="utf-8">
    
</head>

<body>
	<h1>Function</h1>
	<h2>Basic</h2>
	
	<?
		function basic()
		{
			print("MooYaHo~~<br>");
			print("MooYaHoUoo~~<br>");
		}
		
		basic();
		basic();
	?>
	
	<h2>parameter &amp; argument</h2>
	<?
		function sum($left, $right)
		{
			print($left + $right);
			print("<br>");
		}
		
		sum(2, 4);
		sum(4, 5);
	?>
	
	<h2>return</h2>
		<?
		function sum2($left, $right)
		{
			return $left + $right;
			
		}
		
		print(sum2(2, 4));
		file_put_contents('result.txt', sum2(4, 5));
	?>
	
	

</body>