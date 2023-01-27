<?php


/*

    1) concatenare stringhe
    2) stringhe e variabili
    3) lunghezza stringhe - strlen($stringa)
    4) togliere gli spazi bianchi a inizio e fine riga - trim($stringa)
    5) contare le parole str_word_count($stringa)
    6) cercare la posizione di una parole in una stringa - strpos($stringa, $parola)
    7) prendere una parte di stringa - substr ($stringa, $inizio, $lunghezza)
    8) sostituire parti di testo str_replace ($vecchia, $nuova, $stringa)

*/


$stringa = "<br><br>LOREM IPSUM DOLOR, sit AMET consectetur adipisicing elit. <br><br>";

$stringa2 = 'Sto gran cazzo <br><br>';

$nome = "Luca";

// echo strlen ($stringa);
// echo strtolower ($stringa);
// echo strtoupper ($stringa);

// echo strrev ($stringa);

// echo trim ($stringa);

// echo str_word_count ($stringa);

// echo strpos($stringa, 'tempore');

// echo strpos($stringa2, 'cazzo');

// echo substr($stringa2, 8, 6);

echo str_replace('cazzo', 'pene', $stringa2);
















?>
