<?php

class Compte {
    private $numero;
    private $nom;
    private $solde;

    public function creer($pnum,$pnomclient,$psolde){
        $this->numero=$pnum;
        $this->nom=$pnomclient;
        $this->solde=$psolde;
    }
    //augmentation du solde
    public function crediter($pmontant){
        $this->solde=$this->solde+$pmontant;
    }
    //dominution du solde
    public function debiter($pmontant){
        $this->solde=$this->solde-$pmontant;
    }
    //get  = getter
    //set = setter
    //les deux = accesseurs
    public function getSolde(){
        return $this->solde;
    }
    //renvoie le numero
     public function getNumero(){
        return $this->numero;
    }
    //renvoie le nom
    public function getNom(){
        return $this->nom;
    }
    // modifie le nom
     public function setNom($pnom){
        $this->nom=$pnom;
    }
    //modofie le numero
     public function setNumero($pnumero){
        $this->numero=$pnumero;
    }
    //modifie le solde
    public function setSolde($pmontant){
        $this->solde=$pmontant;
    }
    public function afficher (){
        echo $this->numero." ";
        echo $this->nom." ";
        echo $this->solde;
    }
    //modifie le nom du compte
    public function nouveauNom($pnouveauNom){
        $this->nom=$pnouveauNom;
    }
    //fait la copie du compte actuel
    public function copie(){
        $copieCompte=new Compte();

        $num=$this->getNumero();
        $nom=$this->nom;
        $soldee=$this->solde;

        $copieCompte->creer($num,$nom,$soldee);

        return $copieCompte;

    }
    public function identique($punCompte){
        //affection des attributs du parametre punCompte
      $numerolocal=$punCompte->getNumero();
      $nomlocal=$punCompte->getNom();
      $soldelocal=$punCompte->getSolde();

      if ($this->numero == $numerolocal && $this->nom == $nomlocal && $this->solde == $soldelocal) {
        $result = true;
      }else {
        $result = false;
      }
      return $result;
    }
    
    

}



?>
