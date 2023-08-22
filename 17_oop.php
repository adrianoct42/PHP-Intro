<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural
  or object oriented way. OOP consists of classes that
  can hold "properties" and "methods".
  Objects can be created from classes.
*/

class User {
  // Propriedades são atributos que pertencem a classe.
  // Access Modifiers: public, private, protected
  // public - can be accessed from anywhere
  // private - can only be accessed from inside the class
  // protected - can only be accessed from inside the class and by inheriting classes
  public $name;
  public $email;
  public $password;

  // Um construtor é uma função/método que executa quando o objeto é criado.
  public function __construct($name, $email, $password) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  // Método é uma função que pertence à uma classe:
  // SETTER:
  function set_name($name) {
    $this->name = $name;
  }
  // GETTER:
  function get_name() {
    return $this->name;
  }
}


// Instanciando a classe:
$user1 = new User("Chamon", 'chamon@gmail.com', 'belog');
$user2 = new User("John", 'snake@gmail.com', 'naked');
$user1->set_name("Cammy");
$user2->set_name("Sammy");
// var_dump($user1);
// var_dump($user2);

// Inheritance/Herança:

class employee extends User {
  public function __construct($name, $email, $password, $title)
  {
    parent::__construct($name, $email, $password);
    // Se nesses 2 lugares a palavra "title" estiver marcada como UNKNOW PROPERTY, ignore, a extensão do VSCODE tá doidona.
    $this->title = $title;
  }

  public function get_title() {
    // Se nesses 2 lugares a palavra "title" estiver marcada como UNKNOW PROPERTY, ignore, a extensão do VSCODE tá doidona.
    return $this->title;
  }
}


$employee1 = new Employee("Sara", "sara@gmail.com", 12345, "Manager");
echo $employee1->get_title();

?>