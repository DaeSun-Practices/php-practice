<?
	require('lib/print.php');
	require('component/header.php');
?>
    
    <a href='create.php'> create </a>
    
    <form action="create_process.php" method="post">
    	<p>
    		<input type="text" name="title" placeholder="Title">
    	</p>
    	
    	<p>
    		<textarea name="description" placeholder="Description"></textarea>
    	</p>
    	
    	<p>
    		<input type="submit">
    	</p>
    </form>
    


</body>