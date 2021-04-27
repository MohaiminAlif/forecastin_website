


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    
<?php
$apiKey = "1b52c32c30b2c052309a0edb0b0a03c9";
//$cityId = "1337179";
$cityId = "Dhaka";
$googleApiUrl = "http://api.openweathermap.org/data/2.5/forecast?q=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
//echo "<pre>";
//print_r($data);
$currentTime = time();




$today = date("F j, Y");
$time = date( "g:i a");
$city = $data->city->name;




//$temp_max = $temp_max - 273.15;
//$temp_min = $temp_min - 273.15;


?>

<h5 class="card-title text-muted">
            <?php
            
                echo $city. " - ".$today."<br>";
                echo $time. "<br>";?>
            </h5> 


<section class="container mt-5">

<div class="card-group">
  <div class="card">
  <?php 
        $temp_max = $data->list[0]->main->temp_max;
        $temp_min = $data->list[0]->main->temp_min;
        $humidity= $data->list[0]->main->humidity;
        $speed= $data->list[0]->wind->speed;

?>
    <div class="card-body">


        <p class="text-center">
            <?php
                
            echo "Temp Max: " .$temp_max. "&deg;C <br>";
            echo "Temp Min: " .$temp_min. "&deg;C <br>";
            
            ?>
        </p>

        <p class="font-weight-light">
            <?php
            echo "Humidity: " .$humidity. "%<br>";
            echo "Speed of Wind: " .$speed. "km/h<br>";
            ?>
        </p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>


  <div class="card">
    
    <div class="card-body">

      <h5 class="card-title text-muted">
            <?php
            
                echo $city. " - ".$today."<br>";
                echo $time. "<br>";?>
            </h5> 
        <p class="text-center">
            <?php
                
            echo "Temp Max: " .$temp_max. "&deg;C <br>";
            echo "Temp Min: " .$temp_min. "&deg;C <br>";
            
            ?>
        </p>

        <p class="font-weight-light">
            <?php
            echo "Humidity: " .$humidity. "%<br>";
            echo "Speed of Wind: " .$speed. "km/h<br>";
            ?>
        </p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>




  <div class="card">
    
    <div class="card-body">

      <h5 class="card-title text-muted">
            <?php
            
                echo $city. " - ".$today."<br>";
                echo $time. "<br>";?>
            </h5> 
        <p class="text-center">
            <?php
                
            echo "Temp Max: " .$temp_max. "&deg;C <br>";
            echo "Temp Min: " .$temp_min. "&deg;C <br>";
            
            ?>
        </p>

        <p class="font-weight-light">
            <?php
            echo "Humidity: " .$humidity. "%<br>";
            echo "Speed of Wind: " .$speed. "km/h<br>";
            ?>
        </p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>



</section>

</body>
</html>