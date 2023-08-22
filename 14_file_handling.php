<?php

/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

$file = 'extras/users.txt';

// Se existir: LER O ARQUIVO else CRIAR O ARQUIVO.

if(file_exists($file)){
  // echo readfile($file);
  $handle = fopen($file, 'r'); // POINTER PARA LEITURA
  $contents = fread($handle, filesize($file)); // LÊ O POINTER
  fclose($handle); // ENCERRA O POINTER
  echo $contents; // IMPRIME NA TELA O CONTEÚDO
} else {
  $handle = fopen($file, 'w'); // POINTER PARA ESCRITA
  $contents = 'AdrianoChamão' . PHP_EOL . 'Mateus' . PHP_EOL . 'Tristão' . PHP_EOL . 'Fett' . PHP_EOL . 'Rafael' . PHP_EOL . 'Tiago'; // PHP_EOL É O MESMO QUE \n, para escrever na próxima linha.
  fwrite($handle, $contents); // ESCREVE NO ARQUIVO
  fclose($handle); // ENCERRA O POINTER
  echo $contents; // IMPRIME NA TELA O CONTEÚDO
};

?>