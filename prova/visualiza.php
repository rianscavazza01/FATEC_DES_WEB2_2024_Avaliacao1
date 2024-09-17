<?php
$abre = fopen('ge.txt', 'r');
while (!feof($abre)) {
    $line = fgets($abre);
    echo $line ."<br>";
}
fclose($abre);

$abre = fopen('dsm.txt', 'r');
while (!feof($abre)) {
    $line = fgets($abre);
    echo $line ."<br>";
}
fclose($abre);
?>