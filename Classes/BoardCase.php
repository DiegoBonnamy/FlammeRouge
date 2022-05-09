<?php

class BoardCase
{
    private $_numero; // Numero
    private $_taille; // Nombre de place
    private $_surface; // Asphalte / Paves
    private $_pente; // Plat / Montée / Descente

    private $_cyclistes; // Liste des cyclistes qui occupe la case

    private $_voiture; // Indique si une voiture se trouve sur la case

    public function __construct($numero, $taille, $surface, $pente){
        $this->_numero = $numero;
        $this->_taille = $taille;
        $this->_surface = $surface;
        $this->_pente = $pente;

        $this->_cyclistes = array();

        $this->_voiture = false;
    }

    public function getNumero(){
        return $this->_numero;
    }

    public function getTaille(){
        return $this->_taille;
    }

    public function getSurface(){
        return $this->_surface;
    }

    public function getPente(){
        return $this->_pente;
    }

    public function getCyclistes(){
        return $this->_cyclistes;
    }

    public function getVoiture(){
        return $this->_voiture;
    }

    public function addCycliste(Cycliste $c){
        if(count($this->_cyclistes) < $this->_taille){
            array_push($this->_cyclistes, $c);
            return true;
        }
        else{
            return false;
        }
    }

    public function removeCycliste(Cycliste $c){

        // On récupère tous les cyclistes de la case
        $replacement_list = array();
        foreach($this->_cyclistes as $cycliste){
            if($cycliste->getId() != $c->getId()){
                array_push($replacement_list, $cycliste);
            }
        }

        // On vide la case
        $this->clear();

        // On la re-rempli
        foreach($replacement_list as $cycliste){
            $this->addCycliste($cycliste);
        }

    }

    public function clear(){
        $this->_cyclistes = array();
    }

    public function setVoiture($valeur){
        $this->_voiture = $valeur;
    }

    /* TESTS */

    public function testMontee(){
        return $this->getPente() == "Montee";
    }

    public function testDescente(){
        return $this->getPente() == "Descente";
    }

    public function testPaves(){
        return $this->getSurface() == "Paves";
    }

    public function testPlat(){
        return $this->getSurface() == "Asphalte" && $this->getPente() == "Plat";
    }

    public function testLibre(){
        return count($this->getCyclistes()) < $this->getTaille();
    }

    public function testFinish(){
        return $this->getSurface() == "Finish";
    }

    public function testStart(){
        return $this->getSurface() == "Start";
    }

}


?>