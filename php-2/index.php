<?
	require('lib/print.php');
	require('component/header.php');
?>

    <a href='create.php'> create </a>
    
    <?
    	if(isset($_GET['id']))
    	{
    		echo "<a href='update.php?id=".$_GET['id']."'> update </a>";
    		echo "<a href='delete_process.php?id=".$_GET['id']."'> delete </a>";
    	}
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



</body>