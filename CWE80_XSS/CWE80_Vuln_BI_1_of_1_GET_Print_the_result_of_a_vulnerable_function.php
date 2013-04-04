<?php 

	// code adapted from file "public\memcache.php" of project ThinkSNS_V3_2013032501
	function getMenu(){		
		if ($_GET['op']!=4){
			echo <<<EOB
			<li><a href="somevalue&op={$_GET['op']}">Refresh Data</a></li>
EOB;
		}
		else {
			echo <<<EOB
			<li><a href="somevalue&op=2}">Back</a></li>
EOB;
		}
		echo
			menu_entry(1,'View Host Stats'),
			menu_entry(2,'Variables');

		echo <<<EOB
			</ol>
			<br/>
EOB;
	}

	echo getMenu();
?>