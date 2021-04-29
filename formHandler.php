<?php

//variable declarations:
$tempActual = '';
$tempFeel = '';
$tempMin = '';
$tempMax = '';
$visibility = '';
$windSpeed = '';
$windDirection = '';

$units = '';


$api_key = '16eb80e85a2e3ce3d30b5efcfdf219ac';

function formSubmitted(){
    return isSet($_GET['submit']);
}


if (formSubmitted()){
    $country = $_GET['country'];
    $city = $_GET['city'];
    $units = $_GET['units'];
    echo 'Weather data for '.$city.', '.$country;

    $api_url = 'http://api.openweathermap.org/data/2.5/weather?q='.$city.','.$country.'&appid='.$api_key;

    $weather_data = json_decode ( file_get_contents($api_url), true);

    $tempActual = $weather_data['main']['temp'];
    $tempFeel = $weather_data['main']['feels_like'];
    $tempMin = $weather_data['main']['temp_min'];
    $tempMax = $weather_data['main']['temp_max'];

    $windSpeed = $weather_data['wind']['speed'];
    $windDirection = $weather_data['wind']['deg'];
    $visibility = $weather_data['visibility'];


    

}

?>



