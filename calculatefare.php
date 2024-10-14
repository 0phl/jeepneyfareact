<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $distance = $_POST['distance'];
    $passengerType = $_POST['passengerType'];

    $baseFare = 13.00;
    $additionalFare = 1.75;
    $distanceBase = 5;

    if ($distance < 0) {
        echo "<div class='result'><h3>Distance cannot be negative.</h3></div>";
        return;
    }

    if ($distance <= $distanceBase) {
        $totalFare = $baseFare;
    } else {
        $totalFare = $baseFare + (($distance - $distanceBase) * $additionalFare);
    }

    if ($passengerType == "student") {
        $totalFare = $totalFare * 0.80;
    }

    echo "<div class='result'><h3>Total Fare: Php " . number_format($totalFare, 2) . "</h3></div>";
}

?>