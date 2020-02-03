<?php
// "2. sukurti sakini is 5< zodziu.
// po kiekvieno zodzio yra padetas taskas.
// jums reikia naudojant bazines php funkcijas tuos taskus pakeisti i tarpus."

$text = 'Mano. vardas. Tomas. ir. as. esu. sportininkas.';

$result = str_replace('.', ' ', $text);

print $result;