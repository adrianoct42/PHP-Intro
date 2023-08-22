<?php
/* -------- Output & Comments ------- */

/*
  A .php file running on a server, can output both HTML and PHP code.
  There are multiple functions that can be used to output data to the browser.
*/

  // Output de coisas na tela:
  echo 'Hello! :)';
  // Print de chave-valor:
  print_r([1,2,3,4]);
  ?>

<!-- You can output any HTML that you want within a .php file -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My PHP Website</title>
</head>
<body>
  <!-- You can output PHP including variables, etc -->
  <h1>Hello <?php echo 'Cham'; ?></h1>
  <!-- You may only drop the semi-colon after a statement when the statement is followed immediately by a closing PHP tag ?>. -->
  <h1>Hello <?= 'Chamon!' ?></h1>
</body>
</html>
