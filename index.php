<?
//gzip compression
ob_start('ob_gzhandler');

//db abstraction framework
require_once 'inc/lib/medoo.min.php';
$db = new medoo();

//handle navigation
if (!isset($_REQUEST['action'])) {
	$content = "map";
} else {
	switch ($_REQUEST['action']) {
		default:
			$content = "map";
			break;
	}
}

include('templates/index.tpl');
?>