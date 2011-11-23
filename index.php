<?php
	require_once("inc/php/ConfigManager.php");
	require_once("inc/php/LayoutManager.php");
	
	$page = $_GET['page'];
	$Layout->GeneratePage($page);
?>