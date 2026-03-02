<?php
$nom = "Alice";       // متغير نصي (string)
$age = 25;            // متغير عددي صحيح (int)
$prix = 19.99;        // متغير عددي عشري (float)
$estConnecte = true;  // متغير منطقي (bool)

echo "Nom : " . $nom . "<br>";
echo "Âge : " . $age . "<br>";
echo "Prix : " . $prix . " €<br>";
echo "Connecté : " . ($estConnecte ? "Oui" : "Non") . "<br>";

var_dump($nom); 