<?php
require_once "./classes/Movie.php";

$movietest = new Movie("Cloud Atlas","Wachowski Sisters","Tom Hanks, Hugo Weaving, Hugh Grant, Halle Berry, Doona Bae","2012","Sci-fi/Drama");

echo "Titolo: " . $movietest->getTitolo();
?> <br> <?php
echo "Regista: " . $movietest->getRegista();
?> <br> <?php
echo "Attori Principali: " . $movietest->getMainattori();
?> <br> <?php
echo "Anno d'uscita: " . $movietest->getAnnouscita();
?> <br> <?php
echo "Genere: " . $movietest->getGenere();

?>