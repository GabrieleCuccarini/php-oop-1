<?php
require_once "./classes/Movie.php";

$movieone = new Movie("Cloud Atlas","Wachowski Sisters","Tom Hanks, Hugo Weaving, Hugh Grant, Halle Berry, Doona Bae","2012","Sci-fi/Drama");
$movietwo = new Movie("Smetto quando voglio","Sydney Sibilia","Pietro Sermonti, Libero de Rienzo, Valerio Aprea, Stefano Fresi","2014","Comedy");
?>

<h2>Movie1</h2>
<h3>Titolo: <?php
echo $movieone->getTitolo();
?> </h3> <h3>Regista: <?php
echo $movieone->getRegista();
?> </h3> <h3>Attori Principali: <?php
echo $movieone->getMainattori();
?> </h3> <h3>Anno d'uscita: <?php
echo $movieone->getAnnouscita();
?> </h3> <h3>Genere: <?php
echo $movieone->getGenere();
?>

<h2>Movie2</h2>
<h3>Titolo: <?php
echo $movietwo->getTitolo();
?> </h3> <h3>Regista: <?php
echo $movietwo->getRegista();
?> </h3> <h3>Attori Principali: <?php
echo $movietwo->getMainattori();
?> </h3> <h3>Anno d'uscita: <?php
echo $movietwo->getAnnouscita();
?> </h3> <h3>Genere: <?php
echo $movietwo->getGenere();
#echo $movietwo->getTitoloeRegista();

?>