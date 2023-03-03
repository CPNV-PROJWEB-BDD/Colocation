

<?php
//test de login fichier qui remplace le fichier fileConnecotr et DateRegister

//Récupération des données du formulaire
$prenom = $_POST["inputFirstName"];
$nom = $_POST["inputLastName"];
$email = $_POST["inputEmailAddress"];

// Création d'un tableau avec les données
$data = array(
    "prenom" => $prenom,
    "nom" => $nom,
    "email" => $email,
);

// Chargement du contenu du fichier JSON existant
$file = "data/register.json";
$current_data = file_get_contents($file);

// Décodage du JSON en un tableau PHP
$current_data = json_decode($current_data, false);


// Ajout des nouvelles données au tableau
$current_data[] = $data;


// Encodage du tableau en JSON
$json_data = json_encode($current_data, JSON_PRETTY_PRINT);


// Stockage du JSON dans le fichierf
file_put_contents($file, $json_data);



exit();

?>

