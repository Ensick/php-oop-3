
<?php

include_once __DIR__ . '/classi/generi.php';
include_once __DIR__ . '/classi/libro.php';
include_once __DIR__ . '/classi/audiolibro.php';
include_once __DIR__ . '/classi/dvd.php';
include_once __DIR__ . '/classi/cd.php';



$generi = [
  'giallo' => new Generi('giallo', 'icon-font-awesome-giallo'),
  'horror' => new Generi('horror', 'icon-font-awesome-horror'),
  'Sci-fi' => new Generi('Sci-fi', 'icon-font-awesome-horror'),
  'Rap' => new Generi('Rap', 'icon-font-awesome-horror'),

];
var_dump( $generi );

$prodotti = [
  new Libro( 'La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 250, 'flessibile' ),

  new audioLibro('La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 120, 'spotify', 'https://spotify-libri.com'),

  new Dvd('Spiderman', 'Sam Raimi', 19.99, $generi['Sci-fi'], true, 'https://immagine-copertina.com', 120, 2006, 'https://spotify-libri.com'),

  new Cd('V', 'Ensi', 19.99, $generi['Rap'], true, 'https://immagine-copertina.com', 120, 2016,'Lettore Cd'),

];

var_dump( $prodotti );

foreach( $prodotti as $elem ){
  echo get_class($elem);
  echo "<br>";
}
?>