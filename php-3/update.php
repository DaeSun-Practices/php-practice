<?require_once('component/header.php');?>
	
    <form action="process/process_update.php" method="POST">
    	<p>
    		<input type="hidden" name="id" value="<?=$_GET['id']?>">
    	</p>
    	
    	<p>
    		<input type="text" name="title" value="<?=$article['title']?>">
    	</p>
    	
    	<p>
    		<textarea name="description"><?echo ($article['description']);?></textarea>
    	</p>
    	
    	<p>
    		<input type="submit">
    	</p>
    </form>

</body>