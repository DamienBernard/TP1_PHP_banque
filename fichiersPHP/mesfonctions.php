<?php
require_once("./Compte.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// recherche un element dans un tableau et renvoie vrai si présent
function recherche($tab,$unelement){
   //A completer
    $trouve=false;
    $max=count($tab);
    $i=0;


    $numeroLocal=$unelement->getNumero();
    $nomLocal=$unelement->getNom();
    $soldeLocal=$unelement->getSolde();

    while ($trouve!==true && $i<$max){
        if ($tab[$i]->getNumero() == $numeroLocal && $tab[$i]->getNom() == $nomLocal && $tab[$i]->getSolde() == $soldeLocal){
           $trouve=true;
        }else{
            $i++;
        }
    }
    return $trouve;
}

function recherchebis($tab, $unelement){
    $i=0;
    $max=sizeof($tab);
    $trouvelocal=false;
    var_dump ($max);
    var_dump (count($tab));
    while ($trouvelocal!==true && $i<count($tab)){
        $trouve=$tab[$i]->identique($unelement);
        if ($trouve==true){
           $trouvelocal=true;

        }else{
            $i++;
        }

    }
    return $trouvelocal;
}

?>
