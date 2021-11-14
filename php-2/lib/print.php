<?
    function print_title()
    {
        if (isset($_GET['id']))
        {
        	echo $_GET['id'];
        }
            	
        else
        {
        	echo "WEB";	
        }
    }
    
    
    function print_description()
    {
        if (isset($_GET['id']))
        {
        	echo file_get_contents("data/".$_GET['id']);
        }
            	
        else
        {
        	echo "Hello!";
        }
    }
    
    function print_list()
    {
        $data_list = scandir("./data");
        //var_dump($data);
        /*
        for($i=2; $i<count($data_list); $i=$i+1)
		{
			echo "<li><a href='index.php?id=".$data_list[$i]."'>".$data_list[$i]."</a></li>";
		}*/
		unset($data_list[0]);
		unset($data_list[1]);
				
		foreach($data_list as $data){
			echo "<li><a href='index.php?id=".$data."'>".$data."</a></li>";
		}
    }
?>
