


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
$url = "http://api.openweathermap.org/data/2.5/forecast?q=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$url2 = "http://api.openweathermap.org/data/2.5/weather?q=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$contents = file_get_contents($url);
$data = json_decode($contents);

$contents2 = file_get_contents($url2);
$data2 = json_decode($contents2);

//echo "<pre>";
//print_r($data2);



$city = $data->city->name;

?>

    <div class="container mt-4"><!--City Part-->
        <h5 class="card-title text-muted">
            <?php
                
               echo $city."<br>";?>
        </h5> 
    </div>



<section class="container card-group"; >

    <div class="row"><!--First Row-->
        <div class="col-sm2">
        
            <div class="card" >
                <div class="card-body"> 
                    
                    <small class="text-muted container">
                        <?php
                            
                            echo $data->list[1]->dt_txt;
                        ?>
                    </small>

                    <p class="container mt-2">
                        <?php
                            
                            echo "Max Temp: " .$data->list[1]->main->temp_max. "&deg;C <br> ";
                            echo "Min Temp: " .$data->list[1]->main->temp_min. "&deg;C <br>";

                        ?>
                    </p>

                    <p class="container">
                        <?php


                            echo "Weather: " .$data->list[1]->weather[0]->description. "<br>";
                            echo "Humidity: " .$data->list[1]->main->humidity. "%<br>";
                            echo "Wind Speed: ".$data->list[1]->wind->speed. "km/h<br>";
                        ?>
                    </p>


                </div>    
            </div>

        </div>


        <div class="col-sm2">
        
            <div class="card" >
            <div class="card-body"> 

                    <p class="container">
                        <?php
                            echo "<br> ";
                            echo "Max: " .$data->list[0]->main->temp_max. "&deg;C <br> ";
                            echo "Min: " .$data->list[0]->main->temp_min. "&deg;C <br>";

                        ?>
                    </p>

                    <p class="container">
                        <?php
                            echo"<br>";
                            echo "Humidity: " .$data->list[0]->main->humidity. "%<br>";
                            echo "Wind Speed: ".$data->list[0]->wind->speed. "km/h<br>";
                        ?>
                    </p>

            </div>    
            </div>
            
        </div>


 

        <div class="col-sm2">
        
            <div class="card" >
            <div class="card-body"> 

                    <p class="container">
                        <?php
                            echo "<br> ";
                            echo "Max: " .$data->list[0]->main->temp_max. "&deg;C <br> ";
                            echo "Min: " .$data->list[0]->main->temp_min. "&deg;C <br>";

                        ?>
                    </p>

                    <p class="container">
                        <?php
                            echo"<br>";
                            echo "Humidity: " .$data->list[0]->main->humidity. "%<br>";
                            echo "Wind Speed: ".$data->list[0]->wind->speed. "km/h<br>";
                        ?>
                    </p>

            </div>    
            </div>
            
        </div>




        <div class="col-sm2">
        
            <div class="card" >
            <div class="card-body"> 

                    <p class="container">
                        <?php
                            echo "<br> ";
                            echo "Max: " .$data->list[0]->main->temp_max. "&deg;C <br> ";
                            echo "Min: " .$data->list[0]->main->temp_min. "&deg;C <br>";

                        ?>
                    </p>

                    <p class="container">
                        <?php
                            echo"<br>";
                            echo "Humidity: " .$data->list[0]->main->humidity. "%<br>";
                            echo "Wind Speed: ".$data->list[0]->wind->speed. "km/h<br>";
                        ?>
                    </p>

            </div>    
            </div>
            
        </div>

    </div>


    <div class="row"><!--Second Row-->

        <div class="col-sm2">
            
            <div class="card" >
            <div class="card-body"> 

                    <p class="container">
                        <?php
                            echo "<br> ";
                            echo "Max: " .$data->list[0]->main->temp_max. "&deg;C <br> ";
                            echo "Min: " .$data->list[0]->main->temp_min. "&deg;C <br>";

                        ?>
                    </p>

                    <p class="container">
                        <?php
                            echo"<br>";
                            echo "Humidity: " .$data->list[0]->main->humidity. "%<br>";
                            echo "Wind Speed: ".$data->list[0]->wind->speed. "km/h<br>";
                        ?>
                    </p>

            </div>    
            </div>
            
        </div>


        <div class="col-sm2">
        
            <div class="card" >
            <div class="card-body"> 

                    <p class="container">
                        <?php
                            echo "<br> ";
                            echo "Max: " .$data->list[0]->main->temp_max. "&deg;C <br> ";
                            echo "Min: " .$data->list[0]->main->temp_min. "&deg;C <br>";

                        ?>
                    </p>

                    <p class="container">
                        <?php
                            echo"<br>";
                            echo "Humidity: " .$data->list[0]->main->humidity. "%<br>";
                            echo "Wind Speed: ".$data->list[0]->wind->speed. "km/h<br>";
                        ?>
                    </p>

            </div>    
            </div>
            
        </div>


        <div class="col-sm2">
        
            <div class="card" >
            <div class="card-body"> 

                    <p class="container">
                        <?php
                            echo "<br> ";
                            echo "Max: " .$data->list[0]->main->temp_max. "&deg;C <br> ";
                            echo "Min: " .$data->list[0]->main->temp_min. "&deg;C <br>";

                        ?>
                    </p>

                    <p class="container">
                        <?php
                            echo"<br>";
                            echo "Humidity: " .$data->list[0]->main->humidity. "%<br>";
                            echo "Wind Speed: ".$data->list[0]->wind->speed. "km/h<br>";
                        ?>
                    </p>

            </div>    
            </div>
        
        </div>



        <div class="col-sm2">
        
            <div class="card" >
            <div class="card-body"> 

                    <p class="container">
                        <?php
                            echo "<br> ";
                            echo "Max: " .$data->list[0]->main->temp_max. "&deg;C <br> ";
                            echo "Min: " .$data->list[0]->main->temp_min. "&deg;C <br>";

                        ?>
                    </p>

                    <p class="container">
                        <?php
                            echo"<br>";
                            echo "Humidity: " .$data->list[0]->main->humidity. "%<br>";
                            echo "Wind Speed: ".$data->list[0]->wind->speed. "km/h<br>";
                        ?>
                    </p>

            </div>    
            </div>
            
        </div>


    </div>

</section>

</body>
</html>


