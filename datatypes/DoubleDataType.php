<?php

    //define and print decimale variable
    $totalScore = 56.56;
    echo $totalScore . "<br>";

    //negative decimals
    $temp = -20.99;
    echo $temp . "<br>";

    //round a double value
    $price = 4.99;
    echo round($price) . "<br>";

    //compare 2 double with precision 0.1
    $price = 1.87;
    $bid = 1.97;
    echo (abs($price - $bid) < 0.1) ? "accept" : "reject";
