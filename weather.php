


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .cardMod{
            height: 20rem;
            width: 15rem; 
        }

        .cUpdate{
           
        }
    </style>
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
//print_r($data);

$city = $data->city->name;

?>

<section class="row" style=" margin-top: 20rem">
    
    <div class="col" style=" margin-top: -5rem; margin-left:-4rem">

        <div class="card container" style="width: 25rem; height: 40rem">

            <div class="card-body">               
                
                <h5 class="card-title text-muted text-center">
                    <?php
                        
                    echo $city."<br>";
                    echo date("l jS \of F Y h:i:s A") . "<br>";
                    ?>

                    <small class="text-muted">
                        Current Weather Update
                    </small>
                </h5>
    
                <p class="container mt-5">
                    
                    <?php
                        echo "Temp: ".$data2->main->temp. "&deg;C <br> "; 
                    ?>
                </p>

                <p class="container " style="margin: 5rem 0 0 ;">
                    <?php
                    echo "Max Temp: " .$data2->main->temp_max. "&deg;C <br> ";
                    echo "Min Temp: " .$data2->main->temp_max. "&deg;C <br> ";
                    ?>
                </p>
                
                <p class="container " style="margin: 4rem 0 0 ;">
                    <?php
                    echo "Humidity: " .$data2->main->humidity. "%<br> ";
                   
                    ?>
                </p>

                <p class="container " style="margin: 5rem 0 0 ;">
                    <?php
                    echo "Wind Speed: " .$data2->wind->speed. "km/h <br> ";
                    if($data2->wind->deg == "0")$direction="Due North";
                    if($data2->wind->deg >= "0" &&  $data2->wind->deg <= "45")$direction="Due North East";
                    if($data2->wind->deg > "45" &&  $data2->wind->deg < "90")$direction="Due North East";
                    if($data2->wind->deg == "90")$direction="Due East";
                    if($data2->wind->deg > "90" &&  $data2->wind->deg <= "135")$direction="Due South East";
                    if($data2->wind->deg > "135" &&  $data2->wind->deg < "180")$direction="Due South East";
                    if($data2->wind->deg == "180")$direction="Due South";
                    if($data2->wind->deg > "180" &&  $data2->wind->deg <= "225")$direction="Due South West";
                    if($data2->wind->deg > "225" &&  $data2->wind->deg < "270")$direction="Due South West";
                    if($data2->wind->deg == "270")$direction="Due West";
                    if($data2->wind->deg > "270" &&  $data2->wind->deg <= "315")$direction="Due North west";
                    if($data2->wind->deg > "315" &&  $data2->wind->deg <= "360")$direction="Due North west";
                    echo "direction: " .$direction. "<br> ";
                    ?>
                </p>

            </div>
        </div>


    </div>

    <div class="col">
        <h3 class="text-muted text-center">Weather forecast for next four days</h3>
        <div class="row">
            
            <div class="col-sm2">
            
                <div class="card cardMod" >
                    <div class="card-body"> 
                        <small class="container">  ---Date---------Time <br></small>
                        <small class="container text-muted">
                           
                            <?php
                                
                                echo $data->list[9]->dt_txt;
                            ?>
                        </small>

                        <p class="container mt-5">
                            <?php
                                
                                echo "Max Temp: " .$data->list[9]->main->temp_max. "&deg;C <br> ";
                                echo "Min Temp: " .$data->list[9]->main->temp_min. "&deg;C <br>";

                            ?>
                        </p>

                        <p class="container mt-5">
                            <?php

                                echo "Weather: " .$data->list[9]->weather[0]->description. "<br>";
                                echo "Humidity: " .$data->list[9]->main->humidity. "%<br>";
                                echo "Wind Speed: ".$data->list[9]->wind->speed. "km/h<br>";
                            ?>
                        </p>


                    </div>    
                </div>

            </div>


    

            <div class="col-sm2">
            
                <div class="card cardMod" >
                    <div class="card-body"> 
                    <small class="container">  ---Date---------Time <br></small>
                        <small class="text-muted container">
                            <?php
                                
                                echo $data->list[17]->dt_txt;
                            ?>
                        </small>

                        <p class="container mt-5">
                            <?php
                                
                                echo "Max Temp: " .$data->list[17]->main->temp_max. "&deg;C <br> ";
                                echo "Min Temp: " .$data->list[17]->main->temp_min. "&deg;C <br>";

                            ?>
                        </p>

                        <p class="container mt-5">
                            <?php

                                echo "Weather: " .$data->list[17]->weather[0]->description. "<br>";
                                echo "Humidity: " .$data->list[17]->main->humidity. "%<br>";
                                echo "Wind Speed: ".$data->list[17]->wind->speed. "km/h<br>";
                            ?>
                        </p>


                    </div>    
                </div>

            </div>

            <div class="col-sm2">
                
                <div class="card cardMod" >
                    <div class="card-body"> 
                        <small class="container">  ---Date---------Time <br></small>
                        <small class="text-muted container">
                            <?php
                                
                                echo $data->list[25]->dt_txt;
                            ?>
                        </small>

                        <p class="container mt-5">
                            <?php
                                
                                echo "Max Temp: " .$data->list[25]->main->temp_max. "&deg;C <br> ";
                                echo "Min Temp: " .$data->list[25]->main->temp_min. "&deg;C <br>";

                            ?>
                        </p>

                        <p class="container mt-5">
                            <?php

                                echo "Weather: " .$data->list[25]->weather[0]->description. "<br>";
                                echo "Humidity: " .$data->list[25]->main->humidity. "%<br>";
                                echo "Wind Speed: ".$data->list[25]->wind->speed. "km/h<br>";
                            ?>
                        </p>


                    </div>    
                </div>

            </div>



            <div class="col-sm2">
                
                <div class="card cardMod" >
                    <div class="card-body"> 
                    <small class="container">  ---Date---------Time <br></small>
                        <small class="text-muted container">
                            <?php
                                
                                echo $data->list[33]->dt_txt;
                            ?>
                        </small>

                        <p class="container mt-5">
                            <?php
                                
                                echo "Max Temp: " .$data->list[33]->main->temp_max. "&deg;C <br> ";
                                echo "Min Temp: " .$data->list[33]->main->temp_min. "&deg;C <br>";

                            ?>
                        </p>

                        <p class="container mt-5">
                            <?php

                                echo "Weather: " .$data->list[33]->weather[0]->description. "<br>";
                                echo "Humidity: " .$data->list[33]->main->humidity. "%<br>";
                                echo "Wind Speed: ".$data->list[33]->wind->speed. "km/h<br>";
                            ?>
                        </p>


                    </div>    
                </div>
            </div>
        
        </div>

    </div>



   
</section>

</body>
</html>


