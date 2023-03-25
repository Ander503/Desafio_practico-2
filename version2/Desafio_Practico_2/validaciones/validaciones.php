<?php

//Valida que si esta vacio
function estavacio($var){
    
return empty(trim($var));
}

//Valida si es texto
function esTexto($var){
    return preg_match('/^[a-zA-Z ]+$/',$var);
}


//valida telefono fijo
function esTelefono_fijo($var){
    return preg_match('/^2\d{7}$/',$var);
}


//valida telefono movil
function esTelefono_movil($var){
    return preg_match('/^[67]\d{7}$/',$var);
}

//valida dui
function esDui($var){
    return preg_match('/^\d{8}$/', $var);
}

//valida nit
function esNit($var){
    return preg_match('/^\d{14}$/',$var);
}

//verifica si es correo
function esMail($var){
    return filter_var($var,FILTER_VALIDATE_EMAIL);
}

?>