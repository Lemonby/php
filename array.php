<?php

    echo "<h3>Array</h3>";

    // Indexed array
    $data = array("mangga", "apel", "jeruk");
    var_dump($data);

    echo "<br>";

    // cara lain membuat array
    $data2 = ["satu", "dua", "tiga"];
    var_dump($data2);

    echo "<br>";
    
    echo "<h3>Oprasi Array</h3>";

    // oprasi array
    var_dump($data2[0]); // akses index
    echo "<br>";
    $data2[2] = "empat"; // ubah index
    var_dump($data2);

    echo "<h3>Array Asosiatif</h3>";

    // array asosiatif1
    $data3 = array("nama" => "andi", "umur" => 20, "alamat" => "jakarta");
    var_dump($data3);

    echo "<br>";

    var_dump($data3["nama"]); // akses index array asosiatif dengan key

    echo "<br>";

    // array asosiatif2
    $data4 = ["nama" => "Agung", "umur" => 20, "alamat" => "bandung"];
    var_dump($data4);

    echo "<br>";

    var_dump($data4["nama"] = "Budi"); // ubah index array asosiatif

    echo "<h3>Array Multidimensi</h3>";

    // array multidimensi
    $data5 = array(
        array("andi", 20, "jakarta"),
        array("budi", 21, "bandung"),
        array("caca", 22, "surabaya")
    );

    var_dump($data5);
