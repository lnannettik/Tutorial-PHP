<?php


/*

    https://www.youtube.com/watch?v=wCgF1pz4aLQ&list=PLP5MAKLy8lP_zqdyjNaPjh95NG40Op8he&index=9

    0:00 intro
    0:25 cosa sono i condizionali
    1:25 if else
    3:05 elseif
    4:58 if annidati
    7:30 operatori di comparazione
    10:07 operatori logici
    15:25 if dentro html
    18:41 switch statement

*/



//----------------------------------------------------- Else

// $nome = 'Merda';

// if ($nome == 'Merda'){

//     echo 'Ciao Merda';

// } else {

//     echo 'chi?';

// };



//----------------------------------------------------- Elseif

// $nome = 'Merda';

// if ($nome == 'Merda'){

//     echo 'Ciao Merda';

// } elseif ($nome == 'Gianni'){

//     echo 'Bella Gianni';

// } else {

//     echo 'Ciao '. $nome;

// }


$numero = 19;

if ($numero < 20) {

    if ($numero % 2 == 0) {
        echo $numero . " è pari e minore di 20";

    } else {
        echo $numero . " è dispari e minore di 20";

    }
    

} else {
    echo "numero non valido";

}


























?>
