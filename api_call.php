<?php

require __DIR__ . '/vendor/autoload.php';

use Curl\Curl;

function getCityName (){

 global $weather;
 global $weather_description;
 global $weather_max_temp;
 global $weather_min_temp;
 global $error;

    if (isset($_GET['city'])) {

        //initialize new curl
        $curl = new Curl();
        //Do a Get method to the specified API
        $curl->get("http://api.openweathermap.org/data/2.5/forecast?q=".urlencode($_GET['city'])."&appid=2294e37ea5be5250795adec34bc4bb71");

        //Check if the get returns an error, if not it continues to the next IF
        if ($curl->error) {
            echo "Could not find city - please try again.";
            header('location: index.php');
            die();
        }

        //Transforms the returned array into json
        $weatherArray = json_decode(json_encode($curl->response), true);

        if ($curl->httpStatusCode == 200) {

            $weather_description = $weatherArray['list'][0]['weather'][0]['description'];

            $tempInCelcius = (int)($weatherArray['list'][0]['main']['temp'] - 273);

            $maxTempInCelcius = (int)($weatherArray['list'][0]['main']['temp_max'] - 273);

            $minTempInCelcius = (int)($weatherArray['list'][0]['main']['temp_min'] - 273);

            $weather_max_temp = $maxTempInCelcius."&deg;</br>";

            $weather_min_temp .= $minTempInCelcius."&deg;</br>";


        } else {

            $error = "Could not find city - please try again.";

        }

    }
}


?>