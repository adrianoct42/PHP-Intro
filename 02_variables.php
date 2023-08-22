<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- Variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = "Adriano";
$age = 27;
$has_kids = true;
$cash_on_hand = 20.75;

// Em PHP, quando fazemos output de um valor TRUE, ele retorna 1.
// Um valor falso retona um vazio/espaço.
echo "$name is $age years old, has kids? $has_kids, cash: $cash_on_hand";

$x = 5 + 5;
echo "<br>";
echo "The value of x is: $x";

// Constantes em PHP são usados com define():
define("HOST", "localhost"); // NOME DA VAR / VALOR DA VAR, o memso que HOST = "localhost"
define("DB_NAME", "dev_db");
echo "<br>";
echo HOST;
?>