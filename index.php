
<?php

include_once __DIR__ . '/classi/generi.php';
include_once __DIR__ . '/classi/libro.php';
include_once __DIR__ . '/classi/audiolibro.php';
include_once __DIR__ . '/classi/dvd.php';
include_once __DIR__ . '/classi/cd.php';
include_once __DIR__ . '/classi/addetto.php';



$generi = [
  'giallo' => new Generi('giallo', 'icon-font-awesome-giallo'),
  'horror' => new Generi('horror', 'icon-font-awesome-horror'),
  'Per famiglie/Commedia' => new Generi('Per famiglie/Commedia', 'icon-font-awesome-horror'),
  'Rock' => new Generi('Rock', 'icon-font-awesome-horror'),

];
var_dump( $generi );

$prodotti = [
  new Libro( 'La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 250, 'flessibile' ),

  new audioLibro('La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 120, 'spotify', 'https://spotify-libri.com'),

  new Dvd('Space Jam', 'Warner Bros', 9.99, $generi['Per famiglie/Commedia'], true, 'https://immagine-copertina.com', 88 , 1996, 'https://spotify-libri.com'),

  new Cd('Eat the Phikis', 'Elio e le Storie Tese', 19.99, $generi['Rock'], true, 'https://immagine-copertina.com', 69.45 , 1996,'Lettore Cd'),

  new Addetto('Nicolas','Daltronde',1996,'Dvd')

];


$nicolas =   new Addetto('Nicolas','Daltronde',1983,'Dvd');
echo $nicolas -> getEta();

$dvd = new Dvd('Space Jam', 'Warner Bros', 9.99, $generi['Per famiglie/Commedia'], true, 'https://immagine-copertina.com', 88 , 1996, 'https://spotify-libri.com');
echo $dvd -> getEta();
echo $dvd->vendi(11);


$cd = new Cd('Eat the Phikis', 'Elio e le Storie Tese', 19.99, $generi['Rock'], true, 'https://immagine-copertina.com', 69.45 , 1996,'Lettore Cd');
echo $cd -> getEta();
echo $cd->vendi(8);

var_dump( $cd );

foreach( $prodotti as $elem ){
  echo get_class($elem);
  echo "<br>";
}

?>