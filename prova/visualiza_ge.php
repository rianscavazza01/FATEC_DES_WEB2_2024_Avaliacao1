<?php
session_start();

if (isset($_SESSION['cordenador']) && $_SESSION['cordenador'] === true) {
} elseif (isset($_SESSION['tecnico']) && $_SESSION['tecnico'] === true) {
} else {
    header('location: index.php');
    exit();
}

$abre = fopen('ge.txt', 'r');
while (!feof($abre)) {
    $line = fgets($abre);
    echo $line ."<br>";
}
fclose($abre);
?>