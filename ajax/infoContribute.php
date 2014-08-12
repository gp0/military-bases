<?
if (isset($_GET['id'])) {

	require_once '../inc/lib/medoo.min.php';
	$db = new medoo();

	$id = $_GET['id'];

	$base = $db->get("bases", ["name", "start", "end", "source"], ["id" => $id]);

	$base['searchTerms'] = str_replace(' ', '+', $base["name"]);

	if ($_GET['incomplete']) {
		require_once("../templates/ajax/contribute.tpl");
	} else {

		$domain = parse_url($base['source']);
		if ($domain) {
			$base['domain'] = $domain['host'];
		} else {
			$base['domain'] = "Invalid URL";
		}
		require_once("../templates/ajax/info.tpl");
	}
}

?>