<?php

    echo "<h3>Operator Penugasan</h3>";

    $total = 0;

    $ayam = 100;
    $dagingSapi = 200;
    $sayur = 50;
    $minuman = 20;

    // penjumlahan
    $total += $ayam; // $total = $total + $ayam
    $total += $dagingSapi;
    $total += $sayur;
    $total += $minuman;

    var_dump($total);

    echo "<br>";

    // pengurangan
    $total -= $minuman; // $total = $total - $minuman
    var_dump($total);

    echo "<br>";    