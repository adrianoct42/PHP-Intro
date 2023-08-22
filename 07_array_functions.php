<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'orange', 'pear'];

// Getting the length:
echo count($fruits);
echo "<br>";
// Searching:
var_dump(in_array('apple', $fruits));
echo "<br>";
// Add to array:
array_push($fruits, 'blueberry', 'strawberry'); // vai pro fim
// Adiciona no início
array_unshift($fruits, 'mango');
// Remove do array:
array_pop($fruits); // REMOVE O ÚLTIMO.
array_shift($fruits); // REMOVE O PRIMEIRO.
// Imprimir o array:
print_r($fruits); // Printa o array!
echo "<br>";
// Concatenar arrays:
$arr1 = [1,2,3];
$arr2 = [6,7,8];

$arr3 = array_merge($arr1, $arr2);
print_r($arr3);

echo "<br>";

$arr4 = [...$arr1, ...$arr2]; // faz o mesmo que acima!
print_r($arr4);

echo "<br>";

// Combinando arrays para montar estruturas de chave-valor:
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);
print_r($c);

echo "<br>";

$keys = array_keys($c);
print_r($keys);

echo "<br>";

// Troca os valores das keys com values:
$flipped = array_flip($c);
print_r($flipped);

echo "<br>";

// Range:
$numbers = range(1, 20);
print_r($numbers);

echo "<br>";

// Map:
$new_numbers = array_map(function($n) {
  return "Number: $n";
}, $numbers);
print_r($new_numbers);

echo "<br>";

// Filter:
$less_than_10 = array_filter($numbers, fn($num) => $num <= 10);
print_r($less_than_10);

echo "<br>";

// Reduce:
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);

?>