<?php

function controlla_simboli ($mail_value) {

    // str_contains verifica la presenza di una sottostringa all'interno della stringa
    return str_contains($mail_value, ".") && str_contains($mail_value, "@");

}

function valore_vuoto ($mail_value) {

    // empty verifica se una variabile è vuota
    return empty($mail_value);
}