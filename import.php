<?
require_once 'inc/lib/medoo.min.php';
$db = new medoo();

$bases = file_get_contents("bases.json");

$bases = json_decode($bases, true);

$to_import = array();

foreach ($bases as $import) {
	$base = array();

	$base['name'] = $import['properties']['name'];

	$base['latitude'] = $import['geometry']['coordinates'][1];
	$base['longitude'] = $import['geometry']['coordinates'][0];

	$to_import[] = $base;
}

$db->insert("bases", $to_import);

?>