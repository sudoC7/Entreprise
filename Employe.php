<?php

class Employe {

    private string $_nom;
    private string $_prenom;
    private string $_email;
    private Entreprise $entreprise; // Objet entreprise 

    public function __construct(string $nom, string $prenom, string $email, Entreprise $entreprise) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_email = $email;
        $this->entreprise = $entreprise; // objet entreprise 
        $this->entreprise->addEmploye($this); // objet entreprise 

    }
    //--------------------------------------------------------------
    public function getInfos() {
        echo $this." travaille dans l'entreprise ".$this->entreprise->get_raisonSociale();
    }

    public function __toString() {
        return $this->_prenom." ".$this->_nom;
    }
    //--------------------------------------------------------------


    // get & set 
    public function get_nom()
    {
        return $this->_nom;
    }
    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

 
    public function get_prenom()
    {
        return $this->_prenom;

    }
    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }


    public function get_email()
    {
        return $this->_email;
    }
    public function set_email($_email)
    {
        $this->_email = $_email;

        return $this;
    }
    
    
    public function get_entreprise() : Entreprise
    {
        return $this->entreprise;
    }
    public function set_entreprise(Entreprise $entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }
} 