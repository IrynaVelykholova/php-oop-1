<?php
    class Movie {
        // Dichiarazione delle variabili d'istanza
        private $title;
        private $director;
        private $year;

        // Costruttore
        public function __construct($_title, $_director, $_year) {
            $this->title = $_title;
            $this->director = $_director;
            $this->year = $_year;
        }

        // Metodo per ottenere i dettagli del film
        public function getDetails() {
            return "Titolo: " . $this->title . ", Regista: " . $this->director . ", Anno: " . $this->year;
        }
    }
?>
