<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/

session_start();

if(isset($_POST['submit'])){
  // htmlspecialchars() - Convert special characters to HTML entities
  // $name = htmlspecialchars($_POST['name']);
  // $email = htmlspecialchars($_POST['email']);

  // filter_var() - Sanitize data
  // $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  // $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

  // filter_input() - Sanitize inputs
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  echo $username;
  echo "<br>";

  $password = $_POST['password'];

  if($username == 'john' && $password == 'password'){
    $_SESSION['username'] = $username;
    header('Location: /php-crash/extras/dashboard.php');
  } else {
    echo "Incorrect login!";
  }

  // FILTER_SANITIZE_EMAIL - Convert string to a valid email address
  // FILTER_SANITIZE_URL - Convert string to a valid URL
  // FILTER_SANITIZE_NUMBER_INT - Convert string to an integer
  // FILTER_SANITIZE_NUMBER_FLOAT - Convert string to a float
  // FILTER_SANITIZE_FULL_SPECIAL_CHARS - HTML-encodes special characters, keeps spaces and most other characters
}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

  <div>
    <label for="username">Username: </label>
    <input type="text" name="username">
  </div>

  <div>
    <label for="password">Password: </label>
    <input type="password" name="password">
  </div>

  <input type="submit" value="Submit" name="submit">

</form>