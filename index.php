<?php require_once 'api_call.php';

getCityName();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

      <title>Weather APP</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
  </head>


  <body>
  <div class="flex-container">
  <div class="title-position">
      <svg class="svg-size" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path></svg>      <h1 class="heather-title">What's The Weather?</h1>
      <label for="city">Enter the name of a city.</label>
         <form>
            <fieldset class="form-group form-align">
             <input type="text" class="form-control" name="city" id="city" placeholder="Ex: Porto, Lisboa...">
             </fieldset>
                <button type="submit" style="background-color: black;" class="btn btn-style">Search</button>
        </form>
  </div>

      
          <div class="card-position" id="weather">

              <!-- First Card -->
              <?php
              if ($weather_description) {
                  echo "<div class='card card-style'>";
                  echo "<div class='card-body'>";
                  echo "<h5 class='card-title'>$newDate</h5>";
                  switch ($weather_description) {
                      case 'few clouds':
                          echo "<img src='http://openweathermap.org/img/wn/02d.png' class='img-style'>";
                          break;
                      case 'scattered clouds':
                          echo "<img src='http://openweathermap.org/img/wn/03d.png' class='img-style'>";
                          break;
                      case 'broken clouds':
                          echo "<img src='http://openweathermap.org/img/wn/04d.png' class='img-style'>";
                          break;
                      case 'overcast clouds':
                          echo "<img src='http://openweathermap.org/img/wn/04d.png' class='img-style'>";
                          break;
                      case 'clear sky':
                          echo "<img src='http://openweathermap.org/img/wn/01d.png' class='img-style'>";
                          break;
                      case 'light rain':
                          echo "<img src='http://openweathermap.org/img/wn/10d.png' class='img-style'>";
                          break;
                      case 'moderate rain':
                          echo "<img src='http://openweathermap.org/img/wn/10d.png' class='img-style'>";
                          break;
                      case 'heavy intensity rain':
                          echo "<img src='http://openweathermap.org/img/wn/10d.png' class='img-style'>";
                          break;
                  }
                  echo "<p class='card-text temperature-align'>$weather_max_temp</p>";
                  echo "<p class='card-text temperature-align temperature-margin'>$weather_min_temp</p>";
                  echo "</div>";
                  echo "</div>";
              }

              // Second Card
              if ($weather_description_2) {
                  echo "<div class='card card-style'>";
                  echo "<div class='card-body'>";
                  echo "<h5 class='card-title'>$newDate_2</h5>";
                  switch ($weather_description_2) {
                      case 'few clouds':
                          echo "<img src='http://openweathermap.org/img/wn/02d.png' class='img-style'>";
                          break;
                      case 'scattered clouds':
                          echo "<img src='http://openweathermap.org/img/wn/03d.png' class='img-style'>";
                          break;
                      case 'broken clouds':
                          echo "<img src='http://openweathermap.org/img/wn/04d.png' class='img-style'>";
                          break;
                      case 'overcast clouds':
                          echo "<img src='http://openweathermap.org/img/wn/04d.png' class='img-style'>";
                          break;
                      case 'clear sky':
                          echo "<img src='http://openweathermap.org/img/wn/01d.png' class='img-style'>";
                          break;
                      case 'light rain':
                          echo "<img src='http://openweathermap.org/img/wn/10d.png' class='img-style'>";
                          break;
                      case 'moderate rain':
                          echo "<img src='http://openweathermap.org/img/wn/10d.png' class='img-style'>";
                          break;
                      case 'heavy intensity rain':
                          echo "<img src='http://openweathermap.org/img/wn/10d.png' class='img-style'>";
                          break;
                  }
                  echo "<p class='card-text temperature-align'>$weather_max_temp_2</p>";
                  echo "<p class='card-text temperature-align temperature-margin'>$weather_min_temp_2</p>";

                  echo "</div>";
                  echo "</div>";
              }

              // Third Card
              if ($weather_description_3) {
                  echo "<div class='card card-style'>";
                  echo "<div class='card-body'>";
                  echo "<h5 class='card-title'>$newDate_3</h5>";
                  switch ($weather_description_3) {
                      case 'few clouds':
                          echo "<img src='http://openweathermap.org/img/wn/02d.png' class='img-style'>";
                          break;
                      case 'scattered clouds':
                          echo "<img src='http://openweathermap.org/img/wn/03d.png' class='img-style'>";
                          break;
                      case 'broken clouds':
                          echo "<img src='http://openweathermap.org/img/wn/04d.png' class='img-style'>";
                          break;
                      case 'overcast clouds':
                          echo "<img src='http://openweathermap.org/img/wn/04d.png' class='img-style'>";
                          break;
                      case 'clear sky':
                          echo "<img src='http://openweathermap.org/img/wn/01d.png' class='img-style'>";
                          break;
                      case 'light rain':
                          echo "<img src='http://openweathermap.org/img/wn/10d.png' class='img-style'>";
                          break;
                      case 'moderate rain':
                          echo "<img src='http://openweathermap.org/img/wn/10d.png' class='img-style'>";
                          break;
                      case 'heavy intensity rain':
                          echo "<img src='http://openweathermap.org/img/wn/10d.png' class='img-style'>";
                          break;
                  }
                  echo "<p class='card-text temperature-align'>$weather_max_temp_3</p>";
                  echo "<p class='card-text temperature-align temperature-margin'>$weather_min_temp_3</p>";

                  echo "</div>";
                  echo "</div>";
              }

              // Fourth Card
              if ($weather_description_4) {
                  echo "<div class='card card-style'>";
                  echo "<div class='card-body'>";
                  echo "<h5 class='card-title'>$newDate_4</h5>";
                  switch ($weather_description_4) {
                      case 'few clouds':
                          echo "<img src='http://openweathermap.org/img/wn/02d.png' class='img-style'>";
                          break;
                      case 'scattered clouds':
                          echo "<img src='http://openweathermap.org/img/wn/03d.png' class='img-style'>";
                          break;
                      case 'broken clouds':
                          echo "<img src='http://openweathermap.org/img/wn/04d.png' class='img-style'>";
                          break;
                      case 'overcast clouds':
                          echo "<img src='http://openweathermap.org/img/wn/04d.png' class='img-style'>";
                          break;
                      case 'clear sky':
                          echo "<img src='http://openweathermap.org/img/wn/01d.png' class='img-style'>";
                          break;
                      case 'light rain':
                          echo "<img src='http://openweathermap.org/img/wn/10d.png' class='img-style'>";
                          break;
                      case 'moderate rain':
                          echo "<img src='http://openweathermap.org/img/wn/10d.png' class='img-style'>";
                          break;
                      case 'heavy intensity rain':
                          echo "<img src='http://openweathermap.org/img/wn/10d.png' class='img-style'>";
                          break;
                  }
                  echo "<p class='card-text temperature-align'>$weather_max_temp_4</p>";
                  echo "<p class='card-text temperature-align temperature-margin'>$weather_min_temp_4</p>";

                  echo "</div>";
                  echo "</div>";
              }

              // Fifth Card
              if ($weather_description_5) {
                  echo "<div class='card card-style'>";
                  echo "<div class='card-body'>";
                  echo "<h5 class='card-title'>$newDate_5</h5>";
                  switch ($weather_description_5) {
                      case 'few clouds':
                          echo "<img src='http://openweathermap.org/img/wn/02d.png' class='img-style'>";
                          break;
                      case 'scattered clouds':
                          echo "<img src='http://openweathermap.org/img/wn/03d.png' class='img-style'>";
                          break;
                      case 'broken clouds':
                          echo "<img src='http://openweathermap.org/img/wn/04d.png' class='img-style'>";
                          break;
                      case 'overcast clouds':
                          echo "<img src='http://openweathermap.org/img/wn/04d.png' class='img-style'>";
                          break;
                      case 'clear sky':
                          echo "<img src='http://openweathermap.org/img/wn/01d.png' class='img-style'>";
                          break;
                      case 'light rain':
                          echo "<img src='http://openweathermap.org/img/wn/10d.png' class='img-style'>";
                          break;
                      case 'moderate rain':
                          echo "<img src='http://openweathermap.org/img/wn/10d.png' class='img-style'>";
                          break;
                      case 'heavy intensity rain':
                          echo "<img src='http://openweathermap.org/img/wn/10d.png' class='img-style'>";
                          break;
                  }
                  echo "<p class='card-text temperature-align'>$weather_max_temp_5</p>";
                  echo "<p class='card-text temperature-align temperature-margin'>$weather_min_temp_5</p>";

                  echo "</div>";
                  echo "</div>";
              }
              ?>
          </div>
  </div>


    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>