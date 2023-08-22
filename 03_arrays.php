<?php
/* ----------- Arrrays ----------- */
// Arrays hold multiple values.
// Each value in an array is called an "element"

// Simples, podemos usar [] ou array():
  $numbers = [1, 44, 55, 22];
  $fruits = array('apple', 'orange', 'pear');
  // Para printar arrays:
  print_r($numbers);
  echo "<br>";
  print_r($fruits);
  echo "<br>";
  // Para saber os TIPOS dos conteúdos dos arrays:
  var_dump($numbers);
  echo "<br>";

  // Objestos chave-valor em PHP:
  // Associative Array:
  $colors = [
    0 => 'red',
    1 => 'blue',
    2 => 'green',
  ];
  $person = [
    'first_name' => "Adriano",
    'last_name' => "Chamon",
    'email' => "chamon42@gmail.com",
  ];

  echo $person['first_name'];
  echo "<br>";
  echo $colors[0];
  echo "<br>";

  // Array multi-dimensional:
  $people = [
    [
    'first_name' => "Adriano",
    'last_name' => "Chamon",
    'email' => "chamon42@gmail.com",
    ],
    [
      'first_name' => "John",
      'last_name' => "Doe",
      'email' => "john@gmail.com",
    ],
    [
      'first_name' => "Alucard",
      'last_name' => "Tepes",
      'email' => "doracula@gmail.com",
    ],
  ];

  echo $people[2]['email'];
  echo "<br>";
  
  // Transformando Associative Array em JSON:
  var_dump(json_encode($people));
?>