<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
// demarre une session (pour simuler des variables globales)
    session_start();
    if (!isset($_SESSION["lesComptes"])) {// si le tableau n'existe pas , on le crée une fois au 1° chargement
        
         $_SESSION["lesComptes"] = array();
    }
    
   
?>
<html lang="fr">
    <head>
            <title>CMABANK</title>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <link href="css/banque.css" rel="stylesheet" type="text/css">
            <script type="text/javascript" src="fichierjavascripts/fichier_javascript_TPBanque.js"></script>
    
    </head>
 
    <body>
        <nav id="menuvertical">
            <ul>
                <!--lien vers d'autre page php -->
                <li><a href="index.php">Accueil</a></li>
                <li><a href="#">Nos services</a>
                        <ul>
                            <li><a href="fichiersHTML/encours.html">Bourse</a></li> 
                            <li><a href="fichiersHTML/encours.html">Patrimoine</a></li> 
                            <li><a href="fichiersHTML/encours.html">Mes comptes</a>
                                <ul>
                                    <li><a href="fichiersPHP/creercompte.php">Créer un compte</a></li> 
                                    <li><a href="fichiersPHP/listercompte.php">lister les comptes</a></li>
                                </ul>
                            </li> 
                        </ul>
                </li>
                <li><a href="#">Actualités</a>
                        <ul>
                            <li><a href="fichiersHTML/encours.html">Economie</a> </li>
                            <li><a href="fichiersHTML/encours.html">Sport</a> </li>
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
				<li><a href="index.php">Accueil</a></li>
				<li><a href="fichiersHTML/encours.html">Bourse</a></li>
				<li><a href="fichiersHTML/encours.html">Patrimoine</a></li>
                                <li><a href="fichiersHTML/encours.html">Mes comptes</a></li>
 				</ul>
			</nav>
            <div id="corps">
                <script type="text/javascript">
                   // initialise();
                </script>
                    <section>
                            <article>   
                                
                                <?php
                                // put your code here
                                echo "<h1> Bienvenue sur le site de CMABANK </h1></br></br>";
                                ?>
                               <div id="detail"> 
                                    <h2> CMABANK c'est votre banque</h2>
                                    <h1>  </br></br> </h1>
                                </div>
                                
                                </br></br>
                                
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


