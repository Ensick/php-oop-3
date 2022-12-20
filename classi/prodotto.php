
<?php

include_once __DIR__ . '/generi.php';

class Prodotto{
  public $nome;
  public $autore;
  public $prezzo;
  public $generi;
  public $pubblicato;
  public $immagine;
  public $quantita;

  public function __construct(

    String $nome,
    String $autore,
    Float $prezzo,
    Generi $generi,
    Bool $pubblicato,
    String $immagine

    ) {

    $this->nome = $nome;
    $this->autore = $autore;
    $this->prezzo = $prezzo;
    $this->generi = $generi;
    $this->pubblicato = $pubblicato;
    $this->immagine = $immagine;
    $this->quantita = 10;
  }


  public function vendi($davendere){
    try {
      if($davendere > $this->quantita){
        throw new Exception('La quantità richiesta per la vendita è maggiore della quantità disponibile');
      } else {
        $this->quantita = $this->quantita - $davendere;
      }
    } catch (Exception $e) {
      // Gestisci l'eccezione
      echo $e->getMessage(); // Stampa il messaggio dell'eccezione
    }
  }

}

?>