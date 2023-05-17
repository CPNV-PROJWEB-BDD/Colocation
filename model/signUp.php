<?php
//Récupération des données du formulaire
$prenom = $_POST["inputFirstName"];
$nom = $_POST["inputLastName"];
$email = $_POST["inputEmailAddress"];
$motDePasse = $_POST["inputPassword"];
$verificationMDP = $_POST["inputPasswordCheck"];

// Création d'un tableau avec les données
$data = array(
    "prenom" => $prenom,
    "nom" => $nom,
    "email" => $email,
    "motDePasse" => $motDePasse
);

if ($motDePasse == $verificationMDP) {

    // Chargement du contenu du fichier JSON existant
        $file = "data/users.json";
        $current_data = file_get_contents($file);

    // Décodage du JSON en un tableau PHP
        $current_data = json_decode($current_data, false);


    // Ajout des nouvelles données au tableau
        $current_data[] = $data;


    // Encodage du tableau en JSON
        $json_data = json_encode($current_data, JSON_PRETTY_PRINT);


    // Stockage du JSON dans le fichierf
        file_put_contents($file, $json_data);

        $_SESSION['email'] = $email;


        return;
}else{
require "view/signUpForm.php";
exit();
}
?>