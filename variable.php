<?php

    $nama = "Agung Somomiharjo";
    $umur = 18;

    echo "halo $nama";
    echo "<br>";
    echo "umur saya $umur tahun";

    // constant
    define("NAMA", "Agung Somomiharjo");
    define("UMUR", 18);

    echo "<br>";
    echo "halo " . NAMA;
    echo "<br>";
    echo "umur saya " . UMUR . " tahun";

    // null
    $nama2 = "Angga Yunanda";
    $umur2 = 20;
    $nama2 = null;
    $umur2 = null;

    echo "<br>";
    echo "halo $nama2";
    echo "<br>";
    echo "umur saya $umur2 tahun";

    // is_null
    $nama3 = "Angga juananda";
    echo "<br>";
    echo "halo $nama3";

    $is_null = is_null($nama3); // false
    echo "<br>";
    var_dump($is_null);

    // isset -> mengecek apakah variable dan nilainya tidak null / kosong
    echo "<br>";
    $nama4;
    var_dump(isset($nama4)); // false

    $umur4 = 20;
    echo "<br>";
    var_dump(isset($umur4)); // true

    // unset -> menghapus variable
    $nama5 = "Ribi";
    echo "<br>";
    echo "halo $nama5";
    unset($nama5);
    echo "<br>";
    var_dump(isset($nama5)); // false