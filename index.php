<?php

/**
 * 1. Créez une classe Habitation, elle contiendra les propriétés:
 *    - pays ( string )
 *    - ville ( string )
 *    - code postal ( entier ou string )
 *    - chambres ( entier )
 *    - pièces ( entier )
 *
 * Définissez tous les setters et les getters.
 *
 *
 *
 * 2. Créez une classe Maison qui étend de Habitation, elle contiendra les propriétés:
 *    - jardin ( booleen )
 *    - etages ( entier )
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 3. Créez une classe Appartement qui étend de habitation, elle contiendra les propriétés:
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 4. Créez deux instances de Maison et invoquez toutes les méthodes définies, sauf les setters ( dans index.php ).
 *
 *
 *
 * 5. Créez une instance de Appartement et invoquez toutes les méthodes définies, y compris les setters ( dans index.php ).
 */

require "Habitation.php";
require "Maison.php";
require "Appartement.php";

$Maison1 = new Maison("France","Felleries",59740,2,6, true, 1, true);
echo $Maison1->getPays() . "<br>";
echo $Maison1->getVille() . "<br>";
echo $Maison1->getCodePostal() . "<br>";
echo $Maison1->getChambres() . "<br>";
echo $Maison1->getPieces() . "<br>";
echo $Maison1->hasJardin() . "<br>"; // retourne 1 si true / Rien si false
echo $Maison1->getEtages() . "<br>";
echo $Maison1->hasGarage() . "<br><br>"; // retourne 1 si true / Rien si false

$Maison2 = new Maison("France","Avesnes-Sur-Helpe",59440,3,8,false,2,false);
echo $Maison2->getPays() . "<br>";
echo $Maison2->getVille() . "<br>";
echo $Maison2->getCodePostal() . "<br>";
echo $Maison2->getChambres() . "<br>";
echo $Maison2->getPieces() . "<br>";
echo $Maison2->hasJardin() . "<br>"; // retourne 1 si true / Rien si false
echo $Maison2->getEtages() . "<br>";
echo $Maison2->hasGarage() . "<br>"; // retourne 1 si true / Rien si false

$Appartement = new Appartement("France","Lille",59000,1, 3, false, 0,false);
echo $Appartement->getPays() . "<br>";
echo $Appartement->getVille() . "<br>";
echo $Appartement->getCodePostal() . "<br>";
echo $Appartement->getChambres() . "<br>";
echo $Appartement->getPieces() . "<br>";
echo $Appartement->hasGarage() . "<br>"; // retourne 1 si true / Rien si false

// setters pour un 2e appartement

echo $Appartement->setPays("France");
echo $Appartement->setVille("Roubaix");
echo $Appartement->setCodePostal(59000);
echo $Appartement->setChambres(2);
echo $Appartement->setPieces(4);
echo $Appartement->hasGarage(true); // retourne 1 si true / Rien si false

echo $Appartement->getPays() . "<br>";
echo $Appartement->getVille() . "<br>";
echo $Appartement->getCodePostal() . "<br>";
echo $Appartement->getChambres() . "<br>";
echo $Appartement->getPieces() . "<br>";
echo $Appartement->hasGarage() . "<br>"; // retourne 1 si true / Rien si false