<?
include "config.php";

date_default_timezone_set('America/New_York');
 
$ch = curl_init();
$url = "http://maps.googleapis.com/maps/api/geocode/json?latlng=".$_GET['lat'].",".$_GET['lon']."&sensor=false";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$result = curl_exec($ch);
$json = json_decode($result, TRUE);

if (isset($json['results'])) {
    $data = array();
    foreach($json['results']['0']['address_components'] as $element){
        $data[ implode(' ',$element['types']) ] = $element['long_name'];
    }
    //print_r($data);
    $sql = $mysqli->query("INSERT INTO `check_geo` (`lat`, `lon`, `route`, `street_number`, `locality`, `administrative_area_level_1`, `country`, `date`) VALUES ('".$_GET['lat']."', '".$_GET['lon']."', '".$data['route']."', '".$data['street_number']."', '".$data['locality political']."', '".$data['administrative_area_level_1 political']."', '".$data['country political']."', '".date('Y-m-d h:i:s')."');");

    echo "True";
}
?>