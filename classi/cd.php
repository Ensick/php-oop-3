
<?php

include_once __DIR__ . '/prodotto.php';

include_once __DIR__ . '/eta.php';

class Cd extends Prodotto{

  public $durata;
  public $anno;
  use Eta;
  
  public function __construct(

    String $nome,
    String $autore,
    Float $prezzo,
    Generi $generi,
    Bool $pubblicato,
    String $immagine,

    Float $durata,
    String $anno 
   
    ) {

    $this->durata = $durata;
    $this->anno = $anno;

    parent::__construct($nome,$autore,$prezzo,$generi,$pubblicato,$immagine );
  }


}


?>