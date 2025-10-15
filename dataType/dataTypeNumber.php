<?php
    echo "<h3>Integer:</h3>";
    // Integer data type examples
    echo "Decima: ";
    var_dump(1234); // integer

    echo "<br>Octal: ";
    var_dump(01234); // octal

    echo "<br>Hexadecimal: ";
    var_dump(0x1A); // hexadecimal

    echo "<br>Binary: ";
    var_dump(0b11111111); // binary
    
    echo "<br>Underscore in number: ";
    var_dump(1_234_567); // underscore in number

    echo "<h3>Float:</h3>";
    // Float data type examples
    echo "Float: ";
    var_dump(1.234); // float

    echo "<br>Float with exponent: ";
    var_dump(1.2e3); // float with exponent (1.2 * 10^3)

    echo "<br>Float with negative exponent: ";
    var_dump(1.2e-3); // float with negative exponent (1.2 * 10^-3)

    echo "<br>Underscore in float: ";
    var_dump(1_234.567); // underscore in float
?>