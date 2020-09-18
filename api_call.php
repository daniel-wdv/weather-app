<?php

function getCityName (){

 global $weather;
 global $error;

    if (isset($_GET['city'])) {

        $urlContents = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".urlencode($_GET['city'])."&appid=2294e37ea5be5250795adec34bc4bb71");

        $weatherArray = json_decode($urlContents, true);

        if ($weatherArray['cod'] == 200) {

            $weather = ucfirst($_GET['city']).":</br>"."Type of weather - ".$weatherArray['weather'][0]['description'].";<br>";

            $tempInCelcius = (int)($weatherArray['main']['temp'] - 273);

            $maxTempInCelcius = (int)($weatherArray['main']['temp_max'] - 273);

            $minTempInCelcius = (int)($weatherArray['main']['temp_min'] - 273);

            $weather .= "Max Temperature for today - ".$maxTempInCelcius."&deg;C</br>";

            $weather .= "Min Temperature for today - ".$minTempInCelcius."&deg;C</br>";

            $weather .= "Temperature in real time - ".$tempInCelcius."&deg;C"."</br>"."Wind speed - ".$weatherArray['wind']['speed']."m/s</br>";

            $weather .= "Humidity - " .$weatherArray['main']['humidity'];



        } else {

            $error = "Could not find city - please try again.";

        }

    }
}


?>