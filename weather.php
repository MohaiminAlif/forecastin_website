


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



    <div class="container card w-75 mt-4">
        <div class="card-body">
            <h5 class="card-title text-muted text-center">
                <?php
                    
                echo $city."<br>";?>

                <small class="text-muted">
                    Current Weather Update
                </small>
            </h5>
 
            <p class="container">
                
                <?php
                    echo "Temp: ".$data2->main->temp. "&deg;C <br> "; 
                ?>
            </p>
            <p class="container">
                <?php
                echo "Max Temp: " .$data2->main->temp_max. "&deg;C <br> ";
                echo "Min Temp: " .$data2->main->temp_max. "&deg;C <br> ";
                ?>
            </p>
            
        </div>
    </div>



<section class="container card-group mt-5"; >

    <div class="row"><!--First Row-->

    
        <div class="col">
        
            <div class="card" >
                <div class="card-body"> 
                    
                    <small class="text-muted container">
                        <?php
                            
                            echo $data->list[1]->dt_txt;
                        ?>
                    </small>

                    <p class="container mt-5">
                        <?php
                            
                            echo "Max Temp: " .$data->list[1]->main->temp_max. "&deg;C <br> ";
                            echo "Min Temp: " .$data->list[1]->main->temp_min. "&deg;C <br>";

                        ?>
                    </p>

                    <p class="container mt-5">
                        <?php

                            echo "Weather: " .$data->list[1]->weather[0]->description. "<br>";
                            echo "Humidity: " .$data->list[1]->main->humidity. "%<br>";
                            echo "Wind Speed: ".$data->list[1]->wind->speed. "km/h<br>";
                        ?>
                    </p>


                </div>    
            </div>

        </div>


        <div class="col">
        
            <div class="card" >
                <div class="card-body"> 
                    
                    <small class="text-muted container">
                        <?php
                            
                            echo $data->list[1]->dt_txt;
                        ?>
                    </small>

                    <p class="container mt-5">
                        <?php
                            
                            echo "Max Temp: " .$data->list[2]->main->temp_max. "&deg;C <br> ";
                            echo "Min Temp: " .$data->list[2]->main->temp_min. "&deg;C <br>";

                        ?>
                    </p>

                    <p class="container mt-5">
                        <?php

                            echo "Weather: " .$data->list[2]->weather[0]->description. "<br>";
                            echo "Humidity: " .$data->list[2]->main->humidity. "%<br>";
                            echo "Wind Speed: ".$data->list[2]->wind->speed. "km/h<br>";
                        ?>
                    </p>


                </div>    
            </div>

        </div>


 

        <div class="col">
        
            <div class="card" >
                <div class="card-body"> 
                    
                    <small class="text-muted container">
                        <?php
                            
                            echo $data->list[1]->dt_txt;
                        ?>
                    </small>

                    <p class="container mt-5">
                        <?php
                            
                            echo "Max Temp: " .$data->list[1]->main->temp_max. "&deg;C <br> ";
                            echo "Min Temp: " .$data->list[1]->main->temp_min. "&deg;C <br>";

                        ?>
                    </p>

                    <p class="container mt-5">
                        <?php

                            echo "Weather: " .$data->list[1]->weather[0]->description. "<br>";
                            echo "Humidity: " .$data->list[1]->main->humidity. "%<br>";
                            echo "Wind Speed: ".$data->list[1]->wind->speed. "km/h<br>";
                        ?>
                    </p>


                </div>    
            </div>

        </div>





        <div class="col">
        
            <div class="card" >
                <div class="card-body"> 
                    
                    <small class="text-muted container">
                        <?php
                            
                            echo $data->list[1]->dt_txt;
                        ?>
                    </small>

                    <p class="container mt-5">
                        <?php
                            
                            echo "Max Temp: " .$data->list[1]->main->temp_max. "&deg;C <br> ";
                            echo "Min Temp: " .$data->list[1]->main->temp_min. "&deg;C <br>";

                        ?>
                    </p>

                    <p class="container mt-5">
                        <?php

                            echo "Weather: " .$data->list[1]->weather[0]->description. "<br>";
                            echo "Humidity: " .$data->list[1]->main->humidity. "%<br>";
                            echo "Wind Speed: ".$data->list[1]->wind->speed. "km/h<br>";
                        ?>
                    </p>


                </div>    
            </div>

        </div>

    </div>


    
    <div class="row mt-4"><!--Second Row-->

        <div class="col">
            
            <div class="card" >
                <div class="card-body"> 
                    
                    <small class="text-muted container">
                        <?php
                            
                            echo $data->list[1]->dt_txt;
                        ?>
                    </small>

                    <p class="container mt-5">
                        <?php
                            
                            echo "Max Temp: " .$data->list[1]->main->temp_max. "&deg;C <br> ";
                            echo "Min Temp: " .$data->list[1]->main->temp_min. "&deg;C <br>";

                        ?>
                    </p>

                    <p class="container mt-5">
                        <?php

                            echo "Weather: " .$data->list[1]->weather[0]->description. "<br>";
                            echo "Humidity: " .$data->list[1]->main->humidity. "%<br>";
                            echo "Wind Speed: ".$data->list[1]->wind->speed. "km/h<br>";
                        ?>
                    </p>


                </div>    
            </div>

        </div>



        <div class="col">
            
            <div class="card" >
                <div class="card-body"> 
                    
                    <small class="text-muted container">
                        <?php
                            
                            echo $data->list[1]->dt_txt;
                        ?>
                    </small>

                    <p class="container mt-5">
                        <?php
                            
                            echo "Max Temp: " .$data->list[1]->main->temp_max. "&deg;C <br> ";
                            echo "Min Temp: " .$data->list[1]->main->temp_min. "&deg;C <br>";

                        ?>
                    </p>

                    <p class="container mt-5">
                        <?php

                            echo "Weather: " .$data->list[1]->weather[0]->description. "<br>";
                            echo "Humidity: " .$data->list[1]->main->humidity. "%<br>";
                            echo "Wind Speed: ".$data->list[1]->wind->speed. "km/h<br>";
                        ?>
                    </p>


                </div>    
            </div>

        </div>


        <div class="col">
            
            <div class="card" >
                <div class="card-body"> 
                    
                    <small class="text-muted container">
                        <?php
                            
                            echo $data->list[1]->dt_txt;
                        ?>
                    </small>

                    <p class="container mt-5">
                        <?php
                            
                            echo "Max Temp: " .$data->list[1]->main->temp_max. "&deg;C <br> ";
                            echo "Min Temp: " .$data->list[1]->main->temp_min. "&deg;C <br>";

                        ?>
                    </p>

                    <p class="container mt-5">
                        <?php

                            echo "Weather: " .$data->list[1]->weather[0]->description. "<br>";
                            echo "Humidity: " .$data->list[1]->main->humidity. "%<br>";
                            echo "Wind Speed: ".$data->list[1]->wind->speed. "km/h<br>";
                        ?>
                    </p>


                </div>    
            </div>

        </div>




        <div class="col">
            
            <div class="card" >
                <div class="card-body"> 
                    
                    <small class="text-muted container">
                        <?php
                            
                            echo $data->list[1]->dt_txt;
                        ?>
                    </small>

                    <p class="container mt-5">
                        <?php
                            
                            echo "Max Temp: " .$data->list[1]->main->temp_max. "&deg;C <br> ";
                            echo "Min Temp: " .$data->list[1]->main->temp_min. "&deg;C <br>";

                        ?>
                    </p>

                    <p class="container mt-5">
                        <?php

                            echo "Weather: " .$data->list[1]->weather[0]->description. "<br>";
                            echo "Humidity: " .$data->list[1]->main->humidity. "%<br>";
                            echo "Wind Speed: ".$data->list[1]->wind->speed. "km/h<br>";
                        ?>
                    </p>


                </div>    
            </div>

        </div>

  

    </div>

</section>

</body>
</html>


