<?php
  $api_key = "213edf3fcd5de7d72a2a0f54d50c0d65";
  $location = "New York";

  if(isset($_GET["location"]) && $_GET["location"] != "") {
    $location = $_GET["location"];
  }

  $request = "http://api.openweathermap.org/data/2.5/weather?APPID=" . $api_key . "&q=". str_replace(' ', '', $location);
  $response = file_get_contents($request);

  // Get the weather in readable format
  $weather = json_decode($response);

  // Do this if it can't find the location
  if($weather->cod == "404") {
    $location = "New York";

    $request = "http://api.openweathermap.org/data/2.5/weather?APPID=" . $api_key . "&q=" . str_replace(' ', '', $location);
    $response = file_get_contents($request);

     // Get the weather in readable format
    $weather = json_decode($response);
    $country = $weather->sys->country;

  } else {
    $country = $weather->sys->country;
  }

  // If they enter something like Antarctica
  if($country == "none") {
    $country = "Earth";
  }

  // Convert to celcius
  $celcius = round($weather->main->temp - 273.15);

  if($celcius <= 22) {
    echo '<img src="images/cold.png" id="temp-img"/>' . "\n\t\t";
  } else {
    echo '<img src="images/hot.png" id="temp-img"/>' . "\n\t\t";
  }

  echo '<span id="temperature">' . $celcius . '</span>';
  echo '<span id="temp-unit">&deg;C</span>' . "\n";
?>
