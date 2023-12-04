<?php

class Employe {

    private string $_nom;
    private string $_prenom;
    private string $_email;

    public function __construct(string $nom, string $prenom, string $email) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_email = $email;
    }

    
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
}