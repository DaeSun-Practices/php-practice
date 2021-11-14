<?require_once('component/header.php');?>
    
    <a href='create.php'> create </a>
    
    <?
		if(isset($_GET['id']))
		{
			echo "<a href='update.php?id={$_GET['id']}'> update </a>";
			echo "
			<form action='process/process_delete.php' method='post'>
				<input type='hidden' name='id' value='".$_GET['id']."'>
				<input type='submit' value='delete'>
			</form>
			";
			
		}
    ?>
    
    
    <div id="article">
    	
        <h2>
			<?=$article['title']?>
        </h2>
        
        <p>
            <?=$article['description']?>
        </p>
    </div>

</body>