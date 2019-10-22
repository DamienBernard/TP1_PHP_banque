/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//A compléter

function verifiercreation (psolde, pnumero, pnomcompte){
    
    var erreur = true;   
    var message="";
    if (pnomcompte==""){
       message = message + "Le numero de compte n'est pas renseigné\n";
       erreur = false;
    }      
    if (pnumero=="" || pnumero<=0 || isNaN(pnumero)){
        message = message + "Votre numéro de compte est incorrecte\n";
        erreur = false; 
    }   
    if (psolde<=0 || isNaN(psolde)){
        message = message + "Votre solde est incorrecte\n";
        erreur = false;
    }
    if (erreur == false){
     alert(message);   
    }
    return erreur;
}