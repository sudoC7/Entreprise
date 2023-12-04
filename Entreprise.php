<?php

class Entreprise {
    
    private string $_raisonSociale;
    private DateTime $_dateCreation;
    private string $_adresse;
    private string $_cp;
    private string $_ville;

    public function __construct(string $raisonSociale, string $dateCreation, string $adresse, string $cp, string $ville) {
        $this->_raisonSociale = $raisonSociale;
        $this->_dateCreation = new DateTime($dateCreation);
        $this->_adresse = $adresse;
        $this->_cp = $cp;
        $this->_ville = $ville;
    }
    
    // ajouté pour le test 
    public function afficherInfos() {
        return $this->_raisonSociale." crée le ".$this->_dateCreation->format("Y")." et se situe à ".$this->_ville."(".$this->_cp.") au ".$this->_adresse;
    }

    // get & set 
    public function get_raisonSociale() : string
    {
        return $this->_raisonSociale;
    }
    public function set_raisonSociale($_raisonSociale)
    {
        $this->_raisonSociale = $_raisonSociale;

        return $this;
    }

  
    public function get_dateCreation()
    {
        return $this->_dateCreation;
    }
    public function set_dateCreation($_dateCreation)
    {
        $this->_dateCreation = $_dateCreation;

        return $this;
    }

 
    public function get_adresse() : string
    {
        return $this->_adresse;
    } 
    public function set_adresse($_adresse)
    {
        $this->_adresse = $_adresse;

        return $this;
    }

   
    public function get_cp() : string
    {
        return $this->_cp;
    }
    public function set_cp($_cp)
    {
        $this->_cp = $_cp;

        return $this;
    }

  
    public function get_ville() : string
    {
        return $this->_ville;
    }
    public function set_ville($_ville)
    {
        $this->_ville = $_ville;

        return $this;
    }
}