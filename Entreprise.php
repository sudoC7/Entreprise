<?php

class Entreprise {
    
    private string $_raisonSociale;
    private DateTime $_dateCreation;
    private string $_adresse;
    private string $_cp;
    private string $_ville;
    private array $_employes; // ici nous créons un tableau dans le quel nous allons acceuillirs plusieurs salariés !!!!!!! 

    public function __construct(string $raisonSociale, string $dateCreation, string $adresse, string $cp, string $ville) {
        $this->_raisonSociale = $raisonSociale;
        $this->_dateCreation = new DateTime($dateCreation);
        $this->_adresse = $adresse;
        $this->_cp = $cp;
        $this->_ville = $ville;
        $this->_employes = [];
    }
    
    //--------------------------------------------------------------
    
    public function getAdresseComplete() {
        return $this->_adresse." ".$this->_ville." ".$this->_cp."<br>";
    }
    
    public function getInfos() {
        return  $this." crée le ". $this->get_dateCreation()->format('d-m-Y') ." et se situe à l'adresse ". $this->getAdresseComplete()."<br>";
    }

    public function addEmploye(Employe $employe) {
        $this->_employes[] = $employe;
    }

    public function afficherEmployer() {
        $result = "<h1>Employes de $this </h1>";

        foreach($this->_employes as $employe) {

            $result .= $employe."<br>"; 

        }

        return $result;
    }
    
    public function __toString() {
        return $this->_raisonSociale;
    }
    //--------------------------------------------------------------


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


    public function get_employes()
    {
        return $this->_employes;
    }
    public function set_employes($employes)
    {
        $this->_employes = $employes;

        return $this;
    }
}