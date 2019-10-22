<?php
require_once("./Compte.php");
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$i=0;
$trouve=false;

// recherche du bouton actif 
// recherche s'il s agit d'un bouton Crediter
while ($i<count($_SESSION["lesComptes"]) && !$trouve){
    $nombouton='Crediter'.$i;
    if (isset($_POST[$nombouton])){
        $trouve=true;
        $indice=$i;              //???
        $debiter=false;
    }
    else{
        $i++;
    }
}
if (!$trouve){ // Ce n est pas un bouton Créditer
    $i=0;
     // recherche s'il s agit d'un bouton Debiter
    while ($i<count($_SESSION["lesComptes"]) && !$trouve){
        $nombouton='Debiter'.$i;
        if (isset($_POST[$nombouton])){
            $trouve=true;
            $indice=$i;           // memorise le numero de la ligne ou le bouton a etait activé
            $debiter=true;
        }
        else{
            $i++;
        }
    } 
}

$nomchamps="montant".$indice;
$lemontant=$_POST[$nomchamps];   // recupere la valeur du post qui contient le montant activé
// verifie la valeur du montant du solde reçu de la page précédente

//A completer Verifier la validité du montant
if (isset($lemontant)  && $lemontant>0){
   echo "montant".$lemontant;
   // met à jour le compte concerné
   if ($debiter){
        //A completer debiter le compte du tableau
        $_SESSION["lesComptes"][$indice]->debiter($lemontant);
        
   }else{
        $_SESSION["lesComptes"][$indice]->crediter($lemontant);;
        
        
   }
}

// recharge la page listercompte.php
header("Location: listercompte.php");

?>