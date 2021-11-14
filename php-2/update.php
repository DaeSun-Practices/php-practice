<?
	require('lib/print.php');
	require('component/header.php');
?>
    

    <div id="article">
    	
        <h2>
        	<?
        		print_title();
        	?>
        </h2>
        
        <p>
            <?
            	print_description();
            ?>
        </p>
    </div>

	<form action="update_process.php" method="post">
		<input type="hidden" name="old_title" value="<? $_GET['id'] ?>">
    	<p>
    		<input type="text" name="title" value="<? print_title() ?>">
    	</p>
    	
    	<p>
    		<textarea name="description"><? print_description() ?></textarea>
    	</p>
    	
    	<p>
    		<input type="submit">
    	</p>
    </form>

</body>