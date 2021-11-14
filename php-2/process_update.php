
<?php
	rename('~2018320161/php-practice-2/data/'.$_POST['old_title'], '~2018320161/php-practice-2/data/'.$_POST['title']);
	file_put_contents('data/'.$_POST['title'], $_POST['description']);
	header('Location: /~2018320161/php-practice-2/index.php?id='.$_POST['title']);
?>