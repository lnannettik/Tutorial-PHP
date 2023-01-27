<?php


/*

    1) var_dump per vedere i tipi di dati
    2) Stringhe
    3) Interi
    4) Decimali
    5) Boolean
    6) Array
    7) Oggetti
    8) Null

*/


$nome = 'Luca';
$eta = 23;
$temperatura = 36.07;
$is_online = false;
$interessi = ['calcio', 'figa', 'basket'];
$fidanzata = null;


class Persona
{
    public $nome;
    public $cognome;

    public function __construct($nome, $cognome)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        
    }
}

$persona1 = new Persona('Orazio', 'Rossi');
var_dump($interessi);

$nome = 12345;
var_dump($nome);




?>
