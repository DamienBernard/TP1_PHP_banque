
<?php
// importe la classe Compte
require_once("./Compte.php");
// demarre la session
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
          


<div id="corps">
                <script type="text/javascript">
                   // initialise();
                </script>
                    <section>
                            <article>   
                                <h1>Liste des comptes</h1>
                              
                                <div id="detail"> 
                                    <h2>
                                        Descriptif détaillé
                                     </h2>
                                    <h1> 
                                        <!--
                                        appelle la page crediter_debiter.php sur clic d'un des boutons
                                        -->
                                       
                                        <form name="liste" action="crediter_debiter.php" method="post">
                                        
                                            <?php
                                                // put your code here   
                                                $i=0;
                                                // construit un tableau de 5 colonnes
                                                echo ("<table>  <thead> <tr> <th>Compte N°  <th> Client  <th> Solde <th> <th> <th> <tbody>");
                                                //parcours le tableau des comptes 
                                                foreach($_SESSION["lesComptes"] as $unCompte) // as $unCompte renomer chaque case du tableau a unCompte
                                                {
                                                    // remplit une ligne du tableau avec uncompte extrait du tableau
                                                    $ligne='<tr><td>'.$unCompte->getNumero().'<td>'.$unCompte->getNom().'<td>'.$unCompte->getSolde();
                                                    // crée une zone de saisie pour ce compte
                                                    $ligne=$ligne.'<td><input type="text" name="montant'.$i.'" value="0" size="6" />';
                                                    // crée un bouton Crediter pour ce compte
                                                    $ligne=$ligne.'<td><input type="submit" value="Crediter" name="Crediter'.$i.'" size="10"  onclick="verifiermontant(this.form.montant'.$i.'.value);"/>';
                                                    // crée un bouton Debiter pour ce compte
                                                    $ligne=$ligne.'<td><input type="submit" value="Debiter" name="Debiter'.$i.'" size="10" onclick="verifiermontant(this.form.montant'.$i.'.value);"/></tr> ';
                                                    echo ($ligne);
                                                    $i++;
                                                }
                                                echo("</table>");
                                            ?>
                                        </form>
                                    </h1>
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