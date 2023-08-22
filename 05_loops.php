<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

for($x = 0; $x <= 10; $x++) {
  echo $x;
  echo "<br>";
}

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

$x = 1;
while($x <= 15) {
  echo "Number $x";
  $x++;
  echo "<br>";
};


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

$x = 1;
do {
  echo "(Do while) --> $x <br>";
  $x++;
} while ($x <= 10);



/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

$posts = ['First Post', 'Second Post', 'Third Post'];
// count() é o equivalente de .length:
echo count($posts);
echo "<br>";

foreach($posts as $post) {
  echo $post;
  echo "<br>";
}

echo "Trabalhando com index dos arrays: <br>";

foreach($posts as $index => $post) {
  echo "$index --> $post";
  echo "<br>";
}

$person = [
  'first_name' => "Adriano",
  'last_name' => "Chamon",
  'email' => "hunterwithin@gmail.com",
];

echo "Trabalhando com ASSOCIATIVE ARRAYS (chave-valor): <br>";

foreach($person as $chave => $valor) {
  echo "$chave --> $valor";
  echo "<br>";
}

?>