<?
require_once 'inc/lib/medoo.min.php';
$db = new medoo();

$data = $db->select(
    "bases",
    ["id", "name(title)", "latitude", "longitude", "start", "end"],
    ["ORDER" => "bases.start ASC"]
);


$currentYear = 0;
$dayCounter = 1;
foreach ($data as $record => $item) {

    //display contribution form if record is incomplete
    if ($item['start'] == 0) {
        $data[$record]["options"]["infoUrl"] = "ajax/infoContribute.php?id=" . $item['id'] . "&incomplete=1";
        $data[$record]["options"]["theme"] = "red";

        $data[$record]["options"]["complete"] = false;
    } else {
        $data[$record]["options"]["infoUrl"] = "ajax/infoContribute.php?id=" . $item['id'] . "&incomplete=0";
        $data[$record]["options"]["theme"] = "green";
        $data[$record]["options"]["complete"] = true;
    }

 $itemDate = new DateTime($item['start']."-01-00");

    if ($item['start'] == 0) {
        $data[$record]["start"] =  date("Y");

    } else {
        if ($currentYear != $item['start']) {
            $currentYear = $item['start'];
            $dayCounter = 1;
        }


    
       
        $itemDate->add(new DateInterval("P".$dayCounter."D"));
        $test = $itemDate->format('Y-m-d H:i:s');;
        $data[$record]["start"] = $test;
        $dayCounter++;

    }




    if ($item['end'] == 0) {
        $data[$record]["end"] = "2038";


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