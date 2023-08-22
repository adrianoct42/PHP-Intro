<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 20;
if($age >= 18) {
  echo 'You are old enough to drink! hehe';
  echo "\n";
} else {
  echo 'No drinks for u! :(';
  echo "\n";
}

$time = date("H");
echo $time;
echo "\n";
if($time < 12) {
  echo "Good morning sunshine.";
  echo "\n";
} else if ($time < 17){
  echo "Good afternoon king.";
  echo "\n";
} else {
  echo "Good evening magistrate.";
  echo "\n";
}

// Checando se algo existe com empty():
$posts = ['First Post', 'Second Post'];
if(!empty($posts)) {
  echo $posts[0];
} else {
  echo "It's empty!";
}

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

echo "\n";
$secondPost = !empty($posts) ? $posts[1] : "EMPTY!";
echo $secondPost;

// Usando o ?? operator:
// Assume o valor de posts[0] caso não seja nulo.
// Se for nulo, assume o valor de 5 no exemplo abaixo.
$firstPost = $posts[0] ?? 5;
echo "<br>";

/* -------- Switch Statements ------- */

$fav_color = 'purple';
switch($fav_color) {
  case 'red':
    echo 'Your favorite color is red!';
    break;
  case 'blue':
    echo 'Your favorite color is blue!';
    break;
  case 'green':
    echo 'Your favorite color is green!';
    break;
  default:
    echo "Your favorite color is $fav_color!";
};

?>