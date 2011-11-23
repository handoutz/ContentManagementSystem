<?php
require ("inc/php/config.php");

$page = $_GET['page'];
$pageContents = "woot";	
?>

<?php
$Layout -> GeneratePage("woot", $Config, $PageVariables);
?>