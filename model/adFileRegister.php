<?php
//Récupération des données du formulaire
$adTitle = $_POST["inputAdTitle"];
$locationPhoto = $_POST["inputPhoto"];
$localisation = $_POST["inputLocalisation"];
$description = $_POST["inputDescription"];
$habitationType = $_POST["inputHabitation"];
$nbPieces = $_POST["inputNbPieces"];
$adresse = $_POST["inputAdresse"];
//generate ID
$id = uniqid();

// Création d'un tableau avec les données
$data = array(
    "Id" => $id,
    "Title" => $adTitle,
    "Image" => $locationPhoto,
    "Habitation" => $habitationType,
    "Localisation" => $localisation,
    "Pieces" => $nbPieces,
    "Description" => $description,
    "Adresse" => $adresse,
);

// Chargement du contenu du fichier JSON existant
$file = "data/location.json";
$current_data = file_get_contents($file);

// Décodage du JSON en un tableau PHP
$current_data = json_decode($current_data, false);


// Ajout des nouvelles données au tableau
$current_data[] = $data;


// Encodage du tableau en JSON
$json_data = json_encode($current_data, JSON_PRETTY_PRINT);


// Stockage du JSON dans le fichierf
file_put_contents($file, $json_data);

require('view/accountPage.php');
exit();

?>