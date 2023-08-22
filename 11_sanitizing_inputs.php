<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

if(isset($_POST['submit'])){
  // htmlspecialchars() - Convert special characters to HTML entities
  // $name = htmlspecialchars($_POST['name']);
  // $email = htmlspecialchars($_POST['email']);

  // filter_var() - Sanitize data
  // $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  // $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

  // filter_input() - Sanitize inputs
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  echo $name;
  echo "<br>";
  $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
  echo $age;
  echo "<br>";

  // FILTER_SANITIZE_EMAIL - Convert string to a valid email address
  // FILTER_SANITIZE_URL - Convert string to a valid URL
  // FILTER_SANITIZE_NUMBER_INT - Convert string to an integer
  // FILTER_SANITIZE_NUMBER_FLOAT - Convert string to a float
  // FILTER_SANITIZE_FULL_SPECIAL_CHARS - HTML-encodes special characters, keeps spaces and most other characters
}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

  <div>
    <label for="name">Name: </label>
    <input type="text" name="name">
  </div>

  <div>
    <label for="age">Age: </label>
    <input type="text" name="age">
  </div>

  <input type="submit" value="Submit" name="submit">

</form>