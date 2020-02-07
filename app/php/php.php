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
print $kiekIsgeriauPerMenesi . '<br>';

$pilnuDeziuKiekis = floor($kiekIsgeriauPerMenesi / $dezesDydis);
$likeButeliai = ($kiekIsgeriauPerMenesi / $dezesDydis - $pilnuDeziuKiekis) * $dezesDydis;


?>
<!--0. deze = 24; pirmadienis-ketvirtadienis( random 1-3 buteliukai);-->
<!--penktadienis (random 4-6 buteliukai); sestadienis (random 1-2 buteliukai);-->
<!--sekmadienis 0;-->
<!---->
<!--1. Sukurti cikla kuris skaiciuotu kiek mes per savaite-->
<!--suvartojam limonado.-->
<!---->
<!--2. sukurti cikla kuris apskaiciuotu kiek mes suvartojam limonado-->
<!--per menesi.-->
<!---->
<!--3. gauta kieki buteliuku per menesi atskirti kas 24 vnt (dezes dydis)-->
<!--ir atvaizduoti front-end'e dezemis o jose bteliukais (img)-->

