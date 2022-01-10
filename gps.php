<?php
// include 'login-session.php';

if (isset($_POST["change_tempCity"])) {
    $getTempCity= $_REQUEST['temp_city'];
    $_SESSION["custom_area"] = $getTempCity;
    $_SESSION["custom_area_status"] = true;
   
}
if (isset($_POST["set_toGPS"])) {
    $_SESSION["custom_area_status"] = false;
   
}
?>

<!-- <script src="js/geolocation.js"></script> -->



<?php

// define sesstion 
// $_SESSION["custom_area"] = "Dhaka";

// ------------------

$gpsCity = $_COOKIE["geoCity"];
$gpsAddress = $_COOKIE["geoFormattedAddress"];
$dbCity = $city;
if (isset($_SESSION['custom_area']) && $_SESSION["custom_area_status"]) {
    $tempCity = $_SESSION['custom_area'];
    
}

if (isset($tempCity)) {
    $feedArea = $tempCity;
    $city_icon="fa-cog";
} elseif ($gpsCity == $dbCity) {
    $feedArea = $dbCity;
    $city_icon="fa-map-marker-alt";
} else {
    $feedArea = $gpsCity;
    $city_icon="fa-map-marker-alt";
}
// echo "Feed Area: " . $feedArea;

?>