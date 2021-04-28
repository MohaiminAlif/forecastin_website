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

$contents = file_get_contents($url);
$data = json_decode($contents);


$data = json_decode($contents);
echo "<pre>";
print_r($data);

$city = $data->city->name;

?>

    <div class="container mt-4"><!--City Part-->
        <h5 class="card-title text-muted">
            <?php
                
               echo $city."<br>";?>
        </h5> 
    </div>



<section class="container-fill card-group"; >


<div class="card" >

<div class="card-header" >
    <small class="text-muted"><?php
    echo "" .$data->list[0]->dt_txt."<br>";?> </small>
</div>
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


    <div class="card" >

        <div class="card-header" >
            <small class="text-muted"><?php
            echo "" .$data->list[0]->dt_txt."<br>";?> </small>
        </div>
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


 

    <div class="card" >

        <div class="card-header" >
            <small class="text-muted"><?php
            echo "" .$data->list[0]->dt_txt."<br>";?> </small>
        </div>
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





    <div class="card" >

        <div class="card-header" >
            <small class="text-muted"><?php
            echo "" .$data->list[0]->dt_txt."<br>";?> </small>
        </div>
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




    <div class="card" >

        <div class="card-header" >
            <small class="text-muted"><?php
            echo "" .$data->list[0]->dt_txt."<br>";?> </small>
        </div>
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


    <div class="card" >

        <div class="card-header" >
            <small class="text-muted"><?php
            echo "" .$data->list[0]->dt_txt."<br>";?> </small>
        </div>
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

    <div class="card" >

<div class="card-header" >
    <small class="text-muted"><?php
    echo "" .$data->list[0]->dt_txt."<br>";?> </small>
</div>
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


<div class="card" >

<div class="card-header" >
    <small class="text-muted"><?php
    echo "" .$data->list[0]->dt_txt."<br>";?> </small>
</div>
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




</section>

</body>
</html>
