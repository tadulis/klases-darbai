<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// "Sukurkite FOR cikla kuris prasidetu nuo 0, veiktu iki kol kintamasisi pataps 10, ir atspausdins savo ciklo reiksme kas 1 vieneta"

for($x=0;$x<=10;$x++){
	print $x;
}

print '<br>';

for($x=0;$x<=10;$x+=2){
	print $x;
}

print '<br>';

for($x=0;$x<=10;$x+=5){
	print $x;
}