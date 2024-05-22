<?php

function controlla_simboli ($mail_value) {
    
    return str_contains($mail_value, ".") && str_contains($mail_value, "@");

}