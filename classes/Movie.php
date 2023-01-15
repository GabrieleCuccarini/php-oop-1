<?php
class Movie {
    private $titolo;
    private $regista;
    private $mainattori;
    private $annouscita;
    private $genere;

    function __construct($_titolo, $_regista, $_mainattori, $_annouscita, $_genere) {
        $this->setTitolo($_titolo);
        $this->setRegista($_regista);
        $this->setMainattori($_mainattori);
        $this->setAnnouscita($_annouscita);
        $this->setGenere($_genere);
    }


    /**
     * Get the value of titolo
     */ 
    public function getTitolo()
    {
        return $this->titolo;
    }

    /**
     * Set the value of titolo
     *
     * @return  self
     */ 
    public function setTitolo($_titolo)
    {
        $this->titolo = $_titolo;

        return $this;
    }

    /**
     * Get the value of regista
     */ 
    public function getRegista()
    {
        return $this->regista;
    }

    /**
     * Set the value of regista
     *
     * @return  self
     */ 
    public function setRegista($_regista)
    {
        $this->regista = $_regista;

        return $this;
    }

    /**
     * Get the value of mainattori
     */ 
    public function getMainattori()
    {
        return $this->mainattori;
    }

    /**
     * Set the value of mainattori
     *
     * @return  self
     */ 
    public function setMainattori($_mainattori)
    {
        $this->mainattori = $_mainattori;

        return $this;
    }

    /**
     * Get the value of anno_uscita
     */ 
    public function getAnnouscita()
    {
        return $this->annouscita;
    }

    /**
     * Set the value of anno_uscita
     *
     * @return  self
     */ 
    public function setAnnouscita($_annouscita)
    {
        $this->annouscita = $_annouscita;

        return $this;
    }

    /**
     * Get the value of genere
     */ 
    public function getGenere()
    {
        return $this->genere;
    }

    /**
     * Set the value of genere
     *
     * @return  self
     */ 
    public function setGenere($_genere)
    {
        $this->genere = $_genere;

        return $this;
    }

    public function getTitoloeRegista() {
        return $this->titolo . " " . $this->regista;
    }
}

#$movietest = new Movie('Titolo','Regista','Attore1, attore2','20XX','GenereXY');
#var_dump($movietest);
?>