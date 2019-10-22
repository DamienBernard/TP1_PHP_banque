<?php
    // importe la classe Compte
    require_once("./Compte.php");
    require_once("./mesfonctions.php");
    // démarre la session
    session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 ?>


<html lang="fr">
    <head>
           <title>CMABANK</title>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <link href="../css/banque.css" rel="stylesheet" type="text/css">
            <script type="text/javascript" src="../fichierjavascripts/fichier_javascript_TPBanque.js"></script>
    </head>
 
    <body>
        <nav id="menuvertical">
            <ul>
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="#">Nos services</a>
                    <ul>
                        <li><a href="../fichiersHTML/encours.html">Bourse</a></li> 
                        <li><a href="../fichiersHTML/encours.html">Patrimoine</a></li> 
                        <li><a href="../fichiersHTML/encours.html">Mes comptes</a>
                            <ul>
                                <li><a href="creercompte.php">Créer un compte</a></li> 
                                <li><a href="listercompte.php">lister les comptes</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Actualités</a>
                        <ul>
                                <li><a href="../fichiersHTML/encours.html">Economie</a> </li>
                                <li><a href="../fichiersHTML/encours.html">Sport</a> </li>
                        </ul>
                </li>
                <li><a class="contact" href="#pied">Contact</a></li>
            </ul>
        </nav>
	<div id="conteneur">
            <header>
                    <h1>SIO Gestion bancaire</h1>
            </header>
            <nav id="menuhorizontal">
				<ul>
				<li><a href="../index.php">Accueil</a></li>
				<li><a href="../fichiersHTML/encours.html">Bourse</a></li>
				<li><a href="../fichiersHTML/encours.html">Patrimoine</a></li>
                                <li><a href="../fichiersHTML/encours.html">Mes comptes</a></li>
 				</ul>
			</nav>
          
<?php


$message="";
// Au chargement de la page, verifier si on obtient des valeurs valides de création de compte
//conditions bloquante si c'est le premeire chargment de page pu valeur incorrecte 
if (isset($_POST["Numcompte"]) && $_POST["Numcompte"]!="" && isset($_POST["Nomclient"]) && $_POST["Nomclient"]!="" && $_POST["Solde"]!="" && $_POST["Solde"]>=0){
    $unsolde=$_POST["Solde"]; // fait reference a un champ de saisie dans le html
    $unclient=$_POST["Nomclient"];
    $unnumero=$_POST["Numcompte"];
    // instancie un compte nommé unCompte
    $unCompte=new Compte();
    // initialise le compte créé
    $unCompte->creer($unnumero, $unclient, $unsolde);
    // verifie l'existence d'un compte identique dans le tableau
    if (!recherchebis($_SESSION["lesComptes"],$unCompte)){
        // ajoute le compte au tableau de comptes
        $_SESSION["lesComptes"][]=$unCompte;
        // prépare le message à afficher
        $message="Compte du client enregistré!";
    }else {
        $message="Création annulée, compte déjà existant!";
    }
    var_dump($_SESSION["lesComptes"]);
    echo $message;
    
}

 ?>
<div id="corps">
                <script type="text/javascript">
                   // initialise();
                </script>
                    <section>
                            <article>   
                                <h1>Saisie de comptes</h1>
                                <!-- émetteur la page qui a le post recepteur celui qui a l'action-->
                                <form action="creercompte.php" method="post"> <!-- envoit par une methode post c'est propre information grace a action-->
                                    N° compte : <input type="text" name="Numcompte" id="Numcompte" value="" size="5" />
                                    <span class="marge"></span>
                                    Nom du client : <input type="text" name="Nomclient" id="Nomclient" value="" size="30"/>
                                    <span class="marge"></span>
                                    Solde : <input type="text" id="Solde" name="Solde" value="0" size="5"/>
                                    </br> </br>
                                    <span class="marge"></span><input type="submit" value="Enregistrer" name="enreg" onclick="return verifiercreation(this.form.Solde.value,this.form.Numcompte.value,this.form.Nomclient.value);"/>
                                    </span><input type="reset" value="Effacer" name="Effacer" />
                                    
                                    
                                </form>
                                <div id="detail"> 
                                    <h2>
                                        <?php
                                        // put your code here

                                           
                                        echo($message);
                                           
                                        ?>
                                     </h2>
                                    <h1>  </h1>
                                </div>
                                
                                
                            </article>
                    </section>
            </div> 
            <footer>
                    <div id="pied">
                            <p class="copyr">Copyright BTS SIO 1- Tous droits réservés</p>
                            <p class="contact">Lycée Bertran de Born<br />
                    </div>
            </footer>
        </div> 
    </body>
</html>