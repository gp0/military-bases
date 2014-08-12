<?
require_once 'inc/lib/medoo.min.php';
$db = new medoo();

$data = $db->select("bases", ["id", "name(title)", "latitude", "longitude", "start", "end"]);

foreach ($data as $record => $item) {
	//$data[$record]["start"] = date("Y-m-d", strtotime($item['start']));


	//display contribution form if record is incomplete
	if ($item['start'] == 0) {
		$data[$record]["options"]["infoUrl"] = "ajax/infoContribute.php?id=".$item['id']."&incomplete=1";
		$data[$record]["options"]["theme"] = "red";
	} else {
		$data[$record]["options"]["infoUrl"] = "ajax/infoContribute.php?id=".$item['id']."&incomplete=0";
		$data[$record]["options"]["theme"] = "green";
	}


	if ($item['start'] == 0) {
		$data[$record]["start"] = date("Y");
	} 

	if ($item['end'] == 0) {
		$data[$record]["end"] = date("Y");

		//$data[$record]["options"]["theme"] = "red";

	} else {
		//$data[$record]["options"]["theme"] = "green";
	}


	$data[$record]["point"] = array("lat" => floatval($item['latitude']), "lon" => floatval($item['longitude']));	

	unset($data[$record]['id']);
	unset($data[$record]['latitude']);
	unset($data[$record]['longitude']);

	

}

ob_start('ob_gzhandler');


header('Content-Type: application/json');
echo json_encode($data, JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);
?>