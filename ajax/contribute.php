<?
ob_start('ob_gzhandler');

if (isset($_POST)) {
	require_once '../inc/lib/medoo.min.php';
	$db = new medoo();

	$id = $_POST['id'];
	unset($_POST['id']);

	$db->update("bases", $_POST, ["id" => $id]);

	require_once '../templates/ajax/success.tpl';
}
?>