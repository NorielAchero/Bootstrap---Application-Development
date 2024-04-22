<?php
#PHP Arrays

 $color = array("green", "white", "red");

    echo count($color);
    echo "<br>";
    echo "My favorite color are " .$color[0]. " " .$color[2]. " " .$color[2];
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $noOfArray = count($color);


    for($x = 0; $x < $noOfArray; $x++){
        echo $color[$x];
        echo "<br>";
    }


?>