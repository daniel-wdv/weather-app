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

      <title>Weather Scraper</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
      
  </head>
  <body>
  <?php  ?>
      <div class="container">
      
          <h1>What's The Weather?</h1>
          
          
          
          <form>
  <fieldset class="form-group">

    <label for="city">Enter the name of a city.</label>

    <input type="text" class="form-control" name="city" id="city" placeholder="Ex. Porto, Lisboa">
  </fieldset>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      
          <div id="weather"><?php 
              
              if ($weather_description === "scattered clouds") {
                  echo "<div class='card card-style'>";
                  echo "<div class='card-body'>";
                  echo "<h5 class='card-title'>[DIA DA SEMANA]</h5>";
                  echo "<img src='https://ssl.gstatic.com/onebox/weather/48/partly_cloudy.png' class='img-style'>";
                  echo "<p class='card-text temperature-align'>$weather_max_temp</p>";
                  echo "<p class='card-text temperature-align temperature-margin'>$weather_min_temp</p>";

                  echo "</div>";
                  echo "</div>";
              }
              ?>




    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>