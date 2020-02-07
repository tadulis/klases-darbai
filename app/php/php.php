<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dezesDydis = 24;
$kiekIsgeriau = 0;
$kiekIsgeriauPerMenesi = 0;
$penktadienis = rand(4, 6);
$sestadienis = rand(1, 2);
$sekmadienis = 0;

for ($savaitesNr = 1; $savaitesNr <= 4; $savaitesNr++) {
    $kiekIsgeriau = 0;
    for ($x = 1; $x <= 4; $x++) {
        $pirmadienisKetvirtadienis = rand(1, 3);
        $kiekIsgeriau += $pirmadienisKetvirtadienis;
    }
    $kiekIsgeriauPerPirmaSavaite = $kiekIsgeriau + $penktadienis + $sestadienis + $sekmadienis;
    $kiekIsgeriauPerMenesi += $kiekIsgeriauPerPirmaSavaite;
}
print $kiekIsgeriauPerMenesi;

?>