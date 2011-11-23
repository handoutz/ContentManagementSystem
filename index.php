<?php
	require("inc/php/ConfigManager.php");
	require("inc/php/LayoutManager.php");
	
	$page = $_GET['page'];
	$Layout->GeneratePage($page, $Config, $PageVariables);
	
?>