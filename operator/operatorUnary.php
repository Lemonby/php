<?php

    echo "<h3>Operator Increment</h3>";

    // post-increment
    $a = 1;
    var_dump($a++); // 1
    var_dump($a); // 2

    echo "<br>";

    // pre-increment
    $b = 5;
    var_dump(++$b); // 6
    var_dump($b);  // 6

    echo "<br>";

    echo "<h3>Operator Decrement</h3>";

    // post-decrement
    $c = 5;
    var_dump($c--); // 5
    var_dump($c); // 4

    echo "<br>";

    // pre-decrement
    $d = 5;
    var_dump(--$d); // 4
    var_dump($d);  // 4
