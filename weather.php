
<!--Text field info gather part-->
<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
        {   
        
            $cityId = $_POST['cName'];

        }

?>

<!--api data decoding part-->
<?php
$apiKey = "1b52c32c30b2c052309a0edb0b0a03c9";
//$cityId = "Dhaka";
$url = "http://api.openweathermap.org/data/2.5/forecast?q=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$url2 = "http://api.openweathermap.org/data/2.5/weather?q=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$contents = file_get_contents($url);
$data = json_decode($contents);

$contents2 = file_get_contents($url2);
$data2 = json_decode($contents2);


$city = $data->city->name;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Forcast Website</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .cardMod{
            height: 25rem;
            width: 10rem; 
        }


        .mainCard{
            background-image: url('mainCardPic.png');
            background-size: 72rem;
            background-position-x: -10rem;
    
            
        }

        .neon{

            font-family: 'Warnes', cursive;
  
            text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #0073e6, 0 0 20px #0073e6, 0 0 25px #0073e6, 0 0 30px #0073e6, 0 0 35px #0073e6;
        }

        

    </style>
</head>


<body>

<div><!--Top Text field for Entering city name-->
    <form class="container mt-4"; method="POST">
        <div class="my-4">
            <div>
                 <h3>Enter Country/City Name</h3>                       
                <input type="text" class="form-control" name = "cName">
                
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                
            </div>

        </div>
    </form>
</div>

<section class="row" style=" margin-top: 12rem" id="mainPart"><!--Left Part-->
    
    <div class="col neon text-dark" style=" margin-top: -5rem; margin-left:-4rem">

        <div class="card container mainCard" style="width: 25rem; height: 40rem">

            <div class="card-body">               
                
                <h5 class="card-title text-muted text-center" style="font-weight: bold;">
                    <?php
                        
                    echo $city."<br>";

                    ?>

                  </h5>
                <p class="text-center mt-2">Current Weather Update</p>
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
                    echo "Weather: ".$data2->weather[0]->description. "<br>";
                   
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
                    echo "Wind Direction: " .$direction. "<br> ";
                    ?>
                </p>

            </div>
        </div>


    </div>

    <div class="col mt-3"><!--Right Part-->
        <div class="card header text-muted text-center" style="width: 38rem ; background-color: #91D8E9">
        <h5>
            <?php
                echo"Weather forecast for the next four days in ".$city; 
            ?>
        </h5>
        </div>
        <div class="row">
            
            <div class="col-sm2 mt-2">
            
                <div class="card cardMod neon text-dark" style= "background-image: url('mainCardPic.png'); background-position-x: -15rem;">

                    <div class="card-body"> 

                       
                        <small>
                           
                            <?php
                                
                                echo $data->list[9]->dt_txt;
                            ?>
                            <br><br>
                        </small>

                        <small>
                            <?php
                                
                                echo "Max Temp: " .$data->list[9]->main->temp_max. "&deg;C <br> ";
                                echo "Min Temp: " .$data->list[9]->main->temp_min. "&deg;C <br>";

                            ?>
                            <br><br>
                        </small>

                        <small>
                            <?php

                                echo "Weather: " .$data->list[9]->weather[0]->description. "<br>";
                                echo "Humidity: " .$data->list[9]->main->humidity. "%<br><br>";
                                echo "Wind Speed: ".$data->list[9]->wind->speed. "km/h<br>";
                            ?>
                            <br>
                        </small>


                    </div>    
                </div>

            </div>


    

            <div class="col-sm2 mt-2">
            
                <div class="card cardMod neon text-dark" style= "background-image: url('mainCardPic.png'); background-position-x: -25rem;">

                    <div class="card-body"> 

   
                    <small>
       
                     <?php

                        echo $data->list[17]->dt_txt;
                     ?>
                    <br><br>
                    </small>

                    <small>
                        <?php
                            
                            echo "Max Temp: " .$data->list[17]->main->temp_max. "&deg;C <br> ";
                            echo "Min Temp: " .$data->list[17]->main->temp_min. "&deg;C <br>";

                        ?>
                        <br><br>
                    </small>

                    <small>
                        <?php

                            echo "Weather: " .$data->list[17]->weather[0]->description. "<br>";
                            echo "Humidity: " .$data->list[17]->main->humidity. "%<br><br>";
                            echo "Wind Speed: ".$data->list[17]->wind->speed. "km/h<br>";
                        ?>
                        <br>
                    </small>


                    </div>    
                </div>

            </div>

            <div class="col-sm2 mt-2">
                
            <div class="card cardMod neon text-dark" style= "background-image: url('mainCardPic.png'); background-position-x: -35rem;">

                <div class="card-body"> 


                    <small>

                     <?php

                          echo $data->list[25]->dt_txt;
                     ?>
                    <br><br>
                    </small>

                    <small>
                        <?php
                            
                            echo "Max Temp: " .$data->list[25]->main->temp_max. "&deg;C <br> ";
                            echo "Min Temp: " .$data->list[25]->main->temp_min. "&deg;C <br>";

                        ?>
                        <br><br>
                    </small>

                    <small>
                        <?php

                            echo "Weather: " .$data->list[25]->weather[0]->description. "<br>";
                            echo "Humidity: " .$data->list[25]->main->humidity. "%<br><br>";
                            echo "Wind Speed: ".$data->list[25]->wind->speed. "km/h<br>";
                        ?>
                        <br>
                    </small>


                </div>    
            </div>

        </div>



        <div class="col-sm2 mt-2">
                
            <div class="card cardMod neon text-dark" style= "background-image: url('mainCardPic.png'); background-position-x: -45rem;">

                <div class="card-body"> 


                    <small>     

                    <?php

                        echo $data->list[33]->dt_txt;
                    ?>
                    <br><br>        
                    </small>

                    <small> 
                        <?php
            
                            echo "Max Temp: " .$data->list[33]->main->temp_max. "&deg;C <br> ";
                            echo "Min Temp: " .$data->list[33]->main->temp_min. "&deg;C <br>";

                        ?>
                        <br><br>
                    </small>

                    <small>
                        <?php

                            echo "Weather: " .$data->list[33]->weather[0]->description. "<br>";
                            echo "Humidity: " .$data->list[33]->main->humidity. "%<br><br>";
                            echo "Wind Speed: ".$data->list[33]->wind->speed. "km/h<br>";
                        ?>
                        <br>
                    </small>


                </div>    
            </div>

        </div>
        
    </div>

    </div>



   
</section>

</body>
</html>


