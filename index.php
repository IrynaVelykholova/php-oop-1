<?php
    require_once __DIR__ . '/Movie.php'; // Includiamo la classe Movie

    // Creazione oggetti Movie
    $movie1 = new Movie("Inception", "Christopher Nolan", 2010);
    $movie2 = new Movie("Interstellar", "Christopher Nolan", 2010);
    $movie3 = new Movie("Il Signore degli Anelli", "Peter Jackson", 2001);

    // Ottenere e stampare i dettagli dei film
    var_dump($movie1);
    echo "Film 1: " . $movie1->getDetails() . "<br>";

    var_dump($movie2);
    echo "Film 2: " . $movie2->getDetails() . "<br>";

    var_dump($movie3);
    echo "Film 3: " . $movie3->getDetails() . "<br>";
?>
