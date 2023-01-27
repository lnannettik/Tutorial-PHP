<?php


/*

    https://www.youtube.com/watch?v=LvE_odXTt0I&list=PLP5MAKLy8lP_zqdyjNaPjh95NG40Op8he&index=8

    0:00 intro
    1:02 come creare un array
    2:05 accedere e modificare elementi
    4:10 loop di un array
    7:15 array associativi
    9:26 loop array associativo
    10:37 array multidimensionali
    16:41 ordinare un array
    18:02 ordinare array associativo per chiave e per valore
    20:00 inserire e rimuovere elementi array

*/


// $citta = ['Milano', 'Firenze', 'Roma'];

// echo $citta[0];  // Milano
// echo $citta[1];  // Firenze
// echo $citta[2];  // Roma


// $citta[2] = 'Napoli';
// echo $citta[2];         // Napoli



//----------------------------------------------------- Ciclo FOR

// $citta = ['Milano', 'Firenze', 'Roma'];

// for ($i=0; $i < count($citta); $i++) { 

//     echo $citta[$i] . "<br>";

// }




//----------------------------------------------------- Array associativi

// $citta = ['Milano', 'Firenze', 'Roma'];

// $persona = [

//     "nome" => "Sto",
//     "cognome" => "Cazzo",
//     "eta" => 36

// ];

// echo $persona["cognome"];


// $persona2 = [

//     "arararar" => "Sto",
//     55 => "Cazzo",
//     1 => 36

// ];

// echo $persona2[1];



//----------------------------------------------------- Ciclo FOR EACH


/*

    sintassi:

    PER CIASCUN [foreach] (ELEMENTO DI ARRAY [$nome-dell-array] IDENTIFICATO COME [as] CHIAVE => VALORE [$chiave => $valore]){
        esegui dei comandi
    };

    foreach($persona as $chiave => $valore){
        echo $chiave . " => " . $valore . "<br>";
    };
*/

/*

    $persona = [

        "nome" => "Sto",
        "cognome" => "Cazzo",
        "eta" => 36

    ];

    foreach($persona as $chiave => $valore){
        echo $chiave . " => " . $valore . "<br>";
    };

*/



//----------------------------------------------------- Array Bidimensionali


/*

    sintassi:
    è un array di array.

    $array_bidimensionale = [

        ["elemento", "elemento", "elemento"],

        ["elemento", "elemento", "elemento"],

    ];

*/

// $classi = [
    
//     ["Luca", "Marco", "Anna"],       // l'array rappresenta una classe composta dagli alunni Luca, Marco e Anna
//     ["Leonardo", "Mattia", "Paola"]

// ];

// // echo $classi[0][2];      // Anna

// for($classe=0; $classe < count($classi); $classe++){    // leggiamo il primo array, poi i suoi elementi. Poi leggiamo il secondo array e poi i suoi elementi...

//     echo "Classe: " . $classe . "<br>";                 // con il primo ciclo for leggo il primo livello di array, con il secondo for leggo il secondo livello


//     for ($alunno=0; $alunno < count($classi[$classe]); $alunno++){
    
//         echo $classi[$classe][$alunno] . "<br>";
    
//     }

// };




//----------------------------------------------------- Ordinare un array - sort(), rsort()


// $citta = ['Milano', 'Firenze', 'Roma'];

// sort($citta);     // Firenze, Milano, Roma  => ordine alfabetico
// rsort($citta);      // Roma, Milano, Firenze => reverse ordine alfabetico

// print_r($citta);




//----------------------------------------------------- Ordinare un array associativo per chiave - ksort(), krsort()


// $persona = [

//     "nome" => "Sto",
//     "cognome" => "Cazzo",
//     "eta" => 36

// ];

// ksort($persona);    //  => chiavi in ordine alfabetico
// print_r($persona);

// krsort($persona);   //  => chiavi in reverse ordine alfabetico
// print_r($persona);




//----------------------------------------------------- Ordinare un array associativo per valore - asort(), arsort()


// $persona = [

//     "nome" => "Sto",
//     "cognome" => "Cazzo",
//     "eta" => 36

// ];

// asort($persona);    //  => chiavi in ordine alfabetico
// print_r($persona);

// arsort($persona);   //  => chiavi in reverse ordine alfabetico
// print_r($persona);




//----------------------------------------------------- array_push(), array_pop(), array_unshift(), array_shift()


$citta = ['Milano', 'Firenze', 'Roma'];

// array_push($citta, 'Napoli');        // inserisce elemento in fondo all'array
// array_pop($citta);                   // elimina l'ultimo elemento dell'array

// array_unshift($citta, 'Napoli');     // inserisce elemento come primo dell'array
array_shift($citta);                    // elimina il primo elemento dell'array

print_r($citta);



























?>
