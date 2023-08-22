<?php
/* ------------- Cookies ------------ */

/*
  Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
*/

// Set a cookie:
// Cookie de chave name, valor Adriano, que dura 86400 segundos, ou 1 dia. Após isso, expira.
setcookie('name', 'Adriano', time() + 86400);

if(isset($_COOKIE['name'])) {
  echo $_COOKIE['name'];
}
?>