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
    $country = $_GET['country'];    // gets() the value from the "enter country name" frontend text field
    $city = $_GET['city'];          // gets() the value from the "enter city" frontend text field
    $units = $_GET['units'];        // gets() the value from the "select units" frontend text field
    echo 'Weather data for '.$city.', '.$country.' in '.$units.' units:';

    $api_url = 'http://api.openweathermap.org/data/2.5/weather?q='.$city.','.$country.'&units='.$units.'&appid='.$api_key;
    //packs all the variable choices into one URL 

    $weather_data = json_decode ( file_get_contents($api_url), true);
    /*  - file_get_contents(http link) is used to get weather data from openweathermap in JSON format.
        - json decode( fileInstance , true ) converts the file from json to array. 
        - Watch out for the nested brackets. I had wasted ~2 hours because of typing nested brackets incorrectly.    */ 


    /*  now that we have data from the json file stored in json format, we can just access them like a normal 2D array.
        Optionally, you can use print_r($weather_data) to print the whole array first, 
        and then decide which values to acces from it.*/
    $tempActual = $weather_data['main']['temp'];
    $tempFeel = $weather_data['main']['feels_like'];
    $tempMin = $weather_data['main']['temp_min'];
    $tempMax = $weather_data['main']['temp_max'];

    $windSpeed = $weather_data['wind']['speed'];
    $windDirection = $weather_data['wind']['deg'];
    $visibility = $weather_data['visibility'];
  

    //with the data stored into primitve variables, we can make the frontend display them.
}

?>



