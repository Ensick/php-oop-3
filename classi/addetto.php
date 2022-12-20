
<?php

include_once __DIR__ . '/eta.php';
class Addetto{

    public $nome;
    public $cognome;
    public $anno;
    public $settore;
    use Eta;

    public function __construct(

        String $nome,
        String $cognome,
        Int $anno,
        String $settore
    ){

        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->anno = $anno;
        $this->settore = $settore;
    }
}

?>