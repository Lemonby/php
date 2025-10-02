<?php

echo "<h3>String:</h3>";

// String data type examples
echo  'Single quotes';
echo "\n";
echo "Double quotes ";

ECHO "<br>";

// multiline string
echo <<<EKO
This is a multiline string
using heredoc syntax
written by agung
EKO;

echo "<br>";

// nowdoc syntax (similar to single quotes)
echo <<<'EKO'
This is a multiline string
using nowdoc syntax
written by agung
EKO;