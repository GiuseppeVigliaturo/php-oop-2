<?php

// - Definire la classe Persona caratterizzata da nome e cognome
// - Definire la classe Ospite (che eredita da Persona) caratterizzata da nome, cognome e anno di nascita
// - Definire la classe Pagante (che eredita da Persona) caratterizzata da nome, cognome e indirizzo (di residenza)
// - Per ogni classe definire costruttore e toString in maniera appropriata, eventualmente richiamando i metodi della classe padre
// - Eseguire dei test, istanziando ogni classe definita e testando la correttezza dei risultati attesi
class Persona {

  public $name;
  public $lastname;

 //metodo construct
  function __construct($name, $lastname) {

    $this -> name= $name;
    $this -> lastname = $lastname;

  }

   function __toString() {

    return     "La persona si chiama:: "
              .$this -> name
             . $this -> lastname;
  }
}

class Ospite extends Persona {
  public $date_of_birth;
  function __construct($name, $lastname, $date_of_birth) {
    parent::__construct($name, $lastname);
    $this -> date_of_birth = $date_of_birth;
  }

 function __toString() {

  return     "<br>"."<br>".
              "I dati dell'ospite sono: "."<br>"
            ."nome: ". $this -> name ."<br>".
             "cognome: ". $this -> lastname."<br>".
             "data di nascita: ". $this -> date_of_birth;
 }

}

class Pagante extends Persona {
  public $address;
  function __construct($name, $lastname, $address) {
    parent::__construct($name, $lastname);
    $this -> address = $address;
  }

 function __toString() {

  return     "<br>"."<br>".
              "I dati del pagante sono: "."<br>"
              ."nome: ". $this -> name ."<br>".
             "cognome: ". $this -> lastname."<br>".
             "indirizzo: Via ". $this -> address;
 }

}
