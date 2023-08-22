<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope
/*

** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

$y = 24;

function registerUser($email) {
  // A função tem seu próprio escopo isolado. Para pegarmos algo do
  // escopo global, precisamos "chamar" com global.
  global $y;
  echo "$email - User registered! Chamada global: $y";
  echo "<br>";
};

registerUser("chamonho@gmail.com");

function sum($n1 = 3, $n2 = 15) {
  return $n1 + $n2;
};

$soma = sum(4, 9);
echo "Resultado da soma: $soma";

echo "<br>";

// Arrow Functions:
$multiply = fn($n1, $n2) => $n1 * $n2;
echo $multiply(2, 3);
?>