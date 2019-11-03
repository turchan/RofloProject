<?php

    $length = $_POST["length"];
    $width = $_POST["width"];
    $height = $_POST["height"];

    $roomAirVolume = $length * $width * $height;

    $numberOfHeaters = round($roomAirVolume / 20);

    echo "<h3>Length: $length</h3>";
    echo "<h3>Width: $width</h3>";
    echo "<h3>Height: $height</h3>";
    echo "<h3>Volume: $roomAirVolume</h3>";
    echo "<h3>Number of Heaters: $numberOfHeaters</h3>";
?>