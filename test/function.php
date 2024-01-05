<?php

    $price = 20000;
    $discount = 7;

    function amount($price,$discount){
        return $amount = $price - (($discount/100)*$price);
    }

    echo "The amount is \$".amount($price,$discount);


    echo "<br><br>";
    //circle area 
    $pi = 3.142;
    $radius = 7;

    function area($radius){
        return $area = 3.142 * $radius ** 2;
    }
    echo "Area is ".area($radius);



    echo "<br><br>";
    $parkin = 7;
    $cloth = 12;

    function total_clothes($parkin,$cloth){

        return $total_clothes = $parkin * $cloth;

    }

    echo "Total clothes is ". total_clothes($parkin,$cloth);


    echo "<br><br>";

    $length = 10;
    $width = 15;
    $height = 30;

    function volume($length,$width,$height){

        return $volume = $length * $width * $height;

    }
 
    echo "Volume is " .volume($length,$width,$height);


?>