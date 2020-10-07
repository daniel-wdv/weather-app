<?php

require __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;

use Curl\Curl;


function getCityName (){

 global $weather_description, $weather_max_temp, $weather_min_temp, $weather_date, $weather_description_2, $weather_max_temp_2, $weather_min_temp_2, $weather_date_2,
        $weather_description_3, $weather_max_temp_3, $weather_min_temp_3, $weather_date_3, $weather_description_4, $weather_max_temp_4, $weather_min_temp_4, $weather_date_4,
        $weather_description_5, $weather_max_temp_5, $weather_min_temp_5, $weather_date_5, $newDate, $newDate_2, $newDate_3, $newDate_4, $newDate_5, $error;


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


        //GET FIRST DAY INFO
        if (isset($curl->httpStatusCode) == 200) {

            $weather_description = $weatherArray['list'][0]['weather'][0]['description'];

            $weather_date = $weatherArray['list'][0]['dt_txt'];

            $date = Carbon::createFromFormat('Y-m-d H:i:s', $weather_date);
            $newDate = $date->locale('pt_PT')->format('l');

            $tempInCelcius = (int)($weatherArray['list'][0]['main']['temp'] - 273);

            $maxTempInCelcius = (int)($weatherArray['list'][0]['main']['temp_max'] - 273);

            $minTempInCelcius = (int)($weatherArray['list'][0]['main']['temp_min'] - 281);

            $weather_max_temp = $maxTempInCelcius."&deg;</br>";

            $weather_min_temp .= $minTempInCelcius."&deg;</br>";


        } else {

            $error = "Could not find city - please try again.";

        }

        //GET SECOND DAY INFO
        if (isset($curl->httpStatusCode) == 200) {

            $weather_description_2 = $weatherArray['list'][8]['weather'][0]['description'];

            $weather_date_2 = $weatherArray['list'][8]['dt_txt'];

            $date = Carbon::createFromFormat('Y-m-d H:i:s', $weather_date_2);
            $newDate_2 = $date->locale('pt_PT')->format('l');

            $tempInCelcius_2 = (int)($weatherArray['list'][8]['main']['temp'] - 273);

            $maxTempInCelcius_2 = (int)($weatherArray['list'][8]['main']['temp_max'] - 271);

            $minTempInCelcius_2 = (int)($weatherArray['list'][8]['main']['temp_min'] - 279);

            $weather_max_temp_2 = $maxTempInCelcius_2."&deg;</br>";

            $weather_min_temp_2 = $minTempInCelcius_2."&deg;</br>";


        } else {

            $error = "Could not find city - please try again.";

        }


        //GET Third DAY INFO
        if (isset($curl->httpStatusCode) == 200) {

            $weather_description_3 = $weatherArray['list'][16]['weather'][0]['description'];

            $weather_date_3 = $weatherArray['list'][16]['dt_txt'];

            $date = Carbon::createFromFormat('Y-m-d H:i:s', $weather_date_3);
            $newDate_3 = $date->locale('pt_PT')->format('l');

            $tempInCelcius_3 = (int)($weatherArray['list'][16]['main']['temp'] - 273);

            $maxTempInCelcius_3 = (int)($weatherArray['list'][16]['main']['temp_max'] - 273);

            $minTempInCelcius_3 = (int)($weatherArray['list'][16]['main']['temp_min'] - 279);

            $weather_max_temp_3 = $maxTempInCelcius_3."&deg;</br>";

            $weather_min_temp_3 = $minTempInCelcius_3."&deg;</br>";


        } else {

            $error = "Could not find city - please try again.";

        }


        //GET Fourth DAY INFO
        if (isset($curl->httpStatusCode) == 200) {

            $weather_description_4 = $weatherArray['list'][24]['weather'][0]['description'];

            $weather_date_4 = $weatherArray['list'][24]['dt_txt'];

            $date = Carbon::createFromFormat('Y-m-d H:i:s', $weather_date_4);
            $newDate_4 = $date->locale('pt_PT')->format('l');

            $tempInCelcius_4 = (int)($weatherArray['list'][24]['main']['temp'] - 273);

            $maxTempInCelcius_4 = (int)($weatherArray['list'][24]['main']['temp_max'] - 273);

            $minTempInCelcius_4 = (int)($weatherArray['list'][24]['main']['temp_min'] - 280);

            $weather_max_temp_4 = $maxTempInCelcius_4."&deg;</br>";

            $weather_min_temp_4 = $minTempInCelcius_4."&deg;</br>";


        } else {

            $error = "Could not find city - please try again.";

        }

    }


    //GET Fifth DAY INFO
    if (isset($curl->httpStatusCode) == 200) {

        $weather_description_5 = $weatherArray['list'][32]['weather'][0]['description'];

        $weather_date_5 = $weatherArray['list'][32]['dt_txt'];

        $date = Carbon::createFromFormat('Y-m-d H:i:s', $weather_date_5);
        $newDate_5 = $date->locale('pt_PT')->format('l');

        $tempInCelcius_5 = (int)($weatherArray['list'][32]['main']['temp'] - 273);

        $maxTempInCelcius_5 = (int)($weatherArray['list'][32]['main']['temp_max'] - 272);

        $minTempInCelcius_5 = (int)($weatherArray['list'][32]['main']['temp_min'] - 279);

        $weather_max_temp_5 = $maxTempInCelcius_5."&deg;</br>";

        $weather_min_temp_5 = $minTempInCelcius_5."&deg;</br>";


    } else {

        $error = "Could not find city - please try again.";

    }
}


?>