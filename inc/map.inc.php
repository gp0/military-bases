<?
require_once 'lib/medoo.min.php';
$db = new medoo();

$start = $db->min("bases", "start", ["start[!]" => 0]);
$end = date('Y')+10;

include("templates/map.tpl");
?>